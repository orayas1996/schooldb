<!DOCTYPE html>
<html>
<head>
	<title>Edit Form</title>
</head>
<body>

	<form action='/student/<?php echo $id; ?>/editsave' method="post">
	<table>
		<!--<tr>
			<td>StudentID : </td>
			<td><input type="text" name="id"></td>
		</tr>-->
		<tr>
			<td>SSN : </td>
			<td><input type="text" name="ssn" value="<?php echo $student->ssn; ?>"></td>
		</tr>
		<tr>
			<td>Name : </td>
			<td><input type="text" name="name" value="<?php echo $student->name; ?>"></td>
		</tr>
		<tr>
			<td>Sex : </td>
			<td><input type="text" name="sex" value="<?php echo $student->sex; ?>"></td>
		</tr>
		<tr>
			<td>Age : </td>
			<td><input type="number" name="age" value="<?php echo $student->age; ?>"></td>
		</tr>
		<tr>
			<td>Address : </td>
			<td><input type="text" name="address" value="<?php echo $student->address; ?>"></td>
		</tr>
		<tr>
			<td>Grade : </td>
			<td><input type="text" name="grade" value="<?php echo $student->grade; ?>"></td>
		</tr>
		<tr>
			<td>Room : </td>
			<td><input type="text" name="room" value="<?php echo $student->room; ?>"></td>
		</tr>
		<tr>
			<td><input type="submit" name="submit" value="Edit"></td>
		</tr>
	</table>
	</form>
	<form action="/students/index">
    <input type="submit" value="Back">
	</form>

</body>
</html>