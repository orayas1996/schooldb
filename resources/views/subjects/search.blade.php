@extends('layouts.app')
<!DOCTYPE html>
@section('content')

<div>
<div class="page-header ">
  <h2>ค้นหาวิชาที่เปิดสอน</h2>
</div>
  <br>
  <br>

<center>
	
<div class="list-group">
  <a href="/subjects/index/1" class="list-group-item list-group-item-success">มัธยมศึกษาปีที่1</a>
  <a href="/subjects/index/2" class="list-group-item list-group-item-info">มัธยมศึกษาปีที่2</a>
  <a href="/subjects/index/3" class="list-group-item list-group-item-danger">มัธยมศึกษาปีที่3</a>
  
</div>

	<br>
	
	<br>
	<form action="/subjects/index"><input class ="btn btn-primary " type="submit" value="วิชาทั้งหมด"></form>
	<br>
	<form action="/home"><input  class="btn " type="submit" value="กลับ"></form>	
</form>
</div>

@endsection