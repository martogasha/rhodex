<?php

namespace App\Http\Controllers;

use App\Cat;
use App\Mpesa;
use App\Order;
use App\User;
use App\Pesa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Kopokopo\SDK\Helpers\Auth;
use Kopokopo\SDK\K2;
use Session;
use Carbon\Carbon;
class MpesaController extends Controller
{
    public function generateAccessToken(){
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

        return $access_token->access_token;
    }
    public function stkPush(){
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
        $Amount = 1;
        $PartyA = +254707870863;
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
        return $curl_response;

        return view('customer.checkout')->with('success','PAYMENT RECEIVED');
    }
    public function storeWebhooks(Request $request){
        
        $data = $request->json()->all();

         foreach ($data['Body']['stkCallback']['CallbackMetadata']['Item'] as $item) {
        if ($item['Name'] == 'MpesaReceiptNumber') {
            $mpesaReceiptNumber = $item['Value'];
        } elseif ($item['Name'] == 'Amount') {
            $amount = $item['Value'];
        } elseif ($item['Name'] == 'PhoneNumber') {
            $phoneNumber = $item['Value'];
        } elseif ($item['Name'] == 'TransactionDate') {
            $transactionDate = $item['Value'];
        }
    }

       
        $pesa = new Pesa();
        $pesa->amount = $amount;
        $pesa->phone = $phoneNumber;
        $pesa->date = $transactionDate;
        $pesa->reference = $mpesaReceiptNumber;
        $pesa->status = '0';
        $pesa->save();

    
        
    }
    public function mpesaTransactions(){
        $transactions = Pesa::all();
        return view('admin.mpesa',[
            'transactions'=>$transactions
        ]);
    }
}
