<!DOCTYPE html>
<html>
<head>
<title>student detail</title>
</head>
<body>
<h1><center>ผลการเรียน</center></h1>
<center>
  <tr>
    <td width="126" height="42" align="center" valign="middle">ชื่อ:</td>
    <td width="300">&nbsp;{{$student->name}}</td>
  </tr>

  <table border=1>
  <tr>
    <td height="40" align="center" valign="middle">มัธยมศึกษาปีที่ 1</td>
	<th  align="center" colspan="1"    valign="middle">รายวิชา
	</th>
	<th  align="center"  rowspan="1"   valign="middle">ผลการเรียน
    </th>	
  </tr>
  <tr>
  <td></td>
  <td>ภาษาไทย</td>
  <td>A</td>
</tr>
<tr>
  <td></td>
  <td>คณิตศาสตร์</td>
  <td>A</td>
</tr>
<tr>
  <td></td>
  <td>ภาษาอังกฤษ</td>
  <td>A</td>
</tr>
<tr>
  <td></td>
  <td>สังคม</td>
  <td>A</td>
</tr>
<tr>
  <td></td>
  <td>วิทยาศาสตร์</td>
  <td>A</td>
</tr>
<tr>
  <td></td>
  <td>ศิลปะ</td>
  <td>A</td>
</tr>
<tr>
  <td>เกรดเฉลี่ยรวม</td>
  <td></td>
  <td>4.00</td>
</tr>
<tr>
    <td height="40" align="center" valign="middle">มัธยมศึกษาปีที่ 2</td>
	<th  align="center" colspan="1"    valign="middle">รายวิชา
	</th>
	<th  align="center"  rowspan="1"   valign="middle">ผลการเรียน
    </th>	
  </tr>
  <tr>
  <td></td>
  <td>ภาษาไทย</td>
  <td>A</td>
</tr>
<tr>
  <td></td>
  <td>คณิตศาสตร์</td>
  <td>A</td>
</tr>
<tr>
  <td></td>
  <td>ภาษาอังกฤษ</td>
  <td>A</td>
</tr>
<tr>
  <td></td>
  <td>สังคม</td>
  <td>A</td>
</tr>
<tr>
  <td></td>
  <td>วิทยาศาสตร์</td>
  <td>A</td>
</tr>
<tr>
  <td></td>
  <td>ศิลปะ</td>
  <td>A</td>
</tr>
<tr>
  <td>เกรดเฉลี่ยรวม</td>
  <td></td>
  <td>4.00</td>
</tr>
<tr>
    <td height="40" align="center" valign="middle">มัธยมศึกษาปีที่ 3</td>
	<th  align="center" colspan="1"    valign="middle">รายวิชา
	</th>
	<th  align="center"  rowspan="1"   valign="middle">ผลการเรียน
    </th>	
  </tr>
  <tr>
  <td></td>
  <td>ภาษาไทย</td>
  <td>A</td>
</tr>
<tr>
  <td></td>
  <td>คณิตศาสตร์</td>
  <td>A</td>
</tr>
<tr>
  <td></td>
  <td>ภาษาอังกฤษ</td>
  <td>A</td>
</tr>
<tr>
  <td></td>
  <td>สังคม</td>
  <td>A</td>
</tr>
<tr>
  <td></td>
  <td>วิทยาศาสตร์</td>
  <td>A</td>
</tr>
<tr>
  <td></td>
  <td>ศิลปะ</td>
  <td>A</td>
</tr>
<tr>
  <td>เกรดเฉลี่ยรวม</td>
  <td></td>
  <td>4.00</td>
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