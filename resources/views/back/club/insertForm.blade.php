@extends('layouts.app')
<!DOCTYPE html>
@section('content')

<div class="page-header ">
<h2>เพิ่มวิชา</h2>
</div>
  <br>
  <br>
  <center>

	<form action='/bk/clubs/save' method="post">
	<table >
		<tr>
			<td align="right">รหัสชมรม:&nbsp;&nbsp;</td>
			<td><input  type="text" name="id" placeholder="5-digits eg.11112" required></td>
		</tr>
		<tr><td>&nbsp;</td></tr>
		<tr>
			<td align="right">ชื่อชมรม:&nbsp;&nbsp;</td>
			<td><input  type="text" name="name" placeholder="eg.Love Sleep"></td>
		</tr>
	</table>
	<br>
	<td><input class="btn btn-primary"type="submit" name="submit" value="Add"></td>
	<br><br>
	</form>
	<form action="/bk/clubs">
    <input class="btn" type="submit" value="กลับ">
	</form>

@endsection
