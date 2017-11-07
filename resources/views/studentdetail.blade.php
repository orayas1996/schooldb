<!DOCTYPE html>
<html>
<head>
<title>student detail</title>
</head>
<body>
<h1><center>ข้อมูลนักเรียน</center></h1>

<table width="724" height="544">
  <tr align="right" valign="middle">
    <td height="223" colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td width="126" height="42" align="right" valign="middle">ชื่อ:</td>
    <td width="586">$name</td>
  </tr>
  <tr>
    <td height="33" align="right" valign="middle">รหัสนักเรียน:</td>
    <td><?php echo($student_id);?></td>
  </tr>
  <tr>
    <td height="30" align="right" valign="middle">เลขรหัสประชาชน:</td>
    <td>$ssn</td>
  </tr>
  <tr>
    <td height="40" align="right" valign="middle">เพศ:</td>
    <td>$sex</td>
  </tr>
  <tr>
    <td height="37" align="right" valign="middle">อายุ:</td>
    <td>$age</td>
  </tr>
  <tr>
    <td height="39" align="right" valign="middle">ที่อยู่:</td>
    <td>$address</td>
  </tr>
  <tr>
    <td height="39" align="right" valign="middle">ชั้นปี:</td>
    <td>$grade</td>
  </tr>
  <tr>
    <td height="39" align="right" valign="middle">ห้องเรียน:</td>
    <td>$room</td>
  </tr>
</table>



</body>
</html>