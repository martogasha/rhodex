<?php

namespace App\Http\Controllers;

use App\Advert;
use App\Blog;
use App\Cat;
use App\Product;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use Image;
class ProductOneController extends Controller
{
    public function index(){
        if (Auth::user()->user_role==0) {
            $categories = Category::all();
            return view('admin.category', [
                'categories' => $categories
            ]);
        }
        else{
            return redirect(url('Login'));
        }
    }
    public function blog(){
        $oldCart = Session::get('cat');
        $cart = new Cat($oldCart);
        $blogs = Blog::all();
        return view('customer.blog',[
            'products'=>$cart->item,
            'totalPrice'=>$cart->totalPrice,
            'blogs'=>$blogs
        ]);
    }
    public function blogDetail($id,$name){
        $detail = Blog::find($id);
        $oldCart = Session::get('cat');
        $cart = new Cat($oldCart);
        return view('customer.blogDetail',[
            'products'=>$cart->item,
            'totalPrice'=>$cart->totalPrice,
            'detail'=>$detail,

        ]);

    }
    public function home(){
        $bests = Product::where('product_category','bestSelling')->get();
        $homes = Product::where('product_category','hardDisk')->get();
        $computers = Product::where('product_category','computer')->get();
        $offices = Product::where('product_category','networking')->get();
        $toners = Product::where('product_category','toner')->get();
        $projectors = Product::where('product_category','projector')->get();
        $printers = Product::where('product_category','printer')->get();
        $cctvs = Product::where('product_category','cctv')->get();
        $hardDisks = Product::where('product_category','hardDisk')->get();

        $sliders = Advert::where('category',1)->get();
        $oldCart = Session::get('cat');
        $cart = new Cat($oldCart);
        return view('customer.index',[
            'bests'=>$bests,
            'homes'=>$homes,
            'computers'=>$computers,
            'offices'=>$offices,
            'toners'=>$toners,
            'projectors'=>$projectors,
            'cctvs'=>$cctvs,
            'hardDisks'=>$hardDisks,
            'printers'=>$printers,
            'products'=>$cart->item,
            'totalPrice'=>$cart->totalPrice,
            'sliders'=>$sliders

        ]);
    }
        public function homeOne(){
        $bests = Product::where('product_category','bestSelling')->get();
        $homes = Product::where('product_category','hardDisk')->get();
        $computers = Product::where('product_category','computer')->get();
        $offices = Product::where('product_category','networking')->get();
        $toners = Product::where('product_category','toner')->get();
        $projectors = Product::where('product_category','projector')->get();
        $printers = Product::where('product_category','printer')->get();
        $cctvs = Product::where('product_category','cctv')->get();
        $hardDisks = Product::where('product_category','hardDisk')->get();

        $sliders = Advert::where('category',1)->get();
        $oldCart = Session::get('cat');
        $cart = new Cat($oldCart);
        return view('customer.indexOne',[
            'bests'=>$bests,
            'homes'=>$homes,
            'computers'=>$computers,
            'offices'=>$offices,
            'toners'=>$toners,
            'projectors'=>$projectors,
            'cctvs'=>$cctvs,
            'hardDisks'=>$hardDisks,
            'printers'=>$printers,
            'products'=>$cart->item,
            'totalPrice'=>$cart->totalPrice,
            'sliders'=>$sliders

        ]);
    }
    public function status($id){
        $status = Product::find($id);
        if ($status->status==0){
            $updateStatus = Product::where('id',$status->id)->update(['status'=>1]);
        }
        else{
            $updateStatus = Product::where('id',$status->id)->update(['status'=>0]);

        }
        return redirect(url('stock'))->with('success','PRODUCT STATUS UPDATED SUCCESSFULLY');
    }
    public function store(Request $request){
        $category = new Category();
        $category->category_name = $request->input('category_name');
          if ($request->image) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalName();
            $filename = time() . '.' . $extension;
            $resize = Image::make($file->getRealPath());
            $resize->resize(500, 500, function ($constraint){
                $constraint->aspectRatio();
            });
            $file->move('uploads/product/', $filename);
            $category->category_photo = $filename;
        }

    
        $category->save();


        return redirect()->back()->with('success','Category Added Successfully');

    }
    public function search(Request $request){
        $search = $request->input('searchProduct');
        $searchProducts = Product::where('product_name','like',"%$search%")->get();
        $oldCart = Session::get('cat');
        $cart = new Cat($oldCart);

        return view('customer.category',[
            'searchProducts'=>$searchProducts,
            'products'=>$cart->item,
            'totalPrice'=>$cart->totalPrice


        ]);
    }
    public function eCategory(Request $request){
        $edit = Category::find($request->category_name);
        $edit->category_name = $request->categoryName;
        if ($request->image) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalName();
            $filename = time() . '.' . $extension;
            $resize = Image::make($file->getRealPath());
            $resize->resize(500, 500, function ($constraint){
                $constraint->aspectRatio();
            });
            $file->move('uploads/product/', $filename);
            $edit->category_photo = $filename;
        }
        $edit->save();

        return redirect(url('category'))->with('success','Category Updated Successfully');

    }
    public function editCategoryDetails($id){
        $category = Category::find($id);
        return view('admin.editCategory',[
            'category'=>$category
        ]);
    }
    public function deleteCategory($id){
        $deleteCategory = Category::find($id);
        $deleteCategory->delete();
        return redirect()->back()->with('success','Category Deleted Successfully');

    }
}
