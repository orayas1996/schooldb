<!DOCTYPE html>
<html>
<head>
	<title>Official Index</title>
</head>
<body>
<center>
	<h1>All Officials</h1>
	<table border=2><tr bgcolor"#FF0000";>
		<th width="150"><center>ssn</center></th>
		<th width="200"><center>name</center></th>
		<th width="30"><center>sex</center></th>
		<th width="200"><center>address</center></th>
		<th width="100"><center>teacherroom</center></th>
		<th width="60"><center>club</center></th>
		<th width="50"><center>Edit</center></th>
		<th width="50"><center>Delete</center></th>
		<th width="50"><center>Details</center></th>
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