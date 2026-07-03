<?php

namespace App\Http\Controllers;

use App\Cat;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
class AboutController extends Controller
{
    public function index(){
        $oldCart = Session::get('cat');
        $cart = new Cat($oldCart);
        $user = User::where('id',Auth::id())->first();
        return view('customer.aboutOne',[
            'products'=>$cart->item,
            'totalPrice'=>$cart->totalPrice,
            'user'=>$user
        ]);
    }
    public function contact(){
        $oldCart = Session::get('cat');
        $cart = new Cat($oldCart);
        $user = User::where('id',Auth::id())->first();
        return view('customer.contactOne',[
            'products'=>$cart->item,
            'totalPrice'=>$cart->totalPrice,
            'user'=>$user
        ]);
    }

}
