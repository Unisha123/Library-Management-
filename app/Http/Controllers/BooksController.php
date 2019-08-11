<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class BooksController extends Controller
{

   public function form(){
   	return view('books.form');
   }
   public function Index(){
	$books=Book::all();
	return view('books.index',compact('books'));
   }
	public function save(Request $request){
		$book=new Book();
		$book->id=$request->id;
		$book->isbn=$request->isbn;
		$book->subject=$request->subject;
		$book->name=$request->name;
		$book->author=$request->author;
		$book->publisher=$request->publisher;
		$book->edition=$request->edition;
		$book->copies=$request->copies;
		$book->cost=$request->cost;
		$book->save();
		return redirect("books");
}
	public function edit($id){
		$bk=Book::find($id);
		return view('books.edit',compact('bk'));
	}

public function update(Request $request,$id){
	$bkArray=Book::find($id);
	$bkArray->isbn=$request->isbn;
	$bkArray->subject=$request->subject;
	$bkArray->name=$request->name;
	$bkArray->author=$request->author;
	$bkArray->publisher=$request->publisher;
	$bkArray->edition=$request->edition;
	$bkArray->copies=$request->copies;
	$bkArray->cost=$request->cost;
	$bkArray->save();
	return redirect('/books');
}
	public function delete($id){
		$bk=Book::findOrfail($id)->delete();
			return redirect('/books');
	}

}



 