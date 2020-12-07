<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;


class loginController extends Controller
{
    public function index(){
    	return view('login.index');
    }

    public function verify(Request $req){

        //$req->session()->put('username', 'alamin');
        //$req->session()->put('email', 'alamin@gmail.com');
        //$email = $req->session()->get('email');
        //$req->session()->forget('email');
        //$req->session()->flush();
        //$req->session()->has('email');
        //$req->session()->pull('email');

        /*$req->session()->flash('msg', 'invalid username/password');
        $req->session()->flash('error', 'invalid request');
        $msg = $req->session()->get('msg');
        $req->session()->keep('msg');
        $req->session()->reflash();
        $msg1 = $req->session()->get('msg');*/


    	if($req->username == $req->password){
            $req->session()->put('username', $req->username);
            $req->session()->put('type', $req->username);
            
    		return redirect('/home');
    	}else{
            $req->session()->flash('msg', 'invalid username/password');
    		return redirect('/login');

            //return view('login.index');
    	}
    }
}
