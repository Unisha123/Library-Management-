@extends('layouts.layout')
@section('content')
<div class="row">
	<span class="">Books</span><br/>
</div>

<div class="row">
	<table class="table table-striped">
		
<form action="/books/save" method="POST">
	@csrf
id:<input type="text" name="id"> <br>
isbn:<input type="text" name="isbn"><br>
subject:<input type="text" name="subject"><br>
name:<input type="text" name="name"><br>
author:<input type="text" name="author"><br>
publisher:<input type="text" name="publisher"><br>
edition:<input type="text" name="edition"><br>
copies:<input type="text" name="copies"><br>
cost:<input type="number" name="cost">
<input type="submit" value="submit">
</form>
@endsection
