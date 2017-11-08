<!DOCTYPE html>
<html>
<head>
<title>Search score</title>
</head>
<body>

<h1><center>Search Score</center></h1>

<form action="score.blade.php" method="get">
<center>
<table>
<tr>
	<td width="25%" align="right"><label for="id">รหัสนักเรียน:</label></td>
	<td><input type="text" name="id" value=""></td>
	<td width="25%"><input type="submit" name="search" value="ค้นหา"></td>
</tr>
</table>  
</center>
</form>
<br>
<center>
	<form action="/home"><input type="submit" value="Back"></form>
</center>
  

</body>
</html>