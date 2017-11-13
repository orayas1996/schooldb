@extends('layouts.app')
<!DOCTYPE html>
@section('content')

	
<div class="page-header ">
<h2>ข้อมูลนักเรียนทั้งหมด</h2>
</div>
  <br>
  <br>
<center>  
	<table class="table table-striped" border=2><tr bgcolor"#FF0000">
		<th width="100"><center>student_id</center></th>
		<th width="150"><center>student_ssn</center></th>
		<th width="200"><center>student_name</center></th>
		<th width="30"><center>grade</center></th>
		<th width="30"><center>room</center></th>
		<th width="50"><center>Edit</center></th>
		<th width="50"><center>Delete</center></th>
		<th width="50"><center>Details</center></th>
	</tr>
    
        @foreach ($students as $student)
			<tr>
				<td><center>{{$student->id}}</center></td>
				<td><center>{{$student->ssn}}</center></td>
				<td>{{$student->name}}</td>
				<td><center>{{$student->grade}}</center></td>
				<td><center>{{$student->room}}</center></td>
				<td><center><a href="/student/{{$student->id}}/editpage">Click</a></center></td>
				<td><center><a href="/student/{{$student->id}}/delete">Click</a></center></td>
				<td><center><a href="/student/{{$student->id}}/detail">Click</a></center></td>
			</tr>
		@endforeach
	</table><br>
	</table><br>
	<form action="/students/insertpage"><input class="btn btn-primary" type="submit" value="เพิ่มนักเรียน"></form>
	<br>
	</form><form action="/students/searchstudent"><input class="btn" type="submit" value="กลับ"></form>


@endsection	