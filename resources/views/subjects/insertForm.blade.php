<!DOCTYPE html>
<html>
<head>
	<title>Insert Form</title>
</head>
<body>

	<form action='/subjects/save' method="post">
	<table>
		<tr>
			<td>SubjectID : </td>
			<td><input type="text" name="id"></td>
		</tr>
		<tr>
			<td>Name : </td>
			<td><input type="text" name="name"></td>
		</tr>
		<tr>
			<td>Grade : </td>
			<td><input type="text" name="grade"></td>
		</tr>
		<tr>
			<td>Exam_Date : </td>
			<td><input type="text" name="time"></td>
		</tr>
		<tr>
			<td>Year : </td>
			<td><input type="number" name="year"></td>
		</tr>
		<tr>
			<td>Teacher : </td>
			<td><input type="text" name="sj_teacher"></td>
		</tr>
		<tr>
			<td>Details : </td>
			<td><input type="text" name="detail"></td>
		</tr>
		<tr>
			<td><input type="submit" name="submit" value="Add"></td>
		</tr>
	</table>
	</form>
	<form action="/subjects/index">
    <input type="submit" value="Back">
	</form>

</body>
</html>