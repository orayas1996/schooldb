<!DOCTYPE html>
<p class="navbar-text navbar-right"><a href="/officials/login" class="navbar-link">Log in</a></p>
<html>
<head>
<title>grade index</title>

</head>
<body>
<h1><center>Student search</center></h1>
<form name="form1" method="post" action="">
	<center>
	<table>
	<tr>
		<td>มัธยมศึกษาปีที่1 :</td>
		<td><select name="Search1">
			<option value="room1" <? if($Search1=="room1"){ ?>selected<? }?>>ห้อง1</option>
			<option value="room2" <? if($Search1=="room2"){ ?>selected<? }?>>ห้อง2</option>
			<option value="room3" <? if($Search1=="room3"){ ?>selected<? }?>>ห้อง3</option>
			<option value="room4" <? if($Search1=="room4"){ ?>selected<? }?>>ห้อง4</option>
			<option value="room5" <? if($Search1  oom5"){ ?>selected<? }?>>ห้อง5</option>
		</select></td>
		<td><input type="submit" name="room1" value="Search"></td>
	</tr>
	</table>
	</center>
</form>
<br>
<form name="form2" method="post" action="">
	<center>
	<table>
	<tr>
		<td>มัธยมศึกษาปีที่2 :</td>
		<td><select name="Search2">
			<option value="room1" <? if($Search2=="room1"){ ?>selected<? }?>>ห้อง1</option>
			<option value="room2" <? if($Search2=="room2"){ ?>selected<? }?>>ห้อง2</option>
			<option value="room3" <? if($Search2=="room3"){ ?>selected<? }?>>ห้อง3</option>
			<option value="room4" <? if($Search2=="room4"){ ?>selected<? }?>>ห้อง4</option>
			<option value="room5" <? if($Search2=="room5"){ ?>selected<? }?>>ห้อง5</option>
		</select></td>
	<td><input type="submit" name="room2" value="Search"> </td>
	</tr>
	</table>
	</center>
</form>
<br>
<form name="form3" method="post" action="">
	<center>
	<table>
	<tr>
		<td>มัธยมศึกษาปีที่3 :</td>
		<td><select name="Search3">
			<option value="room1" <? if($Search2=="room1"){ ?>selected<? }?>>ห้อง1</option>
			<option value="room2" <? if($Search2=="room2"){ ?>selected<? }?>>ห้อง2</option>
			<option value="room3" <? if($Search2=="room3"){ ?>selected<? }?>>ห้อง3</option>
			<option value="room4" <? if($Search2=="room4"){ ?>selected<? }?>>ห้อง4</option>
			<option value="room5" <? if($Search2=="room5"){ ?>selected<? }?>>ห้อง5</option>
		</select></td>
	<td><input type="submit" name="room3" value="Search"> </td>
	</tr>
	</table>
	<center>
</form>
</body>
</html>
