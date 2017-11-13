<?php

	namespace App\Http\Controllers;
	
	use Illuminate\Http\Request;
	use Illuminate\Support\Facades\DB;

	class PageController extends Controller
	{
		public function homepage()
		{
			return view('firstpage',[
			'title'=> 'School']);
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