<?php

namespace App\Http\Controllers;

use App\Exceptions\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request){
        $user = User::where('user_email',$request->email)->first();
        if (Auth::attempt([
            'user_email' => $request->email,
            'password' => $request->password,
        ])){
            if ($user->role==0 || $user->role==1){
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
         $user = new User();
        $user->user_name = $request->name;
        $user->user_email = $request->email;
        $user->user_phone = $request->phone;
        $user->user_location = $request->name;
        $user->user_role = 2;
        $user->password = Hash::make($request->password);;
        $user->save();

        return redirect('login')->with('success', 'USER ACCOUNT CREATED SUCCESSFULLY');

    }
}