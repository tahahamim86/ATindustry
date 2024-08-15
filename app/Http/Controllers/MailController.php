<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
public function contact(){
    return view('pages.datacenter');
}
public function sendEmail(Request $request){

  $detalis=[
    'name'=> $request->name,
    'mail'=>$request->mail,
    'num'=>$request->num,
    'msg'=>$request->msg,

  ];
  Mail::to('masterfire127@gmail.com')->send(new ContactMail($detalis));
  return back()->with('message_sent','Your message has been sent succesfully');
}
 
}
