<!DOCTYPE html>
<html>
<head>
	<title>Insert Form</title>
</head>
<body>
<center>
<h1>Adding Club</h1>

	<form action='/clubs/save' method="post">
	<table>
		<tr>
			<td align="right">ClubID : </td>
			<td><input type="text" name="id"></td>
		</tr>
		<tr>
			<td align="right">ClubName : </td>
			<td><input type="text" name="name"></td>
		</tr>
	</table>
	<br>
	<td><input type="submit" name="submit" value="Add"></td>
	<br><br>
	</form>
	<form action="/clubs">
    <input type="submit" value="Back">
	</form>

</body>
</html>