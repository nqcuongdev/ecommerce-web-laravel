<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendMail(Request $request){
        $this->validate($request,[
            'fullname'=>'required',
            'email'=>'required|email',
            'message'=>'required'
        ]);

        $data = array(
            'name' => $request->fullname,
            'mail' => $request->email,
            'message' => $request->message,
        );
        
        Mail::send('shop.email-content',$data, function($message) use ($data){
            $message->to($data['mail']);
            $message->subject('Thanks for your contact');
            $message->from('nqcuong.17it3@sict.udn.vn');
        });
        return back()->with('success','Thanks for contacting us !');
    }
}
