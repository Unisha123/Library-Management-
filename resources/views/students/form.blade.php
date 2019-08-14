@extends('layouts.layout')
@section('content')
		
<form action="/students/save" method="POST">
	@csrf
id:<input type="text" name="StudentId"><br>
name:<input type="text" name="name"><br>
class:<input type="text" name="class"><br>
roll-no:<input type="text" name="roll_no"><br>
address:<input type="text" name="address"><br>
phone:<input type="text" name="phone"><br>
<input type="submit" value="submit">
</form>
@endsection
