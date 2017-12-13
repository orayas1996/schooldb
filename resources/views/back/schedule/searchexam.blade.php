@extends('layouts.app')
<!DOCTYPE html>
@section('content')


<div class="page-header ">
  <h2>ค้นหาตารางสอบ</h2>
</div>
  <br>
  <br>


	<table class="table table-striped">
	<tr>
		<td><center><h3>ตารางสอบ</h3></center></td>
	</tr>
	<tr>
		<td><a href="/bk/searchexam/1"><center>มัธยมศึกษาปีที่1</center></a></td>
		</tr>
		<tr>
		<td><a href="/bk/searchexam/2"><center>มัธยมศึกษาปีที่2</center></a></td>
		</tr>
		<tr>
		<td><a href="/bk/searchexam/3"><center>มัธยมศึกษาปีที่3</center></a></td>
	</tr>
	</table>

	<br>
	<center>
	<form action="/bk/home"><input class="btn" type="submit" value="กลับ"></form>	
	</center>


@endsection