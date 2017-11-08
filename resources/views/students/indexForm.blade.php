<!DOCTYPE html>
<html>
<head>
	<title>Student Index</title>
</head>
<body>
<center>
	<h1>All Students</h1>
	<table border=1><tr bgcolor"#FF0000">
		<td width="100"><center>student_id</center></td>
		<td width="150"><center>student_ssn</center></td>
		<td width="200"><center>student_name</center></td>
		<td width="30"><center>sex</center></td>
		<td width="30"><center>age</center></td>
		<td width="200"><center>address</center></td>
		<td width="30"><center>grade</center></td>
		<td width="30"><center>room</center></td>
		<td width="50"><center>Edit</center></td>
		<td width="50"><center>Delete</center></td>
		<td width="50"><center>Details</center></td>
	</tr>
    
        @foreach ($students as $student)
			<tr>
				<td><center>{{$student->id}}</center></td>
				<td><center>{{$student->ssn}}</center></td>
				<td>{{$student->name}}</td>
				<td><center>{{$student->sex}}</center></td>
				<td><center>{{$student->age}}</center></td>
				<td>{{$student->address}}</td>
				<td><center>{{$student->grade}}</center></td>
				<td><center>{{$student->room}}</center></td>
				<td><center><a href="/student/{{$student->id}}/editpage">Click</a></center></td>
				<td><center><a href="/student/{{$student->id}}/delete">Click</a></center></td>
				<td><center><a href="/student/{{$student->id}}/detail">Click</a></center></td>
			</tr>
		@endforeach
	</table><br>
	</table><br>
	<form action="/students/insertpage"><input type="submit" value="Add Student"></form>
	<br>
	</form><form action="/students/searchstudent"><input type="submit" value="Back"></form>

</body>
</html>