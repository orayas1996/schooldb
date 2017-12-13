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
<<<<<<< HEAD
    <td align="center" valign="middle" rowspan="{{$scores1->count()+1}}" width="200">มัธยมศึกษาปีที่ 1</td>
	<th align="center" valign="middle" width="150" bgcolor="lightgray"><center>รายวิชา
	</center></th>
	<th align="center" valign="middle" bgcolor="lightgray"><center>ผลการเรียน
    </center></th>	
=======
    <td height="40" align="center" valign="middle">มัธยมศึกษาปีที่ 1</td>
	<th  align="center" colspan="1"    valign="middle">รายวิชา
	</th>
	<th  align="center"  rowspan="1"   valign="middle">ผลการเรียน
    </th>	
>>>>>>> bde7e3c2fa7b94a50ff7ed6cecadf2bbfaccd779
  </tr>
	@foreach ($scores1 as $scr)
	<tr>
		<td><center>{{$scr->subject}}</center></td>
		<td><center>{{$scr->totalscore}}</center></td>
	</tr>
	@endforeach
  <tr>
<<<<<<< HEAD
    <td align="center" valign="middle" rowspan="{{$scores2->count()+1}}" width="200">มัธยมศึกษาปีที่ 2</td>
	<th align="center" valign="middle" width="150" bgcolor="lightgray"><center>รายวิชา
	</center></th>
	<th align="center" valign="middle" bgcolor="lightgray"><center>ผลการเรียน
    </center></th>	
=======
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
>>>>>>> bde7e3c2fa7b94a50ff7ed6cecadf2bbfaccd779
  </tr>
  @foreach ($scores2 as $scr)
	<tr>
		<td><center>{{$scr->subject}}</center></td>
		<td><center>{{$scr->totalscore}}</center></td>
	</tr>
	@endforeach
  <tr>
<<<<<<< HEAD
    <td align="center" valign="middle" rowspan="{{$scores3->count()+1}}" width="200">มัธยมศึกษาปีที่ 3</td>
	<th align="center" valign="middle" width="150" bgcolor="lightgray"><center>รายวิชา
	</center></th>
	<th align="center" valign="middle" bgcolor="lightgray"><center>ผลการเรียน
    </center></th>	
  </tr>
  @foreach ($scores3 as $scr)
	<tr>
		<td><center>{{$scr->subject}}</center></td>
		<td><center>{{$scr->totalscore}}</center></td>
	</tr>
	@endforeach
=======
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
>>>>>>> bde7e3c2fa7b94a50ff7ed6cecadf2bbfaccd779
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