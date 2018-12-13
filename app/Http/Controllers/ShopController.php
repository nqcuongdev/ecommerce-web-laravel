<?php

namespace App\Http\Controllers;

use App\Products;
use App\Slides;
use App\Category;
use App\Product_Type;
use User;
use Admin;
use Cart;
use Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ShopController extends Controller
{
    public function getIndex()
    {
        $slides = Slides::all();
        $category = Category::where('status','=',1)->get();
        $products_sale = Products::join('product_type','products.products_type','=','product_type.id')
                                    ->select('products.*','product_type.name_type')
                                    ->where([
                                        ['products.status','=','1'],
                                        ['products.sale_price','<>','0'],
                                        ['products.new_product','=','0']
                                    ])
                                    ->get();
        return view('shop.index',compact('slides','category','products_sale'));
    }

    public function getProducts()
    {
        $products = Products::join('product_type','products.products_type','=','product_type.id')
                            ->select('products.id','products.name','products.price','products.sale_price','products.image','products.new_product','product_type.name_type')
                            ->paginate(12);
        $category = Category::select('id','name_category')
                    ->where('status','=',1)
                    ->get();
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

    public function getLogin(){
        if(Auth::check()){
            if(Auth::guard('users')->user()->status == 1){
                return redirect('/');               
            }
        }else{
            return view('shop.login');
        }
    }

    public function postLogin(Request $request){
        $rules = [
            'email' => 'required|email',
            'password' => 'required',
        ];
        $message = [
            'email.required'=>'Enter your email',
            'email.email'=>'Enter the correct email format',
            'password.required'=>'Enter correct password',
        ];
        $validator = $request->validate($rules);
        $checklogin = array('email'=>$request->email,'password'=>$request->password);
        if(Auth::guard('users')->attempt($checklogin)){
            if(Auth::guard('users')->user()->status == 1){
                return redirect('/')->with(['flag'=>'success','message'=>'Login Success !']);
            }
            else {
                return redirect('login')->with(['flag'=>'warning','message'=>'Your account has been disable. Please contact admin !']); 
            }         
        }else if(Auth::guard('admins')->attempt($checklogin)){
            if(Auth::guard('admins')->user()->status == 1){
                if(Auth::guard('admins')->user()->group_id == 1 || Auth::guard('admins')->user()->group_id == 2){
                    return redirect('admin/dashboard');
                }    
            }
            else {
                return redirect('login'); 
            } 
        }
        else{
            return redirect('login')->with(['flag'=>'danger','message'=>'Cannot access the website! Wrong password !']);
        }
    }

    public function postLogout(){
        Auth::logout();
        return redirect('/');
    }
    
    public function postRegister(Request $request){
        $rules = [
            'name' => 'required|max:255',
            'email' => 'required|email|unique::users',
            'password' => 'required|min:6|max:20',
            're_password'=>'required|same:password',
        ];
        $message = [
            'name.required' => 'You must enter your fullname',
            'name.max' => 'Name cannot long like this',
            'email.required'=>'Enter your email',
            'email.email'=>'Enter the correct email format',
            'email.unique'=>'Email already exists',
            'password.required'=>'Enter correct password',
            'password.min'=>'Password of at least 6 characters',
            'password.max' => 'Password is too long to re-enter',
            're_password.same'=>'Passwords are not the same',
        ];
        $validators = $request->validate($rules);
        $user = new UsersModel();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->phone = "";
        $user->address = "";
        $user->status = 1;
        $user->save();
        return redirect('login')->with(['flag_reg'=>'success','message'=>'Your account has been created']);
    }

    public function getBlog(){
        return view('shop.blog');
    }
}
