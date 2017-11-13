<?php

	namespace App\Http\Controllers;
	
	use Illuminate\Http\Request;
	use Illuminate\Support\Facades\DB;
	use App\Classrooms;
	use App\Subjects;
	use App\Education;

	class PageController extends Controller
	{
		public function homepage()
		{
			return view('firstpage',[
			'title'=> 'School']);
		}	
		
		public function searchscore()
		{
			return view('score.searchscore');
		}
		
		public function searchtable()
		{
			return view('schedule.searchtable');
		}
		
		public function loginpage()
		{
			return view('officiallogin');
		}
		
		public function searchsubject()
		{
			return view('subjects.search');
		}
		
		
	}