<?php

namespace App\Http\Controllers;

use App\Cat;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;

class LoginController extends Controller
{
    public function index(){
        $oldCart = Session::get('cat');
        $cart = new Cat($oldCart);
        return view('customer.LoginOne',[
            'products'=>$cart->item,
            'totalPrice'=>$cart->totalPrice,

        ]);
    }
    public function login(Request $request)
    {
        $user = User::where('user_email',$request->email)->first();

        if (Auth::attempt([
            'user_email' => $request->email,
            'password' => $request->password,
        ])) {
            if ($user->user_role ==0){
                return redirect(url('admin'));
            }
            else{
                return redirect(url('checkout'));
            }
        }
        else{
            return redirect()->back()->with('error', 'CREDENTIALS DOES NOT MATCH');
        }
    }
        public function register(Request $request){
        $user = User::where('user_email',$request->email)->first();
        $userPhone = User::where('user_phone',$request->phone)->first();

            if (isset($user)){
            return redirect()->back()->with('error', 'Email Already Used');
        }
        elseif(isset($userPhone)){
            return redirect()->back()->with('error', 'Phone Number Already Used');

        }
            $phoneRaw = $request->phone;
            $code = '+254';
            $phoneNumber = $code.''.$phoneRaw;
            $register = User::create([
                'user_name'=>$request->input('name'),
                'user_email'=>$request->input('email'),
                'user_phone'=>$phoneNumber,
                'user_location'=>$request->input('location'),
                'user_role'=> 1,
                'password' => Hash::make($request['password']),
            ]);
            return redirect(url('Login'))->with('success','Registered Successfully');
        }
}
