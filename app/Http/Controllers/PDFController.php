<?php

namespace App\Http\Controllers;

use App\Order;
use App\OrderDetails;
use PDF;
use Cart;
use Auth;
use App\User;

use Illuminate\Http\Request;

class PDFController extends Controller
{
    public function index($id){
        if(Auth::guard('users')->check()){
            $user = User::where([['status','=','1'],['id','=',Auth::guard('users')->user()->id]])->get(); 
            $information_order = Order::join('order_details','order_details.oder_id','=','oder.id')
                                        ->join('products','products.id','=','order_details.product_id')
                                        ->where([['oder.id','=',$id],['oder.status','=','1']])
                                        ->select('oder.*','order_details.*','products.name')
                                        ->get();
            $get_shipping = Order::where([['id','=',$id],['status','=','1']])
                                ->select('shipping','total')->first();
            $pdf = PDF::loadView('shop.export-bill',compact('information_order','get_shipping'));
			return $pdf->download('YourBill.pdf');
            //return view('shop.export-bill',compact('information_order','get_shipping'));
        }else{
            $information_order = Order::join('order_details','order_details.oder_id','=','oder.id')
                                        ->join('products','products.id','=','order_details.product_id')
                                        ->where([['oder.id','=',$id],['oder.status','=','1']])
                                        ->select('oder.*','order_details.*','products.name')
                                        ->get();
            $get_shipping = Order::where([['id','=',$id],['status','=','1']])
                                ->select('shipping','total')->first();
            $pdf = PDF::loadView('shop.export-bill',compact('information_order','get_shipping'));
			return $pdf->download('YourBill.pdf');
        }
        
    }
    	
}
