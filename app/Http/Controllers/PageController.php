<?php

	namespace App\Http\Controllers;
	
	use Illuminate\Http\Request;
	use Illuminate\Support\Facades\DB;

	class PageController extends Controller
	{
		public function homepage()
		{
			return view('firstpage');
		}	
	}