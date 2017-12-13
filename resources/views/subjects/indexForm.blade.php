@extends('layouts.app')
<!DOCTYPE html>
@section('content')

	
<div class="page-header ">
<h2>ข้อมูลวิชาทั้งหมด</h2>
</div>
  <br>
  <br>
<center>
	
	<table class="table table-striped" border=2><tr bgcolor"#FF0000">
		<th width="100" bgcolor="lightgray"><center>รหัสวิชา</center></th>
		<th width="200" bgcolor="lightgray"><center>ชื่อวิชา</center></th>
		<th width="100" bgcolor="lightgray"><center>วิชาประจำชั้น</center></th>
		<th width="200" bgcolor="lightgray"><center>เวลาสอบ</center></th>
		<th width="50" bgcolor="lightgray"><center>Edit</center></th>
		<th width="50" bgcolor="lightgray"><center>Delete</center></th>
		<th width="50" bgcolor="lightgray"><center>Details</center></th>
	</tr>
    
        @foreach ($subjects as $subject)
			<tr>
				<td><center>{{$subject->id}}</center></td>
				<td><center>{{$subject->name}}</center></td>
				<td><center>ม.{{$subject->grade}}</center></td>
				<td><center>{{$subject->time}}</center></td>
				<td><center><a href="/subject/{{$subject->id}}/editpage">Click</a></center></td>
				<td><center><a href="/subject/{{$subject->id}}/delete">Click</a></center></td>
				<td><center><a href="/subject/{{$subject->id}}/detail">Click</a></center></td>
			</tr>
		@endforeach
	</table><br>
	</table><br>
	<form action="/subjects/insertpage"><input class="btn btn-primary" type="submit" value="เพิ่มวิชา"></form>
	<br>
	</form><form action="/subjects"><input class="btn" type="submit" value="กลับ"></form>

@endsection