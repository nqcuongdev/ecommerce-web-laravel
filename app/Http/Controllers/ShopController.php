<?php

namespace App\Http\Controllers;

use App\Products;
use App\Slides;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function getIndex()
    {
        $slides = Slides::all();
        return view('shop.index',compact('slides'));
    }

    public function getProducts()
    {
        $products = Products::select('id','name','technical_description','price','sale_price','image')->paginate(12);
        return view('shop.products',compact('products'));
    }
    public function getProductDetails($id){
        $products = Products::find($id);
        return view('shop.products-details',compact('products'));
    }
    public function getAbouts(){return view('shop.abouts');}
    public function getContact(){return view('shop.contact');}
}
