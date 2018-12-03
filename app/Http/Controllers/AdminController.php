<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;
use App\Slides;

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
        $products->save();
        return redirect('admin/products');
    }

    public function getCategory(){
        return view('admin.category-management');
    }
}
