<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentsController extends Controller
{
    public function Index(){
    	$students = Student::all();
    	return view('student.index', compact('students'));
    }
}
