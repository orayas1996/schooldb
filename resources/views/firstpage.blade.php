@extends('layouts.app')
<!DOCTYPE html>
@section('content')
<div>

<p class="navbar-text navbar-right"><a href="/officials/login" class="navbar-link">Log in</a></p>


<!------------------------------------------------------------->
 <div class="glyphicon glyphicon-heart page-header ">
  <h1>Bare Bears School   <small>welcome to our site</small></h1>
</div>
  <br>
  <br>

<div class="row"><div class="col-sm-1 col-md-3"><div class="thumbnail">
      <img src="http://www.mx7.com/i/2a3/AUD737.jpg" alt="">
      <div class="caption">
        <h3>ข้อมูลนักเรียน</h3>
        <p>รายละเอียดข้อมูกนักเรียนทั้งหมดในโรงเรียน</p>
		<br>
         <li role="presentation" class="disabled"><a href="/students/searchstudent">ค้นหาข้อมูลนักเรียน</a></li>
      </div></div></div>
<div class="col-sm-1 col-md-3"><div class="thumbnail">
      <img src="http://www.mx7.com/i/140/rXc4Zf.jpg" alt="">
      <div class="caption">
        <h3>ข้อมูลบุคลากร</h3>
        <p>รายละเอียดข้อมูลอาจารย์ทั้งหมดในโรงเรียน</p>
		<br>
         <li role="presentation" class="disabled"><a href="/officials/index">ค้นหาข้อมูลอาจารย์</a></li>
      </div></div></div>
<div class="col-sm-1 col-md-3"><div class="thumbnail">
      <img src="http://www.mx7.com/i/1d2/1S6EmH.jpg" alt="">
      <div class="caption">
        <h3>วิชาเรียน</h3>
        <p>รายละเอียดวิชาที่เปิดสอนทั้งหมด</p>
		<br>
         <li role="presentation" class="disabled"><a href="/subjects">ค้นหาข้อมูลวิชาที่เปิดสอน</a></li>
      </div></div></div>
<div class="col-sm-1 col-md-3"><div class="thumbnail">
      <img src="http://www.mx7.com/i/2a3/AUD737.jpg" alt="">
      <div class="caption">
        <h3>ชมรม</h3>
        <p>รายละเอียดกิจกรรมนอกเวลาเรียนของนักเรียน</p>
		<br>
         <li role="presentation" class="disabled"><a href="/table">ค้นหาข้อมูลชมรม</a></li>
      </div></div></div>
<div class="col-sm-1 col-md-3"><div class="thumbnail">
      <img src="http://www.mx7.com/i/250/xnxdER.jpg" alt="">
      <div class="caption">
        <h3>ตารางเรียน</h3>
        <p>รายละเอียดข้อมูลตารางเรียนของนักเรียน</p>
		<br>
        <li role="presentation" class="disabled"><a href="/score">ค้นหาตารางเรียน</a></li>
      </div></div></div>
<div class="col-sm-1 col-md-3"><div class="thumbnail">
      <img src="http://www.mx7.com/i/250/xnxdER.jpg" alt="">
      <div class="caption">
        <h3>ตารางสอบ</h3>
        <p>รายละเอียดข้อมูลตารางสอบของนักเรียน</p>
		<br>
        <li role="presentation" class="disabled"><a href="/clubs">ค้นหาตารางสอบ</a></li>
      </div></div></div>
<div class="col-sm-1 col-md-3"><div class="thumbnail">
      <img src="http://www.mx7.com/i/250/xnxdER.jpg" alt="">
      <div class="caption">
        <h3>ผลการเรียน</h3>
        <p>ผลการเรียนทุกภาคการศึกษาของนักเรียน</p>
		<br>
        <li role="presentation" class="disabled"><a href="#">ค้นหาผลการเรียน</a></li>
      </div></div></div>
	  
	  
	  
	  
</div>



</div>

<<<<<<< HEAD
<html>
<head>
<title>School</title>
</head>
<body>
<table width="783" height="400" align="center">
	<tr>
		<td height="30" colspan="2" align="right" valign="top"><a href="/officials/login">Login</a></td>
	</tr>
  <tr>
    <td height="200" colspan="2" align="center" valign="middle" bgcolor="#FFCCCC"><h1>โรงเรียนมัธยมหมีน้อย</h1></td>
  </tr>
  <tr>
    <td width="168" height="50" align="center" valign="middle" bgcolor="#FF9966"><a href="/students/searchstudent">นักเรียน</a></td>
    <td width="574" align="left" valign="middle">&nbsp;รายละเอียดข้อมูลนักเรียน</td>
  </tr>
  <tr>
    <td height="50" align="center" valign="middle" bgcolor="#FF9966"><a href="/officials/index">บุคคลากร</a></td>
    <td align="left" valign="middle">&nbsp;รายละเอียดข้อมูลคุณครู</td>
  </tr>
  <tr>
    <td height="50" align="center" valign="middle" bgcolor="#FF9966"><a href="/subjects">วิชาเรียน</a></td>
    <td align="left" valign="middle">&nbsp;รายละเอียดของวิชาทั้งหมด</td>
  </tr>
  <tr>
    <td height="50" align="center" valign="middle" bgcolor="#FF9966"><a href="/table">ตารางเรียน</a></td>
    <td align="left" valign="middle">&nbsp;รายละเอียดราตางเรียนของนักเรียนแต่ละชั้นปี</td>
  </tr>
  <tr>
    <td height="50" align="center" bgcolor="#FF9966"><a href="/score">ผลการเรียน</a></td>
    <td align="left" valign="middle">&nbsp;ตรวจสอบผลการเรียนใหม่และเก่าของนักเรียน</td>
  </tr>
  <tr>
    <td height="50" align="center" bgcolor="#FF9966"><a href="/clubs">ชมรม</a></td>
    <td align="left" valign="middle">&nbsp;รายชื่อชมรมทั้งหมดภายในโรงเรียน</td>
  </tr>
  <tr>
    <td height="50" align="center" bgcolor="#FF9966"><a href="/searchexam">เวลาสอบ</a></td>
    <td align="left" valign="middle">&nbsp;รายละเอียดเวลาสอบของนักเรียนแต่ละชั้นปี</td>
  </tr>
</table>
</body>
</html>
=======
@endsection
>>>>>>> 975728f7b3ed3ebedd5527ec957dee8456b20d64
