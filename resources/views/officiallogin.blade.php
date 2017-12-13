@extends('layouts.app')
<!DOCTYPE html>
@section('content')

<p class="navbar-text navbar-right"><a href="/officials/login" class="navbar-link">Log in</a></p>
<center><div class="page-header ">
<h2>เข้าสู่ระบบ</h2>
</div>
  <center>
	<form action='/officials/checklogin' method="post">
	<table>
	<tr>
		<td width="25%" align="right">Username:</td>
		<td><input type="text" name="textUsername" id="textUsername"></td>
	<tr>
	</table>
	<br>
	<table>
	<tr>
		<td width="25%" align="right">&nbsp;Password:</td>
		<td><input type="password" name="textPassword" id="textPassword"></td>
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
