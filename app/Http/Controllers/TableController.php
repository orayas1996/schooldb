<?php

	namespace App\Http\Controllers;
	
	use Illuminate\Http\Request;
	use Illuminate\Support\Facades\DB;
	
	class TableController extends Controller
	{
		public function search()
		{
			return view('schedule');
		}
	}