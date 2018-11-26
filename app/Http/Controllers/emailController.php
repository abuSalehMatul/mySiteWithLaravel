<?php

namespace App\Http\Controllers;
use App\Mail\viwer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

use Mail;
use App\User;
use Auth;

class emailController extends Controller
{
    public function sendEmail(Request $request){
       $data=array(
            'email'=>$request->email,
            'mgsbody'=>$request->message,
            'name'=>$request->fullname
       );
       $user=new User();
       $user->email =$data['email'];
       $user->name=$data['name'];
       $user->mgsbody=$data['mgsbody'];
       $user->save();
       Mail::to('matul@salehmatul.com')->send(new viwer($user));
       return Redirect('/');
       

    }
}
