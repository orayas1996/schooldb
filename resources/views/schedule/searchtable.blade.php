@extends('layouts.app')
<!DOCTYPE html>
@section('content')
<div>

<div class="page-header ">
  <h2>ค้นหาตารางเรียน</h2>
</div>
  <br>
  <br>

<div align='center'>
<h3>มัธยมศึกษาปีที่1</h3>
<ol class="breadcrumb">
  <li><a href="/schedule/1/1">ห้อง1</a></li>
  <li><a href="/schedule/1/2">ห้อง2</a></li>
  <li><a href="/schedule/1/3">ห้อง3</a></li>
  <li><a href="/schedule/1/4">ห้อง4</a></li>
  <li><a href="/schedule/1/5">ห้อง5</a></li>
</ol>
</div>

<br>

<div align='center'>
<h3>มัธยมศึกษาปีที่2</h3>
<ol class="breadcrumb">
  <li><a href="/schedule/2/1">ห้อง1</a></li>
  <li><a href="/schedule/2/2">ห้อง2</a></li>
  <li><a href="/schedule/2/3">ห้อง3</a></li>
  <li><a href="/schedule/2/4">ห้อง4</a></li>
  <li><a href="/schedule/2/5">ห้อง5</a></li>
</ol>
</div>
	
<br>

<div align='center'>
<h3>มัธยมศึกษาปีที่3</h3>
<ol class="breadcrumb">
  <li><a href="/schedule/3/1">ห้อง1</a></li>
  <li><a href="/schedule/3/2">ห้อง2</a></li>
  <li><a href="/schedule/3/3">ห้อง3</a></li>
  <li><a href="/schedule/3/4">ห้อง4</a></li>
  <li><a href="/schedule/3/5">ห้อง5</a></li>
</ol>
</div>

<br>
<center>
<form action="/home"><input class="btn" type="submit" value="กลับ">
</form>
</center>

<div>

@endsection