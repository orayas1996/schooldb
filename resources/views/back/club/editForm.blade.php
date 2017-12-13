@extends('layouts.app')
<!DOCTYPE html>
@section('content')


<div class="page-header ">
<h2>แก้ไขชมรม</h2>
</div>
  <br>
  <br>
<center>


	<form action='/bk/club/<?php echo $id; ?>/editsave' method="post">
	<table>
		<!--<tr>
			<td>StudentID : </td>
			<td><input type="text" name="id"></td>
		</tr>-->
		<tr>
			<td>Name : &nbsp;</td>
			<td><input type="text" name="name" value="{{$club->name}}"></td>
		</tr>
	</table>
	<br>
	<td><input class="btn btn-info" type="submit" name="submit" value="แก้ไขเสร็จสิ้น"></td>
	</form>
	<br>
	<form action="/bk/clubs">
    <input class="btn" type="submit" value="กลับ">
	</form>
@endsection