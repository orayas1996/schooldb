<!DOCTYPE html>
<html>
<head>
	<title>Official Index</title>
</head>
<body>

	<h1>All Officals</h1>
	<table border=2><tr bgcolor"#FF0000";>
		<td><center>ssn</center></td>
		<td><center>name</center></td>
		<td><center>sex</center></td>
		<td><center>address</center></td>
		<td><center>teacherroom</center></td>
		<td><center>club</center></td>
		<td><center>Edit</center></td>
		<td><center>Delete</center></td>
		<td><center>Details</center></td>
	</tr>

        @foreach ($officials as $official)
			<tr>
				<td><center>{{$official->ssn}}</center></td>
				<td>{{$official->name}}</td>
				<td><center>{{$official->sex}}</center></td>
				<td>{{$official->address}}</td>
				<td><center>{{$official->teacherroom}}</center></td>
				<td><center>{{$official->club}}</center></td>
				<td><center><a href="/official/{{$official->ssn}}/editpage">Click</a></center></td>
				<td><center><a href="/official/{{$official->ssn}}/delete">Click</a></center></td>
				<td><center><a href="/official/{{$official->ssn}}/detail">Click</a></center></td>
			</tr>
		@endforeach
	</table><br>
	</table><br>
	<form action="/officials/insertpage"><input type="submit" value="Add Official"></form>
	<br>
	</form><form action="/home"><input type="submit" value="Back"></form>

</body>
</html>