<?php

	namespace App\Http\Controllers;
	
	use Illuminate\Http\Request;
	use Illuminate\Support\Facades\DB;
	use App\Education;
	use App\Subjects;
	
	class TableController extends Controller
	{
		public function search()
		{
			return view('schedule.schedule');
		}
		
	
		
		public function table($grade, $room)
		{
			$mon = Education::all()->where('grade',$grade)->where('room',$room)->where('day',1)->sortBy('period');
			$tue = Education::all()->where('grade',$grade)->where('room',$room)->where('day',2)->sortBy('period');
			$wed = Education::all()->where('grade',$grade)->where('room',$room)->where('day',3)->sortBy('period');
			$thu = Education::all()->where('grade',$grade)->where('room',$room)->where('day',4)->sortBy('period');
			$fri = Education::all()->where('grade',$grade)->where('room',$room)->where('day',5)->sortBy('period');
			return view('schedule.schedule', ['mon' => $mon,
										'tue' => $tue,
										'wed' => $wed,
										'thu' => $thu,
										'fri' => $fri,
										'grade' => $grade,
										'room' => $room],['title'=>'scheduletable']);
		}
		
		public function examdetail($grade)
		{
			$subjects = Subjects::all()->where('grade',$grade)->sortBy('id');
			return view('schedule.examschedule',['title' =>'examdetail'])->with('subjects',$subjects)->with('grade',$grade);
		}
		
	}