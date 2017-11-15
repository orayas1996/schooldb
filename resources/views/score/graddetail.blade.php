@extends('layouts.app')
<!DOCTYPE html>
@section('content')


<center><div class="page-header ">
<h2>ผลการเรียน</h2>
</div>
<table>
  <tr>
    <td width="30" height="42" align="center" valign="middle">ชื่อ:</td>
    <td>&nbsp;{{$student->name}}</td>
  </tr>
</table>
<br>
  <table class="table table-striped" border=2>
  <tr>
    <td align="center" valign="middle" rowspan="7" width="200">มัธยมศึกษาปีที่ 1</td>
	<th align="center" valign="middle" width="150" bgcolor="lightgray"><center>รายวิชา
	</center></th>
	<th align="center" valign="middle" bgcolor="lightgray"><center>ผลการเรียน
    </center></th>	
  </tr>
  <tr>
  <td><center>ภาษาไทย</center></td>
  <td><center>A</center></td>
</tr>
<tr>
  <td><center>คณิตศาสตร์</center></td>
  <td><center>A</center></td>
</tr>
<tr>
  <td><center>ภาษาอังกฤษ</center></td>
  <td><center>A</center></td>
</tr>
<tr>
  <td><center>สังคม</center></td>
  <td><center>A</center></td>
</tr>
<tr>
  <td><center>วิทยาศาสตร์</center></td>
  <td><center>A</center></td>
</tr>
<tr>
  <td><center>ศิลปะ</center></td>
  <td><center>A</center></td>
</tr>
  <tr>
    <td align="center" valign="middle" rowspan="7" width="200">มัธยมศึกษาปีที่ 2</td>
	<th align="center" valign="middle" width="150" bgcolor="lightgray"><center>รายวิชา
	</center></th>
	<th align="center" valign="middle" bgcolor="lightgray"><center>ผลการเรียน
    </center></th>	
  </tr>
  <tr>
  <td><center>ภาษาไทย</center></td>
  <td><center>A</center></td>
</tr>
<tr>
  <td><center>คณิตศาสตร์</center></td>
  <td><center>A</center></td>
</tr>
<tr>
  <td><center>ภาษาอังกฤษ</center></td>
  <td><center>A</center></td>
</tr>
<tr>
  <td><center>สังคม</center></td>
  <td><center>A</center></td>
</tr>
<tr>
  <td><center>วิทยาศาสตร์</center></td>
  <td><center>A</center></td>
</tr>
<tr>
  <td><center>ศิลปะ</center></td>
  <td><center>A</center></td>
</tr>
  <tr>
    <td align="center" valign="middle" rowspan="7" width="200">มัธยมศึกษาปีที่ 3</td>
	<th align="center" valign="middle" width="150" bgcolor="lightgray"><center>รายวิชา
	</center></th>
	<th align="center" valign="middle" bgcolor="lightgray"><center>ผลการเรียน
    </center></th>	
  </tr>
  <tr>
  <td><center>ภาษาไทย</center></td>
  <td><center>A</center></td>
</tr>
<tr>
  <td><center>คณิตศาสตร์</center></td>
  <td><center>A</center></td>
</tr>
<tr>
  <td><center>ภาษาอังกฤษ</center></td>
  <td><center>A</center></td>
</tr>
<tr>
  <td><center>สังคม</center></td>
  <td><center>A</center></td>
</tr>
<tr>
  <td><center>วิทยาศาสตร์</center></td>
  <td><center>A</center></td>
</tr>
<tr>
  <td><center>ศิลปะ</center></td>
  <td><center>A</center></td>
</tr>
</table>
</center>

<br>
<center>
<form action="/score">
    <input class="btn" type="submit" value="กลับ">
	</form>
</center>

@endsection