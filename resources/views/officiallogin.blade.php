
@extends('layouts.app')
<!DOCTYPE html>
@section('content')


<center><div class="page-header ">
<h2>เข้าสู่ระบบ</h2>
</div>
  <center>
	<form action='/official/login' method="post">
	<table>
	<tr>
		<td width="25%" align="right">Username : </td>
		<td><input type="text" name="username"></td>
	<tr>
	<tr>
		<td width="25%" align="right">Password : </td>
		<td><input type="password" name="password"></td>
	</tr>
	</table>
	<br>
	<input class="btn btn-danger"type="submit" name="login" value="เข้าสู่ระบบ">
	</form>
	<br>
	<form  action="/home"><input class="btn" type="submit" value="กลับ"></form>
	</center>
</center>	

@endsection