<?php

namespace App\Http\Controllers;

use App\Cat;
use App\Order;
use App\User;
use App\Category;
use App\Pesa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Kopokopo\SDK\K2;
use Safaricom\Mpesa\Mpesa;
use Session;
use Carbon\Carbon;

class   CheckoutController extends Controller
{
    public function index(){
        $oldCart = Session::get('cat');
        $cart = new Cat($oldCart);
        $user = User::where('id',Auth::id())->first();
        $categories = Category::all();
        return view('customer.checkoutOne',[
                'products'=>$cart->item,
                'categories'=>$categories,
                'totalPrice'=>$cart->totalPrice,
                'user'=>$user
            ]);
    }
    public function placeOrder(Request $request)
    {
        if (Auth::check()){
          
        }
        else{
            return redirect(url('Login'));
        }
    }
     public function placeOrderOne(Request $request)
    {
        $formattedNumber = $request->amount;
        $cleanedNumber = str_replace(',', '', $formattedNumber); // Result: "1234567"
        $phoneNumber = $request->telephone;
        $modifiedNumber = ltrim($phoneNumber, "0");
        $code = '254';
        $finalNumber = $code . $modifiedNumber;
        
   
          $oldCart = Session::get('cat');
            $cart = new Cat($oldCart);
            $checkouts = $cart->item;
            $userPhone = User::where('id', Auth::id())->first();

                // Do not hard code these values
                       $consumer_key ="9oGILLoBvSbQaAs7LuVSBMCGBBCa7GVpxsBOMci0X6XQD446";
        $consumer_secret = "SjlHhvlgmGsY9zGV5SK5hlX3NqFM7AYcyM571bMtsAo8DDBnPwVlAJJAA0VsKIQG";
        $credentials = base64_encode($consumer_key.":".$consumer_secret);
        
        $url = 'https://api.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials';
  
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        
        curl_setopt($curl, CURLOPT_HTTPHEADER, array('Authorization: Basic '.$credentials)); //setting a custom header
        curl_setopt($curl, CURLOPT_HEADER, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
  
        $curl_response = curl_exec($curl);
  
        $access_token = json_decode($curl_response);

        $token = $access_token->access_token;

        // Do not hard code these values
        $BusinessShortCode = 3539151;
        $passkey ='2b1ea8f7b9c67373397e5b6f9b174cc156296ad66fee8a327b0b1a9635ddac7d';
        $timestamp= Carbon::rawParse('now')->format('YmdHms');

        $password = base64_encode($BusinessShortCode.$passkey.$timestamp);
        $Amount = $cleanedNumber;
        $PartyA = $finalNumber;
        $PartyB = 3663928;


        $url = 'https://api.safaricom.co.ke/mpesa/stkpush/v1/processrequest';
  
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
          curl_setopt($curl, CURLOPT_HTTPHEADER, array(
            'Content-Type:application/json; charset=utf8',
            'Authorization:Bearer ' . $token
        )); //setting custom header
        
        
        $curl_post_data = array(
          //Fill in the request parameters with valid values
          'BusinessShortCode' => $BusinessShortCode,
          'Password' => $password,
          'Timestamp' => $timestamp,
          'TransactionType' => 'CustomerBuyGoodsOnline',
          'Amount' => $Amount,
          'PartyA' => $PartyA,
          'PartyB' => $PartyB,
          'PhoneNumber' => $PartyA,
          'CallBackURL' => 'https://mylonixtech.co.ke/storeWebhooks',
          'AccountReference' => 'CodeXcellent Education ',
          'TransactionDesc' => 'Testing stkpush on Sandbox '
        );
        
        $data_string = json_encode($curl_post_data);
        
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data_string);
        
        $curl_response = curl_exec($curl);   
                $user = new User();
                $user->user_name = $request->full_name;
                $user->user_email = $request->email;
                $user->user_phone = $request->phone;
                $user->user_location = $request->town;
                $user->user_role = '1';
                $user->description = $request->desc;
                $user->password = 'password';
                $user->save();

                foreach ($checkouts as $checkout) {
                    $phone = $request->phone;
                    $order = new Order();
                    $order->user_id = $user->id;
                    $order->product_id = $checkout['item']['id'];
                    $order->order_quantity = $checkout['quantity'];
                    $order->order_status = 'Mpesa';
                    $order->order_status1 = 'Awaiting Confirmation';
                    $order->mpesa_phone = $request->telephone;
                    $order->total = $cleanedNumber;
                    $order->save();
                }
                return redirect()->back()->with('success','INPUT PIN');
            
         
    }
    public function success(Request $request){
        
        $request->session()->forget('cat');
        $oldCart = Session::get('cat');
        $cart = new Cat($oldCart);
        $categories = Category::all();
        return view('customer.success',[
            'products'=>$cart->item,
            'categories'=>$categories,
            'totalPrice'=>$cart->totalPrice,
        ]);
    }
    public function confirmTransaction(Request $request){
        $getPesa = Pesa::where('reference',$request->ref)->first();
        if($getPesa){
        return redirect('success');
        }
        else{
            return redirect()->back()->with('error','Try Again');
            
        }
    }
}
