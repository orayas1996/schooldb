@extends('layouts.app')
<!DOCTYPE html>
@section('content')

<p class="navbar-text navbar-right"><a href="/home" class="navbar-link">Log Out</a></p>
<div class="page-header ">
  <h2>ค้นหาข้อมูลผลการเรียน</h2>
</div>
  <br>
  <br>

<form action="/bk/students/searchingscore" method="get">
<center>
<table>
<tr>
	<td width="25%" align="right"><label for="id">รหัสนักเรียน:</label></td>
	<td><input type="text" name="id" value="" placeholder="5-digits eg.00001"></td>
	<td width="25%"><input class="btn btn-primary btn-sm" type="submit" name="search" value="ค้นหา"></td>
</tr>
</table>
</center>
</form>
<br>

<center>
	<form action="/bk/home"><input class="btn" type="submit" value="กลับ"></form>
</center>




@endsection
