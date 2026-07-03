<?php

namespace App\Http\Controllers;

use App\Cat;
use Illuminate\Http\Request;
use Session;
class InternetController extends Controller
{
    public function index(){
        $oldCart = Session::get('cat');
        $cart = new Cat($oldCart);
        return view('customer.internet',[
            'products'=>$cart->item,
            'totalPrice'=>$cart->totalPrice
        ]);
    }
    public function cctv(){
        $oldCart = Session::get('cat');
        $cart = new Cat($oldCart);
        return view('customer.camera',[
            'products'=>$cart->item,
            'totalPrice'=>$cart->totalPrice
        ]);
    }
    public function maintenance(){
        $oldCart = Session::get('cat');
        $cart = new Cat($oldCart);
        return view('customer.maintenance',[
            'products'=>$cart->item,
            'totalPrice'=>$cart->totalPrice
        ]);
    }
    public function recovery(){
        $oldCart = Session::get('cat');
        $cart = new Cat($oldCart);
        return view('customer.dataRecovery',[
            'products'=>$cart->item,
            'totalPrice'=>$cart->totalPrice
        ]);
    }
    public function webDesign(){
        $oldCart = Session::get('cat');
        $cart = new Cat($oldCart);
        return view('customer.webDesign',[
            'products'=>$cart->item,
            'totalPrice'=>$cart->totalPrice
        ]);
    }
    public function networking(){
        $oldCart = Session::get('cat');
        $cart = new Cat($oldCart);
        return view('customer.networks',[
            'products'=>$cart->item,
            'totalPrice'=>$cart->totalPrice
        ]);
    }
}
