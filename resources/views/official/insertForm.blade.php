<!DOCTYPE html>
<html>
<head>
	<title>Insert Form</title>
</head>
<body>

	<form action='/officials/save' method="post">
	<table>
		<tr>
			<td>Official_ssn : </td>
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
			<td>Address : </td>
			<td><input type="text" name="address"></td>
		</tr>
		<tr>
			<td>TeacherRoom : </td>
			<td><input type="text" name="teacherroom"></td>
		</tr>
		<tr>
			<td>Club : </td>
			<td><input type="text" name="club"></td>
		</tr>
		<tr>
			<td><input type="submit" name="submit" value="Add"></td>
		</tr>
	</table>
	</form>
	<form action="/officials/index">
    <input type="submit" value="Back">
	</form>

</body>
</html>
