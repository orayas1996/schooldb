<!DOCTYPE html>
<html>
<head>
<title>student detail</title>
</head>
<body>
<h1><center>ข้อมูลนักเรียน</center></h1>
<center>
<table width="500" height="544" border=1>
  <tr align="right" valign="middle">
    <td height="150" colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td width="126" height="42" align="center" valign="middle">ชื่อ:</td>
    <td width="300">&nbsp;{{$student->name}}</td>
  </tr>
  <tr>
    <td height="33" align="center" valign="middle">รหัสนักเรียน:</td>
    <td>&nbsp;{{$student->id}}</td>
  </tr>
  <tr>
    <td height="30" align="center" valign="middle">เลขรหัสประชาชน:</td>
    <td>&nbsp;{{$student->ssn}}</td>
  </tr>
  <tr>
    <td height="40" align="center" valign="middle">เพศ:</td>
    <td>&nbsp;{{$student->sex}}</td>
  </tr>
  <tr>
    <td height="37" align="center" valign="middle">อายุ:</td>
    <td>&nbsp;{{$student->age}}</td>
  </tr>
  <tr>
    <td height="39" align="center" valign="middle">ที่อยู่:</td>
    <td>&nbsp;{{$student->address}}</td>
  </tr>
  <tr>
    <td height="39" align="center" valign="middle">ชั้นปี:</td>
    <td>&nbsp;{{$student->grade}}</td>
  </tr>
  <tr>
    <td height="39" align="center" valign="middle">ห้องเรียน:</td>
    <td>&nbsp;{{$student->room}}</td>
  </tr>
</table>
</center>

<br>
<center>
<form action="/students/index">
    <input type="submit" value="Back">
	</form>
</center>

<body>
</body>
</html>