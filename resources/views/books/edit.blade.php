	@extends('layouts.layout')
	@section('content')
	<form action='/books/update/<?php echo $bk->id?>' method ="post">
	@csrf
	
	isbn:<input type="text" name="isbn" value="<?php echo $bk->isbn;?>"/>
	subject:<input type="text" name="subject" value="<?php echo $bk->subject;?>"/>
	name:<input type="text" name="name" value="<?php echo $bk->name;?>"/>
	author:<input type="text" name="author" value="<?php echo $bk->author;?>"/>
    publisher:<input type="text" name="publisher" value="<?php echo $bk->publisher;?>"/>
    edition:<input type="text" name="edition" value="<?php echo $bk->edition;?>"/>
	copies:<input type="text" name="copies" value="<?php echo $bk->copies;?>"/>
   	cost:<input type="text" name="cost" value="<?php echo $bk->cost;?>"/>
    	<input type="submit" value="update">
    </form>
    @endsection