@extends('layouts.app')
<!DOCTYPE html>
@section('content')

  <?php $var = 1; ?>

<center>
<br>
<br>
<table class="table table-striped" width="907" height="311" cellpadding="9" border=1>
  <caption>
    <h2><center>ตารางเรียน ชั้น ม.<?php echo $grade ?>/<?php echo $room ?></center></h2>
  </caption>
  <tr>
    <td width="85" align="center" valign="middle" bgcolor="#FF9999">วัน/เวลา</td>
    <td width="85"><center>08.00-09.00</center></td>
    <td width="85"><center>09.00-10.00</center></td>
    <td width="85"><center>10.00-11.00</center></td>
    <td width="85"><center>11.00-12.00</center></td>
    <td width="85"><center>12.00-13.00</center></td>
    <td width="85"><center>13.00-14.00</center></td>
    <td width="85"><center>14.00-15.00</center></td>
    <td width="85"><center>15.00-16.00</center></td>
  </tr>

  <tr>
    <td align="center" valign="middle" bgcolor="#FF9999">จันทร์</td>
    <?php $var = 1; ?>
    @foreach ($mon as $p)
      @for (; $var <= 8; $var++)
        @if ( $p->period === $var)
          <th>
          <center>
          {{$p->subject}}<br>
          <font size="-1">{{$p->place}}</font>
          </center>
          </th>
            <?php $var++; ?>
          @break;
        @else
          @if ( $p->period > $var)
          <td>
          <center>
			ว่าง
		  <br><font size="-1">-</font>
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
	  <br><font size="-1">-</font>
      </center>
      </td>
      @endfor
  </tr>
  <tr>
    <td align="center" valign="middle" bgcolor="#FF9999">อังคาร</td>
    <?php $var = 1; ?>
    @foreach ($tue as $p)
      @for (; $var <= 8; $var++)
        @if ( $p->period === $var)
          <th>
          <center>
          {{$p->subject}}<br>
          <font size="-1">{{$p->place}}</font>
          </center>
          </th>
            <?php $var++; ?>
          @break;
        @else
          @if ( $p->period > $var)
          <td>
          <center>
			ว่าง
			<br><font size="-1">-</font>
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
	  <br><font size="-1">-</font>
      </center>
      </td>
      @endfor
  </tr>
  <tr>
    <td align="center" valign="middle" bgcolor="#FF9999">พุธ</td>
    <?php $var = 1; ?>
    @foreach ($wed as $p)
  		@for (; $var <= 8; $var++)
        @if ( $p->period === $var)
  				<th>
  				<center>
  				{{$p->subject}}<br>
  				<font size="-1">{{$p->place}}</font>
  				</center>
  				</th>
            <?php $var++; ?>
          @break;
  			@else
          @if ( $p->period > $var)
  				<td>
  				<center>
  				ว่าง
				<br><font size="-1">-</font>
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
	  <br><font size="-1">-</font>
      </center>
      </td>
      @endfor
  </tr>
  <tr>
    <td align="center" valign="middle" bgcolor="#FF9999">พฤหัส</td>
    <?php $var = 1; ?>
    @foreach ($thu as $p)
  		@for (; $var <= 8; $var++)
        @if ( $p->period === $var)
  				<th>
  				<center>
  				{{$p->subject}}<br>
  				<font size="-1">{{$p->place}}</font>
  				</center>
  				</th>
            <?php $var++; ?>
          @break;
  			@else
          @if ( $p->period > $var)
  				<td>
  				<center>
  				ว่าง
				<br><font size="-1">-</font>
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
	 <br><font size="-1">-</font>
      </center>
      </td>
      @endfor
  </tr>
  <tr>
    <td align="center" valign="middle" bgcolor="#FF9999">ศุกร์</td>
    <?php $var = 1; ?>
    @foreach ($fri as $p)
      @for (; $var <= 8; $var++)
        @if ( $p->period === $var)
          <th>
          <center>
          {{$p->subject}}<br>
          <font size="-1">{{$p->place}}</font>
          </center>
          </th>
            <?php $var++; ?>
          @break;
        @else
          @if ( $p->period > $var)
          <td>
          <center>
			ว่าง
		  <br><font size="-1">-</font>
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
	  <br><font size="-1">-</font>
      </center>
      </td>
      @endfor
  </tr>
</table>
<br>
</form>
	<form action="/bk/table">
    <input class="btn" type="submit" value="กลับ">
	</form>
@endsection
