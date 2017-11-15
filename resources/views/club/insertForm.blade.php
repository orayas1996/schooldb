@extends('layouts.app')
<!DOCTYPE html>
@section('content')


	
<div class="page-header ">
<h2>เพิ่มวิชา</h2>
</div>
  <br>
  <br>
  <center>

	<form action='/clubs/save' method="post">
	<table >
		<tr>
			<td align="right">รหัสชมรม:&nbsp;&nbsp;</td>
			<td><input  type="text" name="id"></td>
		</tr>
		<tr><td>&nbsp;</td></tr>
		<tr>
			<td align="right">ชื่อชมรม:&nbsp;&nbsp;</td>
			<td><input  type="text" name="name"></td>
		</tr>
	</table>
	<br>
	<td><input class="btn btn-primary"type="submit" name="submit" value="Add"></td>
	<br><br>
	</form>
	<form action="/clubs">
    <input class="btn" type="submit" value="กลับ">
	</form>

@endsection