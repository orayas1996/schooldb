@extends('layouts.app')
<!DOCTYPE html>
@section('content')

<div class="page-header ">
<h2>แก้ไขข้อมูลอาจารย์</h2>
</div><br><br>
<center>
	<form action='/official/<?php echo $ssn; ?>/editsave' method="post">
	<table class="table table-striped">
		<!--<tr>
			<td>StudentID : </td>
			<td><input type="text" name="id"></td>
		</tr>-->
		<tr>
			<td>Name : </td>
			<td><input class="form-control" type="text" name="name"></td>
		</tr>
		<tr>
			<td>Sex : </td>
			<td><input class="form-control" type="text" name="sex"></td>
		</tr>
		<tr>
			<td>Address : </td>
			<td><input class="form-control" type="text" name="address"></td>
		</tr>
		<tr>
			<td>Teacherroom : </td>
			<td><input class="form-control" type="text" name="teacherroom"></td>
		</tr>
		<tr>
			<td>Club: </td>
			<td><input class="form-control" type="text" name="club"></td>
		</tr>
		
	</table>
	<tr>
		<td><input class="btn btn-info" type="submit" name="submit" value="แก้ไขเสร็จสิ้น"></td>
	</tr>
	</form>
	<br>
	<form action="/officials/index">
    <input class="btn" type="submit" value="กลับ">
	</form>
	</center>
@endsection
