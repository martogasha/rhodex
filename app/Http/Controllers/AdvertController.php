<?php

namespace App\Http\Controllers;

use App\Advert;
use Illuminate\Http\Request;
use Image;
class AdvertController extends Controller
{
    public function index(){
        $adverts = Advert::all();
        return view('admin.advert',[
            'adverts'=>$adverts
        ]);
    }
    public function store(Request $request){
        $pictures = new Advert();
        $pictures->category = $request->input('category');

        if ($request->image) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalName();
            $filename = time() . '.' . $extension;
            $resize = Image::make($file->getRealPath());
            $resize->resize(500, 500, function ($constraint){
                $constraint->aspectRatio();
            });
            $file->move('uploads/product/', $filename);
            $pictures->image = $filename;
        }

        $pictures->save();


        return redirect()->back()->with('success','Advert Added Successfully');
    }
}
