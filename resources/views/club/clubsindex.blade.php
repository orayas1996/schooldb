@extends('layouts.app')
<!DOCTYPE html>
@section('content')

<div class="page-header ">
  <h2>ข้อมูลชมรมทั้งหมด</h2>
</div>
  <br>
  <br>
  <center>
	<table class="table table-striped" border=2 bgcolor"#FF0000"><tr bgcolor"#FF0000">
		<th width="100"><center>Club_ID</center></th>
		<th width="150"><center>Club_name</center></th>
		<th width="50"><center>Edit</center></th>
		<th width="50"><center>Delete</center></th>
		<th width="50"><center>Details</center></th>
	</tr>
    
        @foreach ($clubs as $club)
			<tr>
				<td><center>{{$club->id}}</center></td>
				<td><center>{{$club->name}}</center></td>
				<td><center><a href="/club/{{$club->id}}/editpage">Click</a></center></td>
				<td><center><a href="/club/{{$club->id}}/delete">Click</a></center></td>
				<td><center><a href="/club/{{$club->id}}/detail">Click</a></center></td>
			</tr>
		@endforeach
	</table><br>
	</table><br>
	<form action="/clubs/insertpage"><input class="btn btn-success" type="submit" value="เพิ่มชมรม"></form>
	<br>
	</form><form action="/home"><input class="btn" type="submit" value="กลับ"></form>

@endsection