<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
   public function login(){
   	return view('admin.loginform');
   }
   public function dologin(Request $request){
   	$username = $request->username;
   	$password = $request->password;
   	//login
   	if($username){
   		return redirect('dashboard');
   	}
   	else{
   		return view('loginform');
   	}
   }
}
