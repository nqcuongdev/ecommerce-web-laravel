<?php

namespace App\Http\Controllers;

use App\Products;
use App\Slides;
use App\Category;
use App\Product_Type;
use App\UsersModel;
use Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ShopController extends Controller
{
    public function getIndex()
    {
        $slides = Slides::all();
        $category = Category::all(); 
        return view('shop.index',compact('slides','category'));
    }

    public function getProducts()
    {
        $products = Products::select('id','name','technical_description','price','sale_price','image')->paginate(12);
        $category = Category::select('id','name_category')->get();
        return view('shop.products',compact('products','category'));
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

    public function getDelivery(){
        if(Cart::count() != 0){
            return view('shop.delivery-method');
        }else{
            return redirect('products');
        }
        
    }

    public function getConfirm(){
        if(Cart::count() != 0){
            return view('shop.confirmation');
        }else{
            return redirect('products');
        }
    }
    public function getAbouts(){return view('shop.abouts');}

    public function getContact(){return view('shop.contact');}

    public function getLogin(){return view('shop.login');}

    public function postRegister(Request $request){
        $user = new UsersModel();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->phone = "";
        $user->address = "";
        $user->status = 1;
        $user->save();
        return redirect('login');
    }
}
