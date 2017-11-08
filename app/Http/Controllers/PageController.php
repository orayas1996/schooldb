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
			return view('firstpage');
		}	
		
		public function searchscore()
		{
			return view('searchscore');
		}
		
		public function searchtable()
		{
			return view('searchtable');
		} 
		
		
	}