<!DOCTYPE html>
<html>
<head>
	<title>Student Index</title>
</head>
<body>

	<h1>All Students</h1>
	<table border=2><tr bgcolor"#FF0000";>
		<td><center>student_id</center></td>
		<td><center>student_ssn</center></td>
		<td><center>student_name</center></td>
		<td><center>sex</center></td>
		<td><center>age</center></td>
		<td><center>address</center></td>
		<td><center>grade</center></td>
		<td><center>room</center></td>
		<td><center>Edit</center></td>
		<td><center>Delete</center></td>
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
			</tr>
		@endforeach
	</table><br>
	
<center><a href="/students/insertpage">ADD</a></
</body>
</html>