<!DOCTYPE html>
<html>
<head>
<title>Search score</title>
</head>
<body>
<form action="score.blade.php" method="get" name="search" target="_self" id="search">
  <label for="keyword">รหัสนักเรียน:&nbsp;&nbsp;&nbsp;</label>
  <input type="text" name="keyword" id="keyword" value="<?php echo($keyword)?>">

 </form>
 <br>
<form action="score.blade.php" method="get" name="searcht" target="_self" id="searcht">
<label for="keyword">ภาคการศึกษา:&nbsp;&nbsp;&nbsp;</label>
  <input type="text" name="keyword" id="keyword" value="<?php echo($keyword)?>">
  <br>
  <br>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit" name="button" id="button" value="ค้นหา">
</form>

</body>
</html>