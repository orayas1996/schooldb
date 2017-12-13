@extends('layouts.app')
<!DOCTYPE html>
@section('content')


<center><div class="page-header ">
<h2>ผลการเรียน</h2>
</div>
<table>
  <tr>
    <td width="30" height="42" align="center" valign="middle">ชื่อ:</td>
    <td>&nbsp;{{$student->name}}</td>
  </tr>
</table>
<br>
  <table class="table table-striped" border=2>
  <tr>
    <td align="center" valign="middle" rowspan="{{$scores1->count()+1}}" width="200" bgcolor="#F5F5F5">มัธยมศึกษาปีที่ 1</td>
	<th align="center" valign="middle" width="150" bgcolor="lightgray"><center>รายวิชา
	</center></th>
	<th align="center" valign="middle" bgcolor="lightgray"><center>ผลการเรียน
    </center></th>	
  </tr>
	@foreach ($scores1 as $scr)
	<tr>
		<td bgcolor="white"><center>{{$scr->subject}}</center></td>
		<td bgcolor="white"><center>{{$scr->totalscore}}</center></td>
	</tr>
	@endforeach
  <tr>
    <td align="center" valign="middle" rowspan="{{$scores2->count()+1}}" width="200" bgcolor="#F5F5F5">มัธยมศึกษาปีที่ 2</td>
	<th align="center" valign="middle" width="150" bgcolor="lightgray"><center>รายวิชา
	</center></th>
	<th align="center" valign="middle" bgcolor="lightgray"><center>ผลการเรียน
    </center></th>	
  </tr>
  @foreach ($scores2 as $scr)
	<tr>
		<td bgcolor="white"><center>{{$scr->subject}}</center></td>
		<td bgcolor="white"><center>{{$scr->totalscore}}</center></td>
	</tr>
	@endforeach
	<tr>
    <td align="center" valign="middle" rowspan="{{$scores3->count()+1}}" width="200" bgcolor="#F5F5F5">มัธยมศึกษาปีที่ 3</td>
	<th align="center" valign="middle" width="150" bgcolor="lightgray"><center>รายวิชา
	</center></th>
	<th align="center" valign="middle" bgcolor="lightgray"><center>ผลการเรียน
    </center></th>	
  </tr>
  @foreach ($scores3 as $scr)
	<tr>
		<td bgcolor="white"><center>{{$scr->subject}}</center></td>
		<td bgcolor="white"><center>{{$scr->totalscore}}</center></td>
	</tr>
	@endforeach
	<tr>
		<th bgcolor="#F5F5F5"><center>คะแนนจิตพิสัย</center></th>
		<td colspan="2" align="center" valign="middle" bgcolor="white">{{$student->behave_score}}</td>
	</tr>
</table>
</center>

<br>
<center>
<form action="/score">
    <input class="btn" type="submit" value="กลับ">
	</form>
</center>

@endsection