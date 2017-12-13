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
			<td><input class="form-control" type="text" name="id" width="500" placeholder="5-digits eg.12345" required></td>
		</tr>
		<tr>
			<td>SSN : </td>
			<td><input class="form-control" type="text" name="ssn" placeholder="13-digits eg.0123456789101"></td>
		</tr>
		<tr>
			<td>Name : </td>
			<td><input class="form-control" type="text" name="name" placeholder="Thai-lang eg.สวัสดี มีดี"></td>
		</tr>
		<tr>
			<td>Sex : </td>
			<td><input class="form-control" type="text" name="sex" placeholder="1-char eg.ช"></td>
		</tr>
		<tr>
			<td>Age : </td>
			<td><input class="form-control" type="number" name="age" placeholder="digit(s) eg.13"></td>
		</tr>
		<tr>
			<td>Address : </td>
			<td><input class="form-control" type="text" name="address" placeholder="eg.990 hollywood"></td>
		</tr>
		<tr>
			<td>Grade : </td>
			<td><input class="form-control" type="text" name="grade" placeholder="1-digit eg.1"></td>
		</tr>
		<tr>
			<td>Room : </td>
			<td><input class="form-control" type="text" name="room" placeholder="1-digit eg.3"></td>
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