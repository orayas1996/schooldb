<!DOCTYPE html>
<html>
<head>
	<title>Insert Form</title>
</head>
<body>

	<form action='/students/save' method="post">
	<table>
		<tr>
			<td>StudentID : </td>
			<td><input type="text" name="id"></td>
		</tr>
		<tr>
			<td>SSN : </td>
			<td><input type="text" name="ssn"></td>
		</tr>
		<tr>
			<td>Name : </td>
			<td><input type="text" name="name"></td>
		</tr>
		<tr>
			<td>Sex : </td>
			<td><input type="text" name="sex"></td>
		</tr>
		<tr>
			<td>Age : </td>
			<td><input type="number" name="age"></td>
		</tr>
		<tr>
			<td>Address : </td>
			<td><input type="text" name="address"></td>
		</tr>
		<tr>
			<td>Grade : </td>
			<td><input type="text" name="grade"></td>
		</tr>
		<tr>
			<td>Room : </td>
			<td><input type="text" name="room"></td>
		</tr>
		<tr>
			<td><input type="submit" name="submit" value="Add"></td>
		</tr>
	</table>
	</form>
	<form action="/students/index">
    <input type="submit" value="Back">
	</form>

</body>
</html>