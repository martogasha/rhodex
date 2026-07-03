<?php

namespace App\Http\Controllers;

use App\Rating;
use Illuminate\Http\Request;

class RatingController extends Controller
{
    public function index(){
        $products = Rating::all()->unique('product_id');
        return view('admin.rating',[
            'products'=>$products
        ]);
    }

    public function store(Request $request){
        $rating = Rating::create([
            'user_id'=>$request->userId,
            'rating_review'=>$request->review,
            'rating_ratings'=>$request->rating,
            'product_id'=>$request->productId,
        ]);
        return redirect()->back()->with('success','REVIEW SUBMITTED SUCCESSFULLY');
    }
    public function getRatings(Request $request){
        if ($request->ajax()){
            $output="";
            $ratings = Rating::where('product_id',$request->rating)->get();
        }
        foreach ($ratings as $rating) {
            $output .= '
                                        <h5>'.$rating->user_id.'</h5>
                                        <p>'.$rating->rating_review.'<hr>



';
        }
        return response($output);
    }
}
