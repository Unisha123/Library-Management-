@extends('layouts.layout')
@section('content')
<form action="/admin/dologin" method="post">
	@csrf
	Username:<input type="text" name="username">
	Password:<input type="text" name="password">
	<input type="submit" value="Login"/>
</form>
@endsection