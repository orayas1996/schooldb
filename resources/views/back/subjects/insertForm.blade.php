@extends('layouts.app')
<!DOCTYPE html>
@section('content')

<div class="page-header ">
<h2>เพิ่มข้อมูลวิชา</h2>
</div>
  <br>
  <br>
  <center>

	<form action='/bk/subjects/save' method="post">
	<table class="table table-striped">
		<tr>
			<td>SubjectID : </td>
			<td><input class="form-control"  type="text" name="id" placeholder="2-CAPchars and 3-digits eg.MA101"></td>
		</tr>
		<tr>
			<td>Name : </td>
			<td><input class="form-control"  type="text" name="name" placeholder="eg.Math the Magic 1"></td>
		</tr>
		<tr>
			<td>Exam_Date : </td>
			<td><input class="form-control"  type="text" name="time" placeholder="Time and Date eg.09.00-10.00 10/12/2017"></td>
		</tr>
		<tr>
			<td>Year : </td>
			<td><input class="form-control"  type="number" name="grade" placeholder="1-digit eg.1"></td>
		</tr>
		<tr>
			<td>Teacher : </td>
			<td><input class="form-control"  type="text" name="sj_teacher" placeholder="13-digits eg.1234567891011"></td>
		</tr>
		<tr>
			<td>Details : </td>
			<td><input class="form-control" type="text" name="detail" placeholder="eg.PASS:40% / A:80%"></td>
		</tr>
		
	</table>
	<tr>
			<td><input class="btn btn-success" type="submit" name="submit" value="เพื่ม"></td>
		</tr>
	</form>
	<br>
	
	<form action="/bk/subjects/index">
    <input class="btn" type="submit" value="กลับ">
	</form>
	</center>

@endsection