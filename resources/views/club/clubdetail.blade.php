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
  <tr>
    <th height="40" align="center" colspan="1" rowspan="1"  valign="middle">อาจารย์ที่ปรึกษา</th>
	@foreach ($teachers as $teacher)
	<tr>
		<td>{{$teacher->name}}</td>
	</tr>
	@endforeach

</table>
<br>
<table border=1>
<tr>
    <th height="40" align="center" colspan="1" rowspan="1" valign="middle">นักเรียน</th>
  </tr>
  <tr>
  <td>&nbsp;</td>
</tr>
<tr>
  <td>&nbsp;</td>
</tr>
</tr>
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
