<!DOCTYPE html>
<html>
<head>
<title>Officials Login</title>
</head>
<body>

	<center>
		<h1>OFFICIALS LOGIN</h1>
	<br>
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
	<input type="submit" name="login" value="Login">
	</form>
	<br>
	<form action="/home"><input type="submit" value="Back"></form>
</body>
</html>