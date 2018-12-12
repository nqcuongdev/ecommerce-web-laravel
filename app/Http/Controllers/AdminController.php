<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;
use App\Slides;
use App\Category;
use App\Product_Type;
use Auth;
use Admin;

use Illuminate\Support\Facades\Hash;
class AdminController extends Controller
{
    public function getDashboard()
    {
        return view('admin.dashboard');
    }

    public function getSlides(){
        $slides = Slides::all();
        return view('admin.slides-index',compact('slides'));
    }

    public function postSlides(Request $request){
        $slides = new Slides;
        $slides->small_title = $request->small_title;
        $slides->title = $request->title;
        $slides->small_text = $request->small_text;
        $slides->price = $request->price;
        $slides->btn_link = $request->btn_link;

        //Process upload file
        $image = $request->image;
        $image->move(public_path('/Smarttech/images/slides'), $image->getClientOriginalName());
        $link = 'Smarttech/images/slides/' . $image->getClientOriginalName();
        $slides->image = $link;
        $slides->save();
        return redirect('admin/slides');
    }

    public function getProducts()
    {
        $products = Products::all();
        return view('admin.products',compact('products'));
    }

    public function getAddProducts(){
        $product_type = Product_Type::where('status','=',1)->get();
         return view('admin.add-products',compact('product_type'));
        }
    public function postProducts(Request $request)
    {
        $products = new Products;
        $products->name = $request->name;
        $products->products_type = $request->products_type;
        $products->technical_description = $request->technical_description;
        $products->description = $request->description;
        $products->price = $request->price;
        $products->sale_price = $request->sale_price;

        //Process upload file
        $image_pr = $request->image;
        $image_pr->move(public_path('/Smarttech/images/products'), $image_pr->getClientOriginalName());
        $link = 'Smarttech/images/products/' . $image_pr->getClientOriginalName();
        $products->image = $link;

        $products->available = $request->available;
        $products->status = 1;
        $products->new_product = $request->isnew;
        $products->save();
        return redirect('admin/products');
    }

    public function getCategory(){
        $category = Category::all();
        $type = Product_Type::join('category','product_type.id_category','=','category.id')
                ->select('product_type.*','category.name_category')
                ->get();
        $category_all = Category::where('status','=',1)->get();
        return view('admin.category-management',compact('category','type','category_all'));
    }

    public function postCategory(Request $request){
        $category = new Category;
        $category->name_category = $request->name;
        $category->status = 1;
        $category->save();
        return redirect('admin/category');
    }

    public function postEditCategory(Request $request){
        if($request->ajax()){
            $category = Category::find($request->id);
            $category->name_category = $request->name;
            $category->status = 1;
            $category->save();
            return "success";
        }
    }

    public function getDisableCategory($id){
        $category = Category::find($id);
        $category->name_category = $category->name_category;
        $category->status = 0;
        $category->save();
        return redirect()->back();
    }

    public function getActiveCategory($id){
        $category = Category::find($id);
        $category->name_category = $category->name_category;
        $category->status = 1;
        $category->save();
        return redirect()->back();
    }

    public function postType(Request $request){
        $type = new Product_Type();
        $type->name_type = $request->name_type;
        $type->id_category = $request->id_category;
        $type->status = 1;
        $type->save();
        return redirect()->back();
    }

    public function postEditType(Request $request){
        if($request->ajax()){
            $type = Product_Type::find($request->id);
            $type->name_type = $request->name;
            $type->id_category = $request->category;
            $type->status = 1;
            $type->save();
            return "success";
        }
    }

    public function getDisableType($id){
        $type = Product_Type::find($id);
        $type->name_type = $type->name_type;
        $type->id_category = $type->id_category;
        $type->status = 0;
        $type->save();
        return redirect()->back();
    }

    public function getActiveType($id){
        $type = Product_Type::find($id);
        $type->name_type = $type->name_type;
        $type->id_category = $type->id_category;
        $type->status = 1;
        $type->save();
        return redirect()->back();
    }

    public function getAdminLogout(){
        Auth::guard('admins')->logout();
        return redirect('/');
    }

    public function getEditProducts($id){
        $products = Products::where([
                                ['products.status','=','1'],
                                ['products.id','=',$id]
                            ])
                            ->join('product_type','products.products_type','=','product_type.id')
                            ->select('products.id','products.name','products.price','sale_price','products.image','product_type.id as type_id')
                            ->first();
        $product_type = Product_Type::where('status','=',1)->get();
        return view('admin.edit-products',compact('products','product_type'));
    }
}
