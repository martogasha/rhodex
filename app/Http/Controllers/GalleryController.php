<?php

namespace App\Http\Controllers;

use App\Cat;
use App\Gallery;
use Illuminate\Http\Request;
use Session;

class GalleryController extends Controller
{
    public function gallery(){
        $oldCart = Session::get('cat');
        $cart = new Cat($oldCart);
        $images = Gallery::all();
        return view('customer.gallery',[
            'products'=>$cart->item,
            'totalPrice'=>$cart->totalPrice,
            'images'=>$images
        ]);
    }
    public function adminGallery(){
        $images = Gallery::all();
        return view('admin.gallery',[
            'images'=>$images
        ]);
    }
    public function storeImage(Request $request){
        $storeimage = new Gallery();
        if ($request->image) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalName();
            $filename = time() . '.' . $extension;
            $file->move('uploads/product/', $filename);
            $storeimage->image = $filename;
        }
        $storeimage->desc = $request->desc;
        $storeimage->save();

        return redirect()->back()->with('success','Image saved success');
    }
    public function editModal(Request $request){
        if ($request->ajax()){
            $output = "";
            $image = Gallery::find($request->order);
        }
        $output= '
          <div class="modal-header">
          <input type="hidden" name="imageId" value="'.$image->id.'">
                        <h5 class="modal-title" id="customModalTwoLabel">Edit '.$image->desc.' picture</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <input type="file" name="image" value="'.$image->image.'">
                        </div>
                        <div class="form-group">
                            <input type="text" name="desc" class="form-control" value="'.$image->desc.'">
                        </div>


                    </div>
                    <div class="modal-footer custom">

                        <div class="left-side">
                            <button type="button" class="btn btn-link danger" data-dismiss="modal">Cancel</button>
                        </div>
                        <div class="divider"></div>
                        <div class="right-side">
                            <button type="submit" class="btn btn-link success">Submit</button>
                        </div>
                    </div>
        ';
        return response($output);
    }
    public function editGalleryImage(Request $request){
        $edit = Gallery::find($request->imageId);
        if ($request->image) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalName();
            $filename = time() . '.' . $extension;
            $file->move('uploads/product/', $filename);
            $edit->image = $filename;
        }
        $edit->desc = $request->desc;
        $edit->save();
        return back()->with('success','Product Edited success');

    }
    public function deleteGalleryImage(Request $request){
        $delete = Gallery::find($request->id);
        $delete->delete();
        return back()->with('success','Product Deleted success');
    }


}
