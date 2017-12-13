@extends('layouts.app')
<!DOCTYPE html>
@section('content')


<div class="page-header ">
  <h2>ตารางสอบ</h2>
</div>
  <br>
  <br>
<center>

<table>
  <tr>
    <td width="150" height="42" align="center" valign="middle"><h4>ชั้นมัธยมศึกษาปีที่ :</h4></td>
    <td width="25"><h4>{{$grade}}</h4></td>
  </tr>
</table>

<table class="table table-striped" border=1>
  <tr>
    <th height="40" width="200" align="center" valign="middle" border=2 bgcolor="lightgray"><center>รายวิชา</center></th>
	<th height="40" width="200" align="center" valign="middle" border=2 bgcolor="lightgray"><center>วัน/เวลา</center></th>
@foreach ($subjects as $subject)
<tr>
	<td align="center" valign="middle"><center>{{$subject->name}}<center></td>
	<td align="center" valign="middle"><center>{{$subject->time}}<center></td>
</tr>
@endforeach
</table>
</center>

<br>
<center>
<form action="/bk/searchexam">
    <input class="btn" type="submit" value="กลับ">
	</form>
</center>

@endsection