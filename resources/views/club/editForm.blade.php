<!DOCTYPE html>
<html>
<head>
	<title>Edit Form</title>
</head>
<body>
<center>
<h1>Editing Club</h1>

	<form action='/club/<?php echo $id; ?>/editsave' method="post">
	<table>
		<!--<tr>
			<td>StudentID : </td>
			<td><input type="text" name="id"></td>
		</tr>-->
		<tr>
			<td>Name : </td>
			<td><input type="text" name="name"></td>
		</tr>
	</table>
	<br>
	<td><input type="submit" name="submit" value="Edit"></td>
	</form>
	<br>
	<form action="/clubs">
    <input type="submit" value="Back">
	</form>

</body>
</html>