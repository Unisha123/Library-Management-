<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashBoardController extends Controller
{
	public function __construct(){
		$this->middleware('auth');
	}
    public function Index(){
    	return view('dashboard');
    }
}
