<!DOCTYPE html>
<html>
<head>
<title>Club detail</title>
</head>
<body>
<h1><center>กิจกรรมนอกเวลาเรียน</center></h1>
<center>
	<tr>
		<td width="126" height="42" align="center" valign="middle">ชมรม:</td>
		<td width="300">&nbsp;{{$club->name}}</td>
	</tr>
<table>
    <th height="40" align="center" valign="middle">อาจารย์ที่ปรึกษา</th>
	@foreach ($teachers as $teacher)
	<tr>
		<td>{{$teacher->name}}</td>
	</tr>
	@endforeach

</table>
<br>
<table border=1>
	<tr>
		<th height="30" width="80" align="center" valign="middle" bgcolor="lightgray">ลำดับที่</th>
		<th width="200" align="center" valign="middle" bgcolor="lightgray">นักเรียน</th>
		<th width="50" align="center" valign="middle" bgcolor="lightgray">ชั้น</th>
		<th width="50" align="center" valign="middle" bgcolor="lightgray">ห้อง</th>
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
    <input type="submit" value="Back">
	</form>
</center>

<body>
</body>
</html>
