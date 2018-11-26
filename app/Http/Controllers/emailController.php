<?php

namespace App\Http\Controllers;
use App\Mail\viwer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

use Mail;
use App\User;
use Auth;
use Illuminate\Support\Facades\Session;
session_start();


class emailController extends Controller
{
    public function sendEmail(Request $request){
     $this->validate($request,[
            'email'=>'required|email',
            'message'=>'required|min:5'

     ]);
     
      $serveraddress=$_SERVER['REMOTE_ADDR'];
     
       $data=array(
            'email'=>$request->email,
            'mgsbody'=>$request->message,
            'name'=>$request->fullname
       );
       $user=new User();
       $user->email =$data['email'];
       $user->name=$data['name'];
       $user->mgsbody=$data['mgsbody'];
       $user->ip_address=$serveraddress;
       
       $user->save();
       Mail::to('matul@salehmatul.com')->send(new viwer($user));
        
       Session::put('email',$data['email']);
       Session::put('name',$data['name']);
       Session::put('ip',$serveraddress);
       return Redirect('/');
       

    }
}
