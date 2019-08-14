@extends('layouts.layout')
@section('content')
<div class="row">

</div>
<a href="/students/form" class="btn btn-success">Add Student</a>

<div class="row">
	<table class="table table-stripped">
		<tr>
			<th>StudentId</th>
			<th>Name</th>
			<th>Class</th>
			<th>Roll-no</th>
			<th>Address</th>
			<th>Phone</th>
		</tr>
		<?php foreach ($students as $student) { ?>
		<tr>
			<td><?php echo $student->id ?></td>
			<td><?php echo $student->name ?></td>
			<td><?php echo $student->class ?></td>
			<td><?php echo $student->roll_no ?></td>
			<td><?php echo $student->address ?></td>
			<td><?php echo $student->phone ?></td>
		</tr>
	   <?php } ?>
	</table>
</div>
@endsection
