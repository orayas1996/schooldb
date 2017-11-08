<?php

	namespace App\Http\Controllers;
	
	use Illuminate\Http\Request;
	use Illuminate\Support\Facades\DB;
	use App\Education;
	
	class TableController extends Controller
	{
		public function search()
		{
			return view('schedule');
		}
		
		public function table($grade, $room)
		{
			$mon = Education::all()->where('grade',$grade)->where('room',$room)->where('day',1)->sortBy('period');
			$tu = Education::all()->where('grade',$grade)->where('room',$room)->where('day',2)->sortBy('period');
			$wed = Education::all()->where('grade',$grade)->where('room',$room)->where('day',3)->sortBy('period');
			$thu = Education::all()->where('grade',$grade)->where('room',$room)->where('day',4)->sortBy('period');
			$fri = Education::all()->where('grade',$grade)->where('room',$room)->where('day',5)->sortBy('period');
			return view('schedule', ['mon' => $mon,
										'tu' => $tu,
										'wed' => $wed,
										'thu' => $thu,
										'fri' => $fri]);
		}
		
	}