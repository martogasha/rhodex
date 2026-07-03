<?php

namespace App\Http\Controllers;

use App\Cat;
use App\Product;
use App\Category;
use http\Client\Curl\User;
use Illuminate\Http\Request;
use Session;

class ProductDetailController extends Controller
{
    public function index(){
        $oldCart = Session::get('cat');
        $cart = new Cat($oldCart);
        return view('customer.productDetailOne',[
            'products'=>$cart->item,
            'totalPrice'=>$cart->totalPrice
        ]);
    }
    public function show($id){
        $categories = Category::all();
        $product = Product::where('id',$id)->first();
        $relateds = Product::where('product_category',$product->product_category)->get()->except($product->id);
        $homes = Product::where('product_category','bestSelling')->get()->random('3');
        $offices = Product::where('product_category','bestSelling')->get()->random('3');
        $toners = Product::where('product_category','bestSelling')->get()->random('3');
        $computers = Product::where('product_category','bestSelling')->get()->random('3');
        $oldCart = Session::get('cat');
        $cart = new Cat($oldCart);
        return view('customer.productDetailOne',[
            'product'=>$product,
            'homes'=>$homes,
            'offices'=>$offices,
            'toners'=>$toners,
            'computers'=>$computers,
            'products'=>$cart->item,
            'totalPrice'=>$cart->totalPrice,
            'relateds'=>$relateds,
            'categories' => $categories
        ]);
    }
}
