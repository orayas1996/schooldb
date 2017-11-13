@extends('layouts.app')
<!DOCTYPE html>
@section('content')

<div class="page-header ">
<h2>เพิ่มข้อมูลนักเรียน</h2>
</div>
  <br>
  <br>
 <center> 
	<form action='/students/save' method="post">
	<table class="table table-striped">
		<tr>
			<td>StudentID : </td>
			<td><input class="form-control" type="text" name="id" width="500"></td>
		</tr>
		<tr>
			<td>SSN : </td>
			<td><input class="form-control" type="text" name="ssn"></td>
		</tr>
		<tr>
			<td>Name : </td>
			<td><input class="form-control" type="text" name="name"></td>
		</tr>
		<tr>
			<td>Sex : </td>
			<td><input class="form-control" type="text" name="sex"></td>
		</tr>
		<tr>
			<td>Age : </td>
			<td><input class="form-control" type="number" name="age"></td>
		</tr>
		<tr>
			<td>Address : </td>
			<td><input class="form-control" type="text" name="address"></td>
		</tr>
		<tr>
			<td>Grade : </td>
			<td><input class="form-control" type="text" name="grade"></td>
		</tr>
		<tr>
			<td>Room : </td>
			<td><input class="form-control" type="text" name="room"></td>
		</tr>
		<tr>
			<td>Image : </td>
			<td><input class="form-control" type="name" class="form-control" name="image" placeholder="link to image"></td>
		</tr>
		
	</table>
	<br>
	<input class="btn btn-success" type="submit" name="submit" value="เพิ่ม">
	</form>
</center>	
<center>
<br>
<form action="/students/index"><input class="btn" type="submit" value="Back"></form>
</center>
@endsection