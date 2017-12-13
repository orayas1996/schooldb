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
			return view('back.firstpage',[
			'title'=> 'School']);
		}
		
		public function ghomepage()
		{
			return view('firstpage',[
			'title'=> 'School']);
		}
		
		public function searchscore()
		{
			return view('back.score.searchscore',[
			'title'=>'Score']);
		}
		
		public function gsearchscore()
		{
			return view('score.searchscore',[
			'title'=>'Score']);
		}
		
		public function searchtable()
		{
			return view('back.schedule.searchtable',[
			'title'=>'Table']);
		}
		
		public function gsearchtable()
		{
			return view('schedule.searchtable',[
			'title'=>'Table']);
		}
		
		public function loginpage()
		{
			return view('login.officiallogin',['title'=>'loginpage']);
		}
		
        public function checkloginpage()
		{
			return view('login.checklogin',['title'=>'checkloginpage']);
		}
		
		public function searchsubject()
		{
			return view('back.subjects.search',[
			'title'=> 'subject']);
		}
		
		public function gsearchsubject()
		{
			return view('subjects.search',[
			'title'=> 'subject']);
		}
		
		public function searchexam()
		{
			return view('back.schedule.searchexam',[
			'title'=> 'exam']);
		}
		
		public function gsearchexam()
		{
			return view('schedule.searchexam',[
			'title'=> 'exam']);
		}
		
		
	}