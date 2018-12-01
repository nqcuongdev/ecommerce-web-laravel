<?php

namespace App\Http\Controllers;

use App\Products;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function getIndex()
    {
        return view('shop.index');
    }

    public function getProducts()
    {
        $products = Products::select('name','price','sale_price','image')->paginate(12);
        return view('shop.products',compact('products'));
    }
    public function getProductDetails($id){
        $products = Products::find($id);
        return view('shop.products-details',compact('products'));
    }
}
