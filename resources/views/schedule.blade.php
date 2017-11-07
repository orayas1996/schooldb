<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Schedule</title>
</head>

<body>
<table width="907" height="311" cellpadding="9" border=1>
  <caption>
    ตารางเรียน
  </caption>
  <tr>
    <td width="57" align="center" valign="middle" bgcolor="#FF9999">วัน/เวลา</td>
    <td width="85">08.00-09.00</td>
    <td width="85">09.00-10.00</td>
    <td width="85">10.00-11.00</td>
    <td width="85">11.00-12.00</td>
    <td width="85">12.00-13.00</td>
    <td width="85">13.00-14.00</td>
    <td width="85">14.00-15.00</td>
    <td width="85">15.00-16.00</td>
  </tr>
  <tr>
    <td align="center" valign="middle" bgcolor="#FF9999">จันทร์</td>
	@foreach ($ccs as $cc)
    <td><center>{{$cc->subject}}</center></td>
	@endforeach
  </tr>
  <tr>
    <td align="center" valign="middle" bgcolor="#FF9999">อังคาร</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="center" valign="middle" bgcolor="#FF9999">พุธ</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="center" valign="middle" bgcolor="#FF9999">พฤหัส</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="center" valign="middle" bgcolor="#FF9999">ศุกร์</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>