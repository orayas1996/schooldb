<?php

	namespace App\Http\Controllers;
	
	use Illuminate\Http\Request;
	use App\Models\Student;
	use App\Students;
	use Illuminate\Support\Facades\DB;
	
	class StudentController extends Controller
	{
		public function insertpage()
		{
			return view('students.insertForm');
		}
		
		public function editpage($id)
		{
			return view('students.editForm')->with('id',$id);
		}
		
		public function searchstudent()
		{
			return view('students.searchstudent');
		}
		
		public function searchscore(Request $request)
		{
			$id = $request->input('id');
			$student = Students::findOrFail($id);
			return view('score.graddetail')->with('student',$student);
		}
		
		public function scoredetail($id)
		{
			$student = Students::findOrFail($id);
			return view('score.graddetail')->with('student', $student);
		}
		
		public function index()
		{
		    $students = Students::all();
			return view('students.indexForm', [
			'students' => $students
			]);
		}
		
		public function indexgrade($grade)
		{
			$students = Students::all()->where('grade',$grade);
			return view('students.indexForm', ['students' => $students]);
		}
		
		public function indexgraderoom($grade, $room)
		{
			$students = Students::all()->where('grade',$grade)->where('room',$room);
			return view('students.indexForm', ['students' => $students]);
		}
		
		public function detail($id)
		{
			$student = Students::findOrFail($id);
			return view('students.studentdetail')->with('student',$student);
		}
		
		public function save(Request $request)
		{
			$student = new Student;
			$student->id=$request->input('id');
			$student->ssn=$request->input('ssn');
			$student->name=$request->input('name');
			$student->sex=$request->input('sex');
			$student->age=$request->input('age');
			$student->address=$request->input('address');
			$student->room=$request->input('room');
			$student->grade=$request->input('grade');
			$student->save();
			
			echo "Add Success!!";
			echo"<form action=\"/students/index\">
			<input type=\"submit\" value=\"Go To Students\">
			</form>";
		}
		
		public function delete($id)
		{
			$student = Student::findOrFail($id);
			$student->delete();
			echo "Delete Success!!";
			echo"<form action=\"/students/index\">
			<input type=\"submit\" value=\"Go To Students\">
			</form>";
		}
		
		public function editsave(Request $request, $id)
		{
			$student = Student::findOrFail($id);
			//$student->id=$request->input('id');
			$student->ssn=$request->input('ssn');
			$student->name=$request->input('name');
			$student->sex=$request->input('sex');
			$student->age=$request->input('age');
			$student->address=$request->input('address');
			$student->room=$request->input('room');
			$student->grade=$request->input('grade');
			$student->save();
			echo "Edit Success!!";
			echo"<form action=\"/students/index\">
			<input type=\"submit\" value=\"Go To Students\">
			</form>";
		}
	}