<!DOCTYPE html>
<html>
<head>

<title>table</title>
</head>

<body>

<h1><center>ตารางเรียน</center></h1>
<form name="form1" method="post" action="">
<table width="100%" >
<tr>
<td width="36%">
<div align="right">&nbsp;&nbsp;มัธยมศึกษาปีที่4 :
<select name="Search2">
      <option value="room1" <? if($Search2=="room1"){ ?>selected<? }?>>ห้อง1</option>
      <option value="room2" <? if($Search2=="room2"){ ?>selected<? }?>>ห้อง2</option>
       <option value="room3" <? if($Search2=="room3"){ ?>selected<? }?>>ห้อง3</option>
        <option value="room4" <? if($Search2=="room4"){ ?>selected<? }?>>ห้อง4</option>
         <option value="room5" <? if($Search2=="room5"){ ?>selected<? }?>>ห้อง5</option>
   
</select></div>
</td>
<td width="64%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="submit" name="submit" value="Search"> 
</td>
</tr>
</table>
</form>
<br>
<form name="form1" method="post" action="">
<table width="100%" >
<tr>
<td width="36%">
<div align="right">มัธยมศึกษาปีที่5 :
<select name="Search2">
     <option value="room1" <? if($Search2=="room1"){ ?>selected<? }?>>ห้อง1</option>
      <option value="room2" <? if($Search2=="room2"){ ?>selected<? }?>>ห้อง2</option>
       <option value="room3" <? if($Search2=="room3"){ ?>selected<? }?>>ห้อง3</option>
        <option value="room4" <? if($Search2=="room4"){ ?>selected<? }?>>ห้อง4</option>
         <option value="room5" <? if($Search2=="room5"){ ?>selected<? }?>>ห้อง5</option>
   
</select></div>
</td>
<td width="64%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="submit" value="Search"> 
</td>
</tr>
</table>
</form>
<br>
<form name="form1" method="post" action="">
<table width="100%" >
<tr>
<td width="36%">
<div align="right">มัธยมศึกษาปีที่6 :
<select name="Search2">
      <option value="room1" <? if($Search2=="room1"){ ?>selected<? }?>>ห้อง1</option>
      <option value="room2" <? if($Search2=="room2"){ ?>selected<? }?>>ห้อง2</option>
       <option value="room3" <? if($Search2=="room3"){ ?>selected<? }?>>ห้อง3</option>
        <option value="room4" <? if($Search2=="room4"){ ?>selected<? }?>>ห้อง4</option>
         <option value="room5" <? if($Search2=="room5"){ ?>selected<? }?>>ห้อง5</option>
   
</select></div>
</td>
<td width="64%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="submit" value="Search"> 
</td>
</tr>
</table>
</form>
<?php
if($strSearch=="Y"){
     $sql="select * from tbl_student Where ".$Search2." like '%".$Search."%' "; 
}else{
     $sql="select * from tbl_student";
}

    $Qtotal = mysql_query($sql);
?>	

 
 
</body>
</html>