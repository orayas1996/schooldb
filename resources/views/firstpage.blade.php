@extends('layouts.app')
<!DOCTYPE html>
@section('content')
<div>

<form class="navbar-form navbar-right" role="search">
  <div class="form-group">
    <input type="text" class="form-control" placeholder="Search">
  </div>
  <button type="submit" class="btn btn-default">ค้นหา</button>
</form>
<!------------------------------------------------------------->

<div class="page-header glyphicon glyphicon-heart">
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
        <h3>ตารางเรียน</h3>
        <p>รายละเอียดตารางสอนของนักเรียน</p>
		<br>
         <li role="presentation" class="disabled"><a href="/table">ค้นหาข้อมูลตารางสอน</a></li>
      </div></div></div>
<div class="col-sm-1 col-md-3"><div class="thumbnail">
      <img src="http://www.mx7.com/i/250/xnxdER.jpg" alt="">
      <div class="caption">
        <h3>ผลการเรียน</h3>
        <p>รายละเอียดข้อมูลผลการเรียนทุกภาคการศึกษาของนักเรียน</p>
		<br>
        <li role="presentation" class="disabled"><a href="/score">ค้นหาข้อมูลผลการเรียน</a></li>
      </div></div></div>
	  
	  
</div>



</div>

@endsection
