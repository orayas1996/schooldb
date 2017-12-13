@extends('layouts.app')
<!DOCTYPE html>
@section('content')



<div class="page-header">
<h2>ข้อมูลอาจารย์ทั้งหมด</h2>
</div>
  <br>
  <br>
<center>
	
	<table class="table table-striped" border=2><tr bgcolor"#FF0000";>
		<th width="150" bgcolor="lightgray"><center>รหัสประจำตัวประชาชน</center></th>
		<th width="200" bgcolor="lightgray"><center>ชื่อ - สกุล</center></th>
		<th width="100" bgcolor="lightgray"><center>ห้องพักครู</center></th>
		<th width="50" bgcolor="lightgray"><center>Edit</center></th>
		<th width="50" bgcolor="lightgray"><center>Delete</center></th>
		<th width="50" bgcolor="lightgray"><center>Details</center></th>
	</tr>

        @foreach ($officials as $official)
			<tr>
				<td><center>{{$official->ssn}}</center></td>
				<td>{{$official->name}}</td>
				<td><center>{{$official->teacherroom}}</center></td>
				<td><center><a href="/official/{{$official->ssn}}/editpage">Click</a></center></td>
				<td><center><a href="/official/{{$official->ssn}}/delete">Click</a></center></td>
				<td><center><a href="/official/{{$official->ssn}}/detail">Click</a></center></td>
			</tr>
		@endforeach
	</table><br>
	</table><br>
	<form action="/officials/insertpage"><input class="btn btn-primary" type="submit" value="เพิ่มอาจารย์"></form>
	<br>
	</form><form action="/home"><input class="btn" type="submit" value="กลับ"></form>

@endsection