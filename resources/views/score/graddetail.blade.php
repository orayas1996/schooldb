<!DOCTYPE html>
<html>
<head>
<title>student detail</title>
</head>
<body>
<h1><center>ผลการเรียน</center></h1>
<center>
<table>
  <tr>
    <td width="30" height="42" align="center" valign="middle">ชื่อ:</td>
    <td>&nbsp;{{$student->name}}</td>
  </tr>
</table>
<br>
  <table border=1>
  <tr>
    <td align="center" valign="middle" rowspan="7" width="200">มัธยมศึกษาปีที่ 1</td>
	<th align="center" valign="middle" width="150" bgcolor="lightgray">รายวิชา
	</th>
	<th align="center" valign="middle" bgcolor="lightgray">ผลการเรียน
    </th>	
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
	<th align="center" valign="middle" width="150" bgcolor="lightgray">รายวิชา
	</th>
	<th align="center" valign="middle" bgcolor="lightgray">ผลการเรียน
    </th>	
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
	<th align="center" valign="middle" width="150" bgcolor="lightgray">รายวิชา
	</th>
	<th align="center" valign="middle" bgcolor="lightgray">ผลการเรียน
    </th>	
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
    <input type="submit" value="Back">
	</form>
</center>

<body>
</body>
</html>