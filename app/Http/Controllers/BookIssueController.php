<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BookIssue;

class BookIssueController extends Controller
{
    public function Index() {
    	$bookissues = BookIssue::all();
    	return view('bookissue.index', compact('bookissues'));
    }
}
