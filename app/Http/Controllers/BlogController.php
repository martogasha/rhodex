<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Product;
use App\Listing;
use Faker\Provider\Image;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        $products = Product::all();
        $blogs = Blog::all();
        return view('admin.blog',[
            'products' => $products,
            'blogs' => $blogs
        ]);
    }
    public function edit($id){
        $blog = Blog::find($id);
        $listings = Listing::where('blog_id',$id)->get();
        return view('admin.editBlog',[
            'blog'=>$blog,
            'listings'=>$listings
        ]);
    }
    public function eBlog(Request $request){
        $edit = Blog::find($request->id);
        $edit->title = $request->input('title');
        $edit->detail = $request->input('detail');
        $edit->link = $request->input('link');
        $edit->linkName = $request->input('linkName');
        $edit->detailOne = $request->input('detailOne');
        $edit->linkNameOne = $request->input('linkNameOne');
        $edit->linkOne = $request->input('linkOne');
        $edit->quote = $request->input('quote');
        $edit->quoteAuthor = $request->input('quoteAuthor');
        $edit->detailTwo = $request->input('detailTwo');
        $edit->linkNameTwo = $request->input('linkNameTwo');
        $edit->linkTwo = $request->input('linkTwo');
        $edit->detailThree = $request->input('detailThree');

        if ($request->image) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalName();
            $filename = time() . '.' . $extension;
            $file->move('uploads/product/', $filename);
            $edit->image = $filename;
        }

        $edit->save();


        return redirect()->back()->with('success','Blog Edited Successfully');

    }
     public function eBlogListing(Request $request){
        $edit = new Listing();
        $edit->name = $request->input('listname');
        $edit->link = $request->input('link');
        $edit->blog_id = $request->input('id');

        $edit->save();


        return redirect()->back()->with('success','Blog Edited Successfully');

    }
    public function ajax(){
        $output = "";
        $output = '
         <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Name:</label>
                        <input type="text" class="form-control" name="listname" id="recipient-name">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Link:</label>
                        <textarea class="form-control" name="link" id="message-text"></textarea>
                    </div>
        ';
        return response($output);
    }
    public function storeBlog(Request $request){
        $pictures = new Blog();
        $pictures->title = $request->input('title');
        $pictures->detail = $request->input('detail');
        $pictures->link = $request->input('link');
        $pictures->linkName = $request->input('linkName');
        $pictures->detailOne = $request->input('detailOne');
        $pictures->linkNameOne = $request->input('linkNameOne');
        $pictures->linkOne = $request->input('linkOne');
        $pictures->quote = $request->input('quote');
        $pictures->quoteAuthor = $request->input('quoteAuthor');
        $pictures->detailTwo = $request->input('detailTwo');
        $pictures->linkNameTwo = $request->input('linkNameTwo');
        $pictures->linkTwo = $request->input('linkTwo');
        $pictures->detailThree = $request->input('detailThree');

        if ($request->image) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalName();
            $filename = time() . '.' . $extension;
            $file->move('uploads/product/', $filename);
            $pictures->image = $filename;
        }

        $pictures->save();


        return redirect()->back()->with('success','Blog Added Successfully');
    }
}
