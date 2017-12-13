@extends('layouts.app')
<!DOCTYPE html>
@section('content')


<center>
<div class="page-header ">
<h2>ข้อมูลวิชา</h2>
</div>

<center>
<table class="table table-striped" width="500" height="544" border=2>
  <tr>
    <td width="126" height="42" align="center" valign="middle">รหัสวิชา:</td>
    <td width="300">&nbsp;<?php echo $id;?></td>
  </tr>
  <tr>
    <td height="33" align="center" valign="middle">ชื่อวิชา:</td>
    <td>&nbsp;{{$subject->name}}</td>
  </tr>
  <tr>
    <td height="30" align="center" valign="middle">เวลาสอบ:</td>
    <td>&nbsp;{{$subject->time}}</td>
  </tr>
  <tr>
    <td height="40" align="center" valign="middle">ปีการศึกษา:</td>
    <td>&nbsp;{{$subject->grade}}</td>
  </tr>
  <tr>
    <td height="37" align="center" valign="middle">ข้อมูลรายวิชา:</td>
    <td>&nbsp;{{$subject->detail}}</td>
  </tr>
</table>
</center>

<br>
<center>
<form action="/bk/subjects/index">
    <input class="btn" type="submit" value="กลับ">
	</form>
</center>

@endsection