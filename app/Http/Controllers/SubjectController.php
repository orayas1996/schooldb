<?php

	namespace App\Http\Controllers;
	
	use Illuminate\Http\Request;
	use App\Models\Subject;
	use App\Subjects;
	use App\Education;
	use Illuminate\Support\Facades\DB;
	
	class SubjectController extends Controller
	{
		public function index()
		{
		    $subjects = Subjects::all();
			return view('subjects.indexForm', [
			'subjects' => $subjects
			]);
		}
		
		public function search()
		{
			return view('subjects.search');
		}
		
		public function insertpage()
		{
			return view('subjects.insertForm');
		}
		
		public function editpage($id)
		{
			$subject = Subject::findOrFail($id);
			return view('subjects.editForm')->with('subject',$subject)->with('id',$id);
		}
		
		
		public function searchbygrade($grade)
		{
			$subjects = Subjects::all()->where('grade',$grade);
			return view('subjects.indexForm')->with('subjects',$subjects);
		}
		
		
		public function indexgrade($grade)
		{
			$subjects = Subjects::all()->where('grade',$grade);
			return view('subjects.indexForm', ['subjects' => $subjects]);
		}
		
		
		public function detail($id)
		{
			$subject = Subject::findOrFail($id);
			return view('subjects.detail')->with('subject',$subject)->with('id',$id);
		}
		
		public function save(Request $request)
		{
			$subject = new Subject;
			$subject->id=$request->input('id');
			$subject->name=$request->input('name');
			$subject->grade=$request->input('grade');
			$subject->time=$request->input('time');
			$subject->year=$request->input('year');
			$subject->sj_teacher=$request->input('sj_teacher');
			$subject->detail=$request->input('detail');
			if(empty($subject->id)) {
				echo "<br><br><center><h3>ID Cannot be empty!</h3><br>
				Adding Fail!<br>" ;	
			}
			else{
				$subject->save(); 
				echo "<center>Adding Success!";
			}
			
			echo"<form action=\"/subjects/index\">
			<input type=\"submit\" value=\"Go To Subjects\">
			</form>";
		}
		
		public function editsave(Request $request, $id)
		{
			$subject = Subject::findOrFail($id);
			//$student->id=$request->input('id');
			$subject->name=$request->input('name');
			$subject->grade=$request->input('grade');
			$subject->time=$request->input('time');
			$subject->year=$request->input('year');
			$subject->sj_teacher=$request->input('sj_teacher');
			$subject->detail=$request->input('detail');
			$subject->save();
			echo "<br><br><center>Edit Success!!<br>";
			echo"<form action=\"/subjects/index\">
			<input type=\"submit\" value=\"Go To Subjects\">
			</form>";
		}
		
		public function delete($id)
		{
			$subject = Subject::findOrFail($id);
			$subject->delete();
			echo "<br><br><center>Delete Success!!<br>";
			echo"<form action=\"/subjects/index\">
			<input type=\"submit\" value=\"Go To Subjects\">
			</form>";
		}
	
	}