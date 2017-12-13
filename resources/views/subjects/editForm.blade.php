<@extends('layouts.app')
<!DOCTYPE html>
@section('content')

<div class="page-header ">
<h2>แก้ไขข้อมูลวิชา</h2>
</div><br><br>
<center>

	<form action='/subject/<?php echo $id; ?>/editsave' method="post">
	<table class="table table-striped">
		<!--<tr>
			<td>StudentID : </td>
			<td><input type="text" name="id"></td>
		</tr>-->
		<tr>
			<td>Name : </td>
			<td><input class="form-control" type="text" name="name" value="{{$subject->name}}"></td>
		</tr>
		<tr>
			<td>Exam_Date : </td>
			<td><input class="form-control" type="text" name="time" value="{{$subject->time}}"></td>
		</tr>
		<tr>
			<td>Year : </td>
			<td><input class="form-control" type="number" name="year" value="{{$subject->grade}}"></td>
		</tr>
		<tr>
			<td>Teacher : </td>
			<td><input class="form-control" type="text" name="sj_teacher" value="{{$subject->sj_teacher}}"></td>
		</tr>
		<tr>
			<td>Details : </td>
			<td><input class="form-control" type="text" name="detail" value="{{$subject->detail}}"></td>
		</tr>
		
	</table>
	<tr>
			<td><input class="btn btn-info" type="submit" name="submit" value="แก้ไขเสร็จสิ้น"></td>
		</tr>
	</form>
	<br>
	<form action="/subjects/index">
    <input class="btn" type="submit" value="กลับ">
	</form>
@endsection
