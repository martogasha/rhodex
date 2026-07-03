<?php

namespace App\Http\Controllers;

use App\Cat;
use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
class TrackController extends Controller
{
    public function index(){
        $oldCart = Session::get('cat');
        $cart = new Cat($oldCart);
        $orders = Order::where('user_id',Auth::id())->get();
        return view('customer.trackOrder',[
            'products'=>$cart->item,
            'totalPrice'=>$cart->totalPrice,
            'orders'=>$orders
        ]);
    }
}
