<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\User;
use Mail;
use Session;
use Auth;
use App\Mail\mgsfromMetoClient;
use Database;
session_start();

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('welcome');
    }
    public function toEmail(){
        $useremail=Session::get('email');
        $user=User::where('email',$useremail)->first();
       
        
        Mail::to($user)->send(new mgsfromMetoClient($user));

        return Redirect('/');
    }
}
