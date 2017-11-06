<!DOCTYPE html>
<html>
<head>
<title>Search score</title>
</head>
<body>

<h1><center>Search Score</center></h1>

<form action="score.blade.php" method="get" name="search" target="_self" id="search">
<center>
<table>
<tr>
	<td><label for="keyword">รหัสนักเรียน:</label></td>
	<td><input type="text" name="keyword" id="keyword" value=""></td>
</tr>
<tr>
	<td><label for="keyword">ภาคการศึกษา:</label></td>
	<td><input type="text" name="keyword" id="keyword" value=""></td>
</tr>
</table>  
</center>
  <br>
  
<center>
	<input type="submit" name="button" id="button" value="ค้นหา"></form>
</center><br>
<center>
	<form action="/home"><input type="submit" value="Back"></form>
</center>
  

</body>
</html>