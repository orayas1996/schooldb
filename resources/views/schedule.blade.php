<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Schedule</title>
</head>
  <?php $var = 1; ?>
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
    <?php $var = 1; ?>
    @foreach ($mon as $tu)
      @for (; $var <= 8; $var++)
        @if ( $tu->period === $var)
          <td>
          <center>
          {{$tu->subject}}<br>
          <font size="-1">{{$tu->place}}</font>
          </center>
          </td>
            <?php $var++; ?>
          @break;
        @else
          @if ( $tu->period > $var)
          <td>
          <center>
          ว่าง
          </center>
          </td>
          @endif
        @endif
      @endfor
    @endforeach
      @for(;$var <= 8; $var++)
      <td>
      <center>
      ว่าง
      </center>
      </td>
      @endfor
  </tr>
  <tr>
    <td align="center" valign="middle" bgcolor="#FF9999">อังคาร</td>
    <?php $var = 1; ?>
    @foreach ($tue as $tu)
      @for (; $var <= 8; $var++)
        @if ( $tu->period === $var)
          <td>
          <center>
          {{$tu->subject}}<br>
          <font size="-1">{{$tu->place}}</font>
          </center>
          </td>
            <?php $var++; ?>
          @break;
        @else
          @if ( $tu->period > $var)
          <td>
          <center>
          ว่าง
          </center>
          </td>
          @endif
        @endif
      @endfor
    @endforeach
      @for(;$var <= 8; $var++)
      <td>
      <center>
      ว่าง
      </center>
      </td>
      @endfor
  </tr>
  <tr>
    <td align="center" valign="middle" bgcolor="#FF9999">พุธ</td>
    <?php $var = 1; ?>
    @foreach ($wed as $tu)
  		@for (; $var <= 8; $var++)
        @if ( $tu->period === $var)
  				<td>
  				<center>
  				{{$tu->subject}}<br>
  				<font size="-1">{{$tu->place}}</font>
  				</center>
  				</td>
            <?php $var++; ?>
          @break;
  			@else
          @if ( $tu->period > $var)
  				<td>
  				<center>
  				ว่าง
  				</center>
  				</td>
          @endif
  			@endif
  		@endfor
  	@endforeach
      @for(;$var <= 8; $var++)
      <td>
      <center>
      ว่าง
      </center>
      </td>
      @endfor
  </tr>
  <tr>
    <td align="center" valign="middle" bgcolor="#FF9999">พฤหัส</td>
    <?php $var = 1; ?>
    @foreach ($thu as $tu)
  		@for (; $var <= 8; $var++)
        @if ( $tu->period === $var)
  				<td>
  				<center>
  				{{$tu->subject}}<br>
  				<font size="-1">{{$tu->place}}</font>
  				</center>
  				</td>
            <?php $var++; ?>
          @break;
  			@else
          @if ( $tu->period > $var)
  				<td>
  				<center>
  				ว่าง
  				</center>
  				</td>
          @endif
  			@endif
  		@endfor
  	@endforeach
      @for(;$var <= 8; $var++)
      <td>
      <center>
      ว่าง
      </center>
      </td>
      @endfor
  </tr>
  <tr>
    <td align="center" valign="middle" bgcolor="#FF9999">ศุกร์</td>
    <?php $var = 1; ?>
    @foreach ($fri as $tu)
      @for (; $var <= 8; $var++)
        @if ( $tu->period === $var)
          <td>
          <center>
          {{$tu->subject}}<br>
          <font size="-1">{{$tu->place}}</font>
          </center>
          </td>
            <?php $var++; ?>
          @break;
        @else
          @if ( $tu->period > $var)
          <td>
          <center>
          ว่าง
          </center>
          </td>
          @endif
        @endif
      @endfor
    @endforeach
      @for(;$var <= 8; $var++)
      <td>
      <center>
      ว่าง
      </center>
      </td>
      @endfor
  </tr>
</table>
</body>
</html>
