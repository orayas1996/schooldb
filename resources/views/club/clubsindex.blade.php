<!DOCTYPE html>
<html>
<head>
	<title>Club Index</title>
</head>
<body>
<center>
	<h1>All Clubs</h1>
	<table border=1><tr bgcolor"#FF0000">
		<th width="100"><center>Club_ID</center></th>
		<th width="150"><center>Club_name</center></th>
		<th width="50"><center>Edit</center></th>
		<th width="50"><center>Delete</center></th>
		<th width="50"><center>Details</center></th>
	</tr>
    
        @foreach ($clubs as $club)
			<tr>
				<td><center>{{$club->id}}</center></td>
				<td><center>{{$club->name}}</center></td>
				<td><center><a href="/club/{{$club->id}}/editpage">Click</a></center></td>
				<td><center><a href="/club/{{$club->id}}/delete">Click</a></center></td>
				<td><center><a href="/club/{{$club->id}}/detail">Click</a></center></td>
			</tr>
		@endforeach
	</table><br>
	</table><br>
	<form action="/clubs/insertpage"><input type="submit" value="Add Club"></form>
	<br>
	</form><form action="/home"><input type="submit" value="Back"></form>

</body>
</html>