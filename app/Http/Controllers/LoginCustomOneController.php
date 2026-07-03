<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Checkout;
use App\Helpers\UserSystemInfoHelper;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginCustomOneController extends Controller
{
    public function index(){
        return view('customer.LoginUser');
    }

}
