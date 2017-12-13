@extends('layouts.app')
<!DOCTYPE html>
@section('content')


<center>
<div class="page-header ">
<h2>ข้อมูลอาจารย์</h2>
</div>

<center>
<table class="table table-striped" width="500" height="530" border=2>
  <tr align="right" valign="middle">
    <td height="150" colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td width="126" height="42" align="center" valign="middle">ชื่อ</td>
    <td width="300">&nbsp;{{$official->name}}</td>
  </tr>
  <tr>
    <td height="33" align="center" valign="middle">เลขรหัสประชาชน</td>
    <td>&nbsp;{{$official->ssn}}</td>
  </tr>
  <tr>
    <td height="30" align="center" valign="middle">เพศ</td>
    <td>&nbsp;{{$official->sex}}</td>
  </tr>
  <tr>
    <td height="40" align="center" valign="middle">ที่อยู่</td>
    <td>&nbsp;{{$official->address}}</td>
  </tr>
  <tr>
    <td height="37" align="center" valign="middle">ห้องพักครู</td>
    <td>&nbsp;{{$official->teacherroom}}</td>
  </tr>
  <tr>
    <td height="39" align="center" valign="middle">ที่ปรึกษาชมรม</td>
    <td>&nbsp;{{$official->club}}</td>
  </tr>
</table>
</center>

<br>
<center>
<form action="/bk/officials/index">
    <input class="btn" type="submit" value="กลับ">
	</form>
</center>
@endsection