@extends('layouts.app')
<!DOCTYPE html>
@section('content')

<div class="page-header ">
<h2>แก้ไขคะแนนนักเรียน</h2>
</div>
<table class="table table-striped">
  <tr>
    <td width="120" height="42" align="right" valign="middle">ชื่อ:</td>
    <td>&nbsp;{{$student->name}}</td>
  </tr>
  <tr>
	<td width="120" height="42" align="right" valign="middle">วิชา:</td>
    <td>&nbsp;คะแนนจิตพิสัย</td>
  </tr>
	<form action='/bk/student/<?php echo $id; ?>/editbehavesave' method="post">
		<tr>
			<td width="120" align="right" valign="middle">New_score:</td>
			<td><input class="form-control" type="text" name="newscore" placeholder="old score = {{$student->behave_score}}"></td>
		</tr>
	</table><br>
		<center>
		<tr>
			<td><input class="btn btn-info" type="submit" name="submit" value="แก้ไขเสร็จสิ้น"></td>
		</tr>
	</form>
	<br><br>
	<form action="/bk/score">
    <input class="btn" type="submit" value="กลับ">
	</form>
	</center>
	
@endsection

