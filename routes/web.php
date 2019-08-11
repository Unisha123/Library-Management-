<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded ifx_byteasvarchar(mode) the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/dashboard','DashBoardController@Index');
Route::get('/books/create',"BooksController@create");
Route::post('/books/save',"BooksController@save");
Route::get('/books/read',"BooksController@Read");

//Books
Route::get('/books','BooksController@index');
Route::get('/books/form','BooksController@form');
Route::post('/books/save','BooksController@save');
Route::get('/books/edit/{id}',"BooksController@edit");
Route::post('/books/update/{id}',"BooksController@update");
Route::get('/books/delete/{id}',"BooksController@delete");



//Students
Route::get('/students','StudentsController@Index');
Route::get('/students/form','StudentsController@form');

//BookIssue
Route::get('/book-issue', 'BookIssueController@Index');

//Login
Route::get('/admin/login','AdminController@login');
Route::post('/admin/dologin','AdminController@dologin');



