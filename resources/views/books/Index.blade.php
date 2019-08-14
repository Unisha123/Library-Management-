@extends('layouts.layout')
@section('content')
<div class="row">
<span class="">books </span><br/>
</div>
<a href="/books/form" class="btn btn-success">Add Book</a>

<div class="row">
	<table class="table table-stripped">
		<tr>
			<th>id</th>
			<th>Isbn</th>
			<th>Subject</th>
			<th>Name</th>
			<th>Author</th>
			<th>Publisher</th>
			<th>Edition</th>
			<th>Copies</th>
			<th>Cost</th>
		</tr>
		<?php foreach($books as $books){?>
		<tr>
			<td><?php echo $books->id ?></td>
			<td><?php echo $books->isbn?></td>
			<td><?php echo $books->subject ?></td>
			<td><?php echo $books->name?></td>
			<td><?php echo $books->author ?></td>
			<td><?php echo $books->publisher ?></td>
			<td><?php echo $books->edition?></td>
			<td><?php echo $books->cost ?></td><br>
</tr>
	<tr>	
		<td><a href="/books/edit/<?php echo $books->id?>"class="btn btn-success">Edit</a>
			<a href="/books/delete/<?php echo $books->id?>"class="btn btn-success">Delete</a>
			</td>
		</tr>
		<?php } ?>
	</table>
</div>
@endsection
