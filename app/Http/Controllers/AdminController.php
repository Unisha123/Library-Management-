<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use Auth;

class AdminController extends Controller
{
   public function login(){
   	return view('admin.loginform');
   }
   public function dologin(Request $request){
   	$email = $request->eamil;
   	$password = $request->password;
   	if(Auth::attempt(['email' => $email, 'password' => $password])){
   		return redirect('/books');
   	}
   	else{
   		return redirect('/');
   	}
   }
   protected function create(){
      return User::create([
         'name' => "Admin",
         'email' => "admin@cms.com",
         'password' => Hash::make("password"),
      ]);
   }
      
}
