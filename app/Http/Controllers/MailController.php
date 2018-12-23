<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMailController;

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
            'message' => $request->message
        );

        Mail::to('nqcuong.17it3@sict.udn.vn')->send(new SendMailController($data));
        return back()->with('success','Thanks for contacting us !');
    }
}
