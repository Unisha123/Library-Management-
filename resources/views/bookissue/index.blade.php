@extends('layouts.layout')
@section('content')
<div class="row">
	<table class="table table-stripped">
		<tr>
			<th>Student ID</th>
			<th>Student Name</th>
			<th>BookName</th>
			<th>Issued On</th>
			<th>Return Date</th>
			<th>Action</th>
		</tr>
		<?php foreach ($bookissues as $issue) { ?>
		<tr>
			<td><?php echo $issue->student_id ?></td>
			<td><?php echo $issue->student->name ?></td>
			<td><?php echo $issue->book->name ?></td>
			<td><?php echo $issue->created_at ?></td>
			<td><?php echo $issue->last_date ?></td>
			<?php if ($issue->is_returned == 0) { ?>
			<td><a href="/bookissue/return" class="btn btn-success">Return Book</a></td>
			<?php } else { ?>
			<td></td>
			<?php } ?>
		</tr>
	   <?php } ?>
	</table>
</div>
@endsection