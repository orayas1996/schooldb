@extends('layouts.app')
<!DOCTYPE html>
@section('content')

<div class="page-header ">
<h2>เพิ่มข้อมูลวิชา</h2>
</div>
  <br>
  <br>
  <center>

	<form action='/subjects/save' method="post">
	<table class="table table-striped">
		<tr>
			<td>SubjectID : </td>
			<td><input class="form-control"  type="text" name="id"></td>
		</tr>
		<tr>
			<td>Name : </td>
			<td><input class="form-control"  type="text" name="name"></td>
		</tr>
		<tr>
			<td>Exam_Date : </td>
			<td><input class="form-control"  type="text" name="time"></td>
		</tr>
		<tr>
			<td>Year : </td>
			<td><input class="form-control"  type="number" name="year"></td>
		</tr>
		<tr>
			<td>Teacher : </td>
			<td><input class="form-control"  type="text" name="sj_teacher"></td>
		</tr>
		<tr>
			<td>Details : </td>
			<td><input class="form-control" type="text" name="detail"></td>
		</tr>
		
	</table>
	<tr>
			<td><input class="btn btn-success" type="submit" name="submit" value="เพื่ม"></td>
		</tr>
	</form>
	<br>
	
	<form action="/subjects/index">
    <input class="btn" type="submit" value="กลับ">
	</form>
	</center>

@endsection