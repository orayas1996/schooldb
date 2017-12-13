@extends('layouts.app')
<!DOCTYPE html>
@section('content')
<div>
	<p class="navbar-text navbar-right"><a href="/home" class="navbar-link">Log Out</a></p>
<!------------------------------------------------------------->
 <div class="glyphicon glyphicon-heart page-header ">
  <h1>Bare Bears School   <small>welcome to our site</small></h1>
</div>
  <br>
  <br>

<div class="row"><div class="col-sm-1 col-md-3"><div class="thumbnail">
      <img src="https://www.picz.in.th/images/2017/12/14/Untitled-10448a9dd29d2aad8.jpg" alt="Untitled-10448a9dd29d2aad8.jpg" border="0" />
      <div class="caption">
        <h3>ข้อมูลนักเรียน</h3>
        <p>รายละเอียดข้อมูกนักเรียนทั้งหมดในโรงเรียน</p>
		<br>
         <li role="presentation" class="disabled"><a href="/bk/students/searchstudent">ค้นหาข้อมูลนักเรียน</a></li>
      </div></div></div>
<div class="col-sm-1 col-md-3"><div class="thumbnail">
      <img src="https://www.picz.in.th/images/2017/12/14/Untitled-3.jpg" alt="Untitled-3.jpg" border="0" />
      <div class="caption">
        <h3>ข้อมูลบุคลากร</h3>
        <p>รายละเอียดข้อมูลอาจารย์ทั้งหมดในโรงเรียน</p>
		<br>
         <li role="presentation" class="disabled"><a href="/bk/officials/index">ค้นหาข้อมูลอาจารย์</a></li>
      </div></div></div>
<div class="col-sm-1 col-md-3"><div class="thumbnail">
      <img src="https://www.picz.in.th/images/2017/12/14/41825a62fe3c7319b.jpg" alt="41825a62fe3c7319b.jpg" border="0" />
      <div class="caption">
        <h3>วิชาเรียน</h3>
        <p>รายละเอียดวิชาที่เปิดสอนทั้งหมด</p>
		<br>
         <li role="presentation" class="disabled"><a href="/bk/subjects">ค้นหาข้อมูลวิชาที่เปิดสอน</a></li>
      </div></div></div>
<div class="col-sm-1 col-md-3"><div class="thumbnail">
      <a href="https://www.picz.in.th/image/dXdjRD"><img src="https://www.picz.in.th/images/2017/12/14/1402e2bbb4f67a05c.jpg" alt="1402e2bbb4f67a05c.jpg" border="0" /></a>
      <div class="caption">
        <h3>ชมรม</h3>
        <p>รายละเอียดกิจกรรมนอกเวลาเรียนของนักเรียน</p>
		<br>
         <li role="presentation" class="disabled"><a href="/bk/clubs">ค้นหาข้อมูลชมรม</a></li>
      </div></div></div>
<div class="col-sm-1 col-md-3"><div class="thumbnail">
      <img src="https://www.picz.in.th/images/2017/12/14/Untitled-4.jpg" alt="Untitled-4.jpg" border="0" />
      <div class="caption">
        <h3>ตารางเรียน</h3>
        <p>รายละเอียดข้อมูลตารางเรียนของนักเรียน</p>
		<br>
        <li role="presentation" class="disabled"><a href="/bk/table">ค้นหาตารางเรียน</a></li>
      </div></div></div>
<div class="col-sm-1 col-md-3"><div class="thumbnail">
      <img src="https://www.picz.in.th/images/2017/12/14/Untitled-5.jpg" alt="Untitled-5.jpg" border="0" />
      <div class="caption">
        <h3>ตารางสอบ</h3>
        <p>รายละเอียดข้อมูลตารางสอบของนักเรียน</p>
		<br>
        <li role="presentation" class="disabled"><a href="/bk/searchexam">ค้นหาตารางสอบ</a></li>
      </div></div></div>
<div class="col-sm-1 col-md-3"><div class="thumbnail">
      <img src="https://www.picz.in.th/images/2017/12/14/Untitled-2ac329687027a1108.jpg" alt="Untitled-2ac329687027a1108.jpg" border="0" />
      <div class="caption">
        <h3>ผลการเรียน</h3>
        <p>ผลการเรียนทุกภาคการศึกษาของนักเรียน</p>
		<br>
        <li role="presentation" class="disabled"><a href="/bk/score">ค้นหาผลการเรียน</a></li>
      </div></div></div>




</div>


</div>


@endsection
