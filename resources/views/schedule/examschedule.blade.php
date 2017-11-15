<!DOCTYPE html>
<html>
<head>
<title>EXAM detail</title>
</head>
<body>
<h1><center>ตารางสอบ</center></h1>
<center>

<table>
  <tr>
    <td width="150" height="42" align="center" valign="middle">ชั้นมัธยมศึกษาปีที่ :</td>
    <td width="25">{{$grade}}</td>
  </tr>
</table>

<table border=1>
  <tr>
    <th height="40" width="200" align="center" valign="middle">รายวิชา</th>
	<th height="40" width="200" align="center" valign="middle">วัน/เวลา</th>
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
<form action="/searchexam">
    <input type="submit" value="Back">
	</form>
</center>

<body>
</body>
</html>