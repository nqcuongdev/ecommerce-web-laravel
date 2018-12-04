<?php

namespace App\Http\Controllers;

use App\Products;
use App\Slides;
use Cart;
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

    public function addtocart(Request $request,$product_id){
        $product = Products::find($product_id);
        Cart::add(array(
            'id' => $product_id,
            'name' => $product->name,
            'price' => $product->price,
            'qty' => 1,
            'options' => array('image' => $product->image)
        ));
        $cart = Cart::content();
        return redirect('cart');
    }

    public function getCart(){
        $cart = Cart::content();
        return view('shop.shopping-cart',compact('cart'));
    }

    public function removeCart($id){
        $cart = Cart::remove($id);
        return redirect('cart');
    }

    public function updateCart(Request $request){
        if($request->ajax()){
            $id = $request->id;
            $qty = $request->qty;
            Cart::update($id,$qty);
            $cart = Cart::content();
            return $cart;
        }
    }

    public function getAbouts(){return view('shop.abouts');}
    public function getContact(){return view('shop.contact');}
}
