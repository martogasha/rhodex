<?php

namespace App\Http\Controllers;

use App\Cat;
use App\Product;
use App\Category;
use http\Client\Curl\User;
use Illuminate\Http\Request;
use Session;

class ProductShopController extends Controller
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
        $searchProducts = Product::where('category_id',$id)->inRandomOrder()->get();
        $homes = Product::where('product_category','bestSelling')->get()->random('3');
        $categories = Category::all();
        $cat = Category::find($id);
        $oldCart = Session::get('cat');
        $cart = new Cat($oldCart);
        return view('customer.shopCategory',[
            'searchProducts'=>$searchProducts,
            'homes'=>$homes,
            'categories'=>$categories,
            'cat'=>$cat,
            'products'=>$cart->item,
            'totalPrice'=>$cart->totalPrice
        ]);
    }
}
