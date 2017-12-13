@extends('layouts.app')
<!DOCTYPE html>
@section('content')
<p class="navbar-text navbar-right"><a href="/home" class="navbar-link">Log Out</a></p>
<div>
<div class="page-header ">
  <h2>ค้นหาวิชาที่เปิดสอน</h2>
</div>
  <br>
  <br>

<center>

<div class="list-group">
  <a href="/bk/subjects/index/1" class="list-group-item list-group-item-success">มัธยมศึกษาปีที่1</a>
  <a href="/bk/subjects/index/2" class="list-group-item list-group-item-info">มัธยมศึกษาปีที่2</a>
  <a href="/bk/subjects/index/3" class="list-group-item list-group-item-danger">มัธยมศึกษาปีที่3</a>

</div>
	<br>
	<br>
	<form action="/bk/subjects/index"><input class ="btn btn-primary " type="submit" value="วิชาทั้งหมด"></form>
	<br>
	<form action="/bk/home"><input  class="btn " type="submit" value="กลับ"></form>
</form>
</div>

@endsection
