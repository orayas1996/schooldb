@extends('layouts.app')
<!DOCTYPE html>
@section('content')

<div class="page-header ">
<h2>เพิ่มข้อมูลอาจารย์</h2>
</div>
  <br>
  <br>
 <center>

	<form action='/officials/save' method="post">
	<table class="table table-striped">
		<tr>
			<td>Official_ssn : </td>
			<td><input class="form-control" type="text" name="ssn" placeholder="13-digits eg.0123456789101" required></td>
		</tr>
		<tr>
			<td>Name : </td>
			<td><input class="form-control" type="text" name="name" placeholder="Thai-lang eg.สวัสดี มีดี"></td>
		</tr>
		<tr>
			<td>Sex : </td>
			<td><input class="form-control" type="text" name="sex" placeholder="digit(s) eg.ช"></td>
		</tr>
		<tr>
			<td>Address : </td>
			<td><input class="form-control" type="text" name="address" placeholder="eg.888 hollywood"></td>
		</tr>
		<tr>
			<td>TeacherRoom : </td>
			<td><input class="form-control" type="text" name="teacherroom" placeholder="Room eg.312"></td>
		</tr>
		<tr>
			<td>Club : </td>
			<td><input class="form-control" type="text" name="club" placeholder="5-digits eg.11111"></td>
		</tr>
		</table>

			<td><input class="btn btn-success" type="submit" name="submit" value="เพิ่ม"></td>

	</form>
	<br>
	<form action="/bk/officials/index">
    <input class="btn" type="submit" value="กลับ">
	</form>
	</center>

@endsection
