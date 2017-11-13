<!DOCTYPE html>
<html>
<head>
<title>student detail</title>
</head>
<body>
<h1><center>ตารางสอบ</center></h1>
<center>
  <tr>
    <td width="126" height="42" align="center" valign="middle">ชั้นมัธยมศึกษาปีที่:</td>
    <td width="300">&nbsp;{{$class->name}}</td>
  </tr>
  <tr>
    <td width="126" height="42" align="center" valign="middle">ห้อง:</td>
    <td width="300">&nbsp;{{$room->name}}</td>
  </tr>

<table border=1>
  <tr>
    <th height="40" align="center" colspan="1" rowspan="1" valign="middle">รายวิชา</th>
	<th height="40" align="center" colspan="1" rowspan="1" valign="middle">วัน/เดือน/ปี</th>
	<th height="40" align="center" colspan="1" rowspan="1" valign="middle">เวลา</th>
	<th height="40" align="center" colspan="1" rowspan="1" valign="middle">ห้อง</th>
	<th height="40" align="center" colspan="1" rowspan="1" valign="middle">อาจารย์คุมการสอบ</th>
<tr>
	<td>ภาษาไทย</td>
	<td>01/12/17</td>
	<td>12.00-15.00</td>
	<td>room502</td>
	<td>teacher A</td>
</tr>
<tr>
	<td>ภาษาอังกฤษ</td>
	<td>03/12/17</td>
	<td>08.00-11.00</td>
	<td>room604</td>
  <td>teacher B</td>
</tr>
</table>
</center>

<br>
<center>
<form action="/students/searchstudent">
    <input type="submit" value="Back">
	</form>
</center>

<body>
</body>
</html>