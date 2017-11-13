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
			<td>Address : </td>
			<td><input class="form-control" type="text" name="address"></td>
		</tr>
		<tr>
			<td>TeacherRoom : </td>
			<td><input class="form-control" type="text" name="teacherroom"></td>
		</tr>
		<tr>
			<td>Club : </td>
			<td><input class="form-control" type="text" name="club"></td>
		</tr>
		</table>
		
			<td><input class="btn btn-success" type="submit" name="submit" value="เพิ่ม"></td>
		
	</form>
	<br>
	<form action="/officials/index">
    <input class="btn" type="submit" value="กลับ">
	</form>
	</center>

@endsection