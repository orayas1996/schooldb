<!DOCTYPE html>
<html>
<head>
<title>Subject detail</title>
</head>
<body>
<h1><center>ข้อมูลวิชา</center></h1>
<center>
<table width="500" height="544" border=1>
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
    <td>&nbsp;{{$subject->year}}</td>
  </tr>
  <tr>
    <td height="37" align="center" valign="middle">ข้อมูลรายวิชา:</td>
    <td>&nbsp;{{$subject->detail}}</td>
  </tr>
</table>
</center>

<br>
<center>
<form action="/subjects/index">
    <input type="submit" value="Back">
	</form>
</center>

<body>
</body>
</html>