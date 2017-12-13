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
      <img src="https://www.picz.in.th/images/2017/12/12/Untitled-1124350357e982839.jpg" alt="Untitled-1124350357e982839.jpg" border="0" />
      <div class="caption">
        <h3>ข้อมูลนักเรียน</h3>
        <p>รายละเอียดข้อมูกนักเรียนทั้งหมดในโรงเรียน</p>
		<br>
         <li role="presentation" class="disabled"><a href="/students/searchstudent">ค้นหาข้อมูลนักเรียน</a></li>
      </div></div></div>
<div class="col-sm-1 col-md-3"><div class="thumbnail">
      <img src="https://www.picz.in.th/images/2017/12/12/Untitled-39ac68be80d2fbe65.jpg" alt="Untitled-39ac68be80d2fbe65.jpg" border="0" />
      <div class="caption">
        <h3>ข้อมูลบุคลากร</h3>
        <p>รายละเอียดข้อมูลอาจารย์ทั้งหมดในโรงเรียน</p>
		<br>
         <li role="presentation" class="disabled"><a href="/officials/index">ค้นหาข้อมูลอาจารย์</a></li>
      </div></div></div>
<div class="col-sm-1 col-md-3"><div class="thumbnail">
      <img src="https://www.picz.in.th/images/2017/12/12/48a3c70f6e7931b65.jpg" alt="48a3c70f6e7931b65.jpg" border="0" />
      <div class="caption">
        <h3>วิชาเรียน</h3>
        <p>รายละเอียดวิชาที่เปิดสอนทั้งหมด</p>
		<br>
         <li role="presentation" class="disabled"><a href="/subjects">ค้นหาข้อมูลวิชาที่เปิดสอน</a></li>
      </div></div></div>
<div class="col-sm-1 col-md-3"><div class="thumbnail">
     <img src="https://www.picz.in.th/images/2017/12/12/1a2feee82600409a1.jpg" alt="1a2feee82600409a1.jpg" border="0" />
      <div class="caption">
        <h3>ชมรม</h3>
        <p>รายละเอียดกิจกรรมนอกเวลาเรียนของนักเรียน</p>
		<br>
         <li role="presentation" class="disabled"><a href="/clubs">ค้นหาข้อมูลชมรม</a></li>
      </div></div></div>
<div class="col-sm-1 col-md-3"><div class="thumbnail">
      <img src="https://www.picz.in.th/images/2017/12/12/Untitled-49c453b0698521b3b.jpg" alt="Untitled-49c453b0698521b3b.jpg" border="0" />
      <div class="caption">
        <h3>ตารางเรียน</h3>
        <p>รายละเอียดข้อมูลตารางเรียนของนักเรียน</p>
		<br>
        <li role="presentation" class="disabled"><a href="/table">ค้นหาตารางเรียน</a></li>
      </div></div></div>
<div class="col-sm-1 col-md-3"><div class="thumbnail">
      <img src="https://www.picz.in.th/images/2017/12/12/Untitled-5.jpg" alt="Untitled-5.jpg" border="0" />
      <div class="caption">
        <h3>ตารางสอบ</h3>
        <p>รายละเอียดข้อมูลตารางสอบของนักเรียน</p>
		<br>
        <li role="presentation" class="disabled"><a href="/searchexam">ค้นหาตารางสอบ</a></li>
      </div></div></div>
<div class="col-sm-1 col-md-3"><div class="thumbnail">
      <img src="https://www.picz.in.th/images/2017/12/12/Untitled-27429ab7f045e40f6.jpg" alt="Untitled-27429ab7f045e40f6.jpg" border="0" />
      <div class="caption">
        <h3>ผลการเรียน</h3>
        <p>ผลการเรียนทุกภาคการศึกษาของนักเรียน</p>
		<br>
        <li role="presentation" class="disabled"><a href="/score">ค้นหาผลการเรียน</a></li>
      </div></div></div>
	  
	  
	  
	  
</div>


</div>


@endsection