<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Schedule</title>
</head>

<body>
<table width="907" height="311" cellpadding="9" border=1>
  <caption>
    <h1>ตารางเรียน ชั้น ม.<?php echo $grade ?>/<?php echo $room ?></h1>
  </caption>
  <tr>
    <td width="85" align="center" valign="middle" bgcolor="#FF9999">วัน/เวลา</td>
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
	@foreach ($mon as $mm)
    <td>
	<center>
		{{$mm->subject}}<br>
		<font size="-1">{{$mm->place}}</font>
	</center>
	</td>
	@endforeach
  </tr>
  <tr>
    <td align="center" valign="middle" bgcolor="#FF9999">อังคาร</td>
	@foreach ($tue as $tu)
		@for ($i = 1; $i <= 8; $i++)
			@if ( $tu->period === $i)
				<td>
				<center>
				{{$tu->subject}}<br>
				<font size="-1">{{$tu->place}}</font>
				</center>
				</td>
				@break
			@else
				<td>
				<center>
				ว่าง
				</center>
				</td>
			@endif
		@endfor
	@endforeach
  </tr>
  <tr>
    <td align="center" valign="middle" bgcolor="#FF9999">พุธ</td>
    @foreach ($wed as $we)
    <td>
	<center>
		{{$we->subject}}<br>
		<font size="-1">{{$we->place}}</font>
	</center>
	</td>
	@endforeach
  </tr>
  <tr>
    <td align="center" valign="middle" bgcolor="#FF9999">พฤหัส</td>
    @foreach ($thu as $th)
    <td>
	<center>
		{{$th->subject}}<br>
		<font size="-1">{{$th->place}}</font>
	</center>
	</td>
	@endforeach
  </tr>
  <tr>
    <td align="center" valign="middle" bgcolor="#FF9999">ศุกร์</td>
    @foreach ($fri as $fr)
    <td>
	<center>
		{{$fr->subject}}<br>
		<font size="-1">{{$fr->place}}</font>
	</center>
	</td>
	@endforeach
  </tr>
</table>
</body>
</html>