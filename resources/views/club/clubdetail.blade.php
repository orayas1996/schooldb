@extends('layouts.app')
<!DOCTYPE html>
@section('content')


<center>
<div class="page-header ">
  <h2>กิจกรรมนอกเวลาเรียน</h2>
</div>


    <tr>
		<td width="126" height="42" align="center" valign="middle">ชมรม:</td>
		<td width="300">{{$club->name}}</td>
	</tr>
<center><table >
    <th  height="40" align="center" valign="middle"><center>อาจารย์ที่ปรึกษา</center></th>
	@foreach ($teachers as $teacher)
	<tr>
		<td>{{$teacher->name}}</td>
	</tr>
	@endforeach

</table></center>
<br>
<table  border=2 class="table table-striped">
	<tr>
		<th height="30" width="80" align="center" valign="middle" bgcolor="lightgray"><center>ลำดับที่</center></th>
		<th width="200" align="center" valign="middle" bgcolor="lightgray"><center>รายชื่อนักเรียนในชมรม</center></th>
		<th width="50" align="center" valign="middle" bgcolor="lightgray"><center>ชั้น</center></th>
		<th width="50" align="center" valign="middle" bgcolor="lightgray"><center>ห้อง</center></th>
	</tr>
	<p hidden><?php echo $var=0; ?></p>
	@foreach ($students as $student)
	<tr>
		<?php $var++; ?>
		<td><center><?php echo $var; ?><center></td>
		<td><center>{{$student->name}}<center></td>
		<td><center>ม.{{$student->grade}}<center></td>
		<td><center>{{$student->room}}<center></td>
	</tr>
	@endforeach
</table>
</center>

<br>
<center>
<form action="/clubs">
    <input class="btn" type="submit" value="กลับ">
	</form>
</center>

@endsection
