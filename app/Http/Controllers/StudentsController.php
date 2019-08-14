<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentsController extends Controller
{
	 public function form(){
   	return view('students.form');
   }
    public function Index(){
    	$students = Student::all();
    	return view('students.index', compact('students'));
    }
    public function save(Request $request){
		$std=new Student();
		$std->id=$request->id;
		$std->name=$request->name;
		$std->class=$request->class;
		$std->roll_no=$request->roll_no;
		$std->address=$request->address;
		$std->phone=$request->phone;
		$std->save();
		return redirect("students");
}
}
