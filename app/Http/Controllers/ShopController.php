<?php

namespace App\Http\Controllers;

use App\Products;
use App\Slides;
use App\Category;
use App\Product_Type;
use App\BlogModel;
use App\Order;
use App\User;
use App\Admin;
use App\Guest;
use App\OrderDetails;
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
                                    ->where([['products.status','=','1'],['products.sale_price','<>','0']])
                                    ->get();
        $product_new = Products::join('product_type','products.products_type','=','product_type.id')
                                ->select('products.*','product_type.name_type')
                                ->where([['products.status','=','1'],['products.new_product','=','1']])
                                ->get();
        $blog = BlogModel::where('status','=',1)->limit(5)->get();

        $TV = Products::where('products_type','=',1)
                        ->get();

        $Smartphone = Products::where('products_type','=',4)
                            ->get();

        $Computer = Products::where('products_type','=',2)
                            ->orWhere('products_type','=',9)
                            ->get();

        $Gaming = Products::where('products_type','=',5)
                        ->orWhere('products_type','=',8)
                        ->get();

        $Accessories = Products::where('products_type','=',10)
                        ->get();

        $Camera = Products::where('products_type','=',7)
                        ->orWhere('products_type','=',3)
                        ->get();
        $products_list = Products::join('product_type','products.products_type','=','product_type.id')
                                ->select('products.id','products.name','products.price','products.sale_price','products.image','products.new_product','products.products_type','product_type.name_type','product_type.id_category')
                                ->orderBy('products.price','asc')
                                ->inRandomOrder()->limit(8)->get();
        return view('shop.index',compact(
            'slides','category','products_sale','blog','product_new',
            'TV','Smartphone','Computer','Gaming','Accessories','Camera','products_list'
        ));
    }

    public function getProducts()
    {
        $products = Products::join('product_type','products.products_type','=','product_type.id')
                            ->select('products.id','products.name','products.price','products.sale_price','products.image','products.new_product','products.products_type','product_type.name_type','product_type.id_category')
                            ->orderBy('products.price','asc')
                            ->paginate(12);
        $category = Category::select('id','name_category')
                    ->where('status','=',1)
                    ->get();
        return view('shop.products',compact('products','category'));
    }
    public function getProductDetails($id){
        $products = Products::join('product_type','products.products_type','=','product_type.id')
                            ->join('category','category.id','=','product_type.id_category')
                            ->select('products.*','product_type.name_type','product_type.id_category','category.name_category as category')
                            ->where([
                                ['products.id','=',$id],
                                ['products.status','=','1']
                            ])->first();
        $category = Category::where('status','=',1)->get();
        
        $products_list = Products::join('product_type','products.products_type','=','product_type.id')
                            ->select('products.id','products.name','products.price','products.sale_price','products.image','products.new_product','products.products_type','product_type.name_type','product_type.id_category')
                            ->orderBy('products.price','asc')
                            ->get();

        return view('shop.products-details',compact('products','category','products_list'));
    }

    public function addtocart(Request $request,$product_id){
            $product = Products::find($request->id);
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
            if(Auth::guard('users')->check()){
                $user = User::where([['status','=','1'],['id','=',Auth::guard('users')->user()->id]])->get();
                return view('shop.delivery-method',compact('user'));
            }else{
                return view('shop.delivery-method');
            }
            
        }else{
            return redirect('products');
        }   
    }

    public function postOrder(Request $request){
            $order = new Order;
            if(Auth::guard('users')->check() == null){
                $guest = new Guest;
                $guest->name = $request->fullname;
                $guest->address = $request->address;
                $guest->phone = $request->phone;
                $guest->email = $request->email;

                if($guest->save() == 1){
                    $guest_id = "GUEST".$guest->id;
                    $total = $request->shipcost;
                    $order->id_customer = $guest_id;
                    $order->qty = Cart::count();
                    $order->shipping = $request->shipcost;
                    $order->total = str_replace(',', '', Cart::total()) + $total;
                    $order->status = 1;
                    $order->save();

                    $cart = Cart::content();
                    foreach ($cart as $key => $value) {
                        $oder_details = new OrderDetails;
                        $oder_details->product_id = $value->id;
                        $oder_details->qty = $value->qty;
                        $oder_details->price = $value->price; 
                        $oder_details->oder_id = $order->id;
                        $oder_details->save();
                    }
                }

                return redirect()->route('confirm',$order->id);


            }else{
                $Total = $request->shipcost;
                $order->id_customer =  Auth::guard('users')->user()->id;
                $order->qty = Cart::count();
                $order->shipping = $request->shipcost;
                $order->total = str_replace(',', '', Cart::total()) + $Total;
                $order->status = 1;
                $order->save();

                $cart = Cart::content();
                foreach ($cart as $key => $value) {
                        $oder_details = new OrderDetails;
                        $oder_details->product_id = $value->id;
                        $oder_details->qty = $value->qty;
                        $oder_details->price = $value->price;   
                        $oder_details->oder_id = $order->id;
                        $oder_details->save();
                }

                return redirect()->route('confirm',$order->id);
            }

            
    }

    public function getConfirm($id){
        if(Cart::count() != 0){
            if(Auth::guard('users')->check()){
                $user = User::where([['status','=','1'],['id','=',Auth::guard('users')->user()->id]])->get(); 
                $information_order = Order::join('order_details','order_details.oder_id','=','oder.id')
                                            ->join('products','products.id','=','order_details.product_id')
                                            ->where([['oder.id','=',$id],['oder.status','=','1']])
                                            ->select('oder.*','order_details.*','products.name')
                                            ->get();
                $get_shipping = Order::where([['id','=',$id],['status','=','1']])
                                    ->select('shipping','total','id')->first();
                return view('shop.confirmation',compact('user','information_order','get_shipping'));
            }else{
                $information_order = Order::join('order_details','order_details.oder_id','=','oder.id')
                                            ->join('products','products.id','=','order_details.product_id')
                                            ->where([['oder.id','=',$id],['oder.status','=','1']])
                                            ->select('oder.*','order_details.*','products.name')
                                            ->get();
                //Get id from order table GUESTXX then get the number of string
                //to select Guest
                foreach ($information_order as $value) {
                    $str_id = $value->id_customer;
                    $guest_id = substr($str_id,5,strlen($str_id));
                }

                $guest = Guest::where('id','=',$guest_id)
                                ->select('name as guest_name','phone','address','email')
                                ->get();
                $get_shipping = Order::where([['id','=',$id],['status','=','1']])
                                    ->select('shipping','total','id')->first();
                return view('shop.confirmation',compact('guest','information_order','get_shipping'));
            }
            
        }else{
            return redirect('products');
        }
    }

    public function getSuccessOrder($id){
        $order = Order::where([['id','=',$id],['status','=','1']])->first();
        Cart::destroy();
        return view('shop.success-order',compact('order'));
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
        $user->image = "";
        $user->status = 1;
        $user->save();
        return redirect('login')->with(['flag_reg'=>'success','message'=>'Your account has been created']);
    }

    public function getBlog(){
        $blog = BlogModel::where('status','=',1)->paginate(6);
        return view('shop.blog',compact('blog'));
    }

    public function getBlogDetails($id){
        $blog = BlogModel::where([
            ['id','=',$id],
            ['status','=','1']
        ])->first();
        return view('shop.blog-details',compact('blog'));
    }

    public function getProfile(){
        if(Auth::guard('users')->check()){
            $user = User::find(Auth::guard('users')->user()->id)->first();

            $order = Order::where('id_customer','=',Auth::guard('users')->user()->id)->get();
            return view('shop.profile-user',compact('user','order'));
        }else
            return redirect('/');
    }

    public function postProfile(Request $request){
        $user = User::find(Auth::guard('users')->user()->id);
        
        if($request->has('name'))
            $user->name = $request->name;
        else 
            $user->name = $user->name;

        if($request->has('address'))
            $user->address = $request->address;
        else 
            $user->address = $user->address;
        
        if($request->has('phone'))
            $user->phone = $request->phone;
        else 
            $user->phone = $user->phone;
        
        if($request->has('image')){
            $image = $request->image;
            $image->move(public_path('/Smarttech/images/avatar'), $image->getClientOriginalName());
            $link = 'Smarttech/images/avatar/' . $image->getClientOriginalName();
            $user->image = $link;
        }else{
            $user->image = $user->image;
        }
        $user->email = $user->email;
        $user->status = $user->status;
        $user->save();
        return redirect('profile')->with(['flag_reg'=>'success','message'=>'Your account has been updated']);
    }

    public function getSearch(Request $request){
        $products = Products::where('name','like','%'.$request->key.'%')
                            ->orWhere('price',$request->key)->paginate(6);
        return view('shop.search-result',compact('products'));
    }
}
