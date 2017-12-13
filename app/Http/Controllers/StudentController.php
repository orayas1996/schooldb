<?php

	namespace App\Http\Controllers;
	
	use Illuminate\Http\Request;
	use App\Models\Student;
	use App\Students;
	use App\Subjects;
	use App\Scores;
	use Illuminate\Support\Facades\DB;
	use Illuminate\Database\Eloquent\ModelNotFoundException;
	
	class StudentController extends Controller
	{
		public function insertpage()
		{
			return view('students.insertForm',[
			'title'=>'Studentinsert']);
		}
		
		public function editpage($id)
		{
			$student = Students::findOrFail($id);
			return view('students.editForm',['title'=>'Studentedit'])->with('student',$student)->with('id',$id);
		}
		
		public function searchstudent()
		{
			return view('students.searchstudent',[
			'title'=> 'Student']);
		}
		
		public function searchscore(Request $request)
		{
			$id = $request->input('id');
			
			if(empty($id)) {
				echo "<br><br><center><h3>Student ID Cannot be empty!</h3><br>
				Searching Fail!<br><br>" ;
				echo"<form action=\"/score\">
				<input type=\"submit\" value=\"Back\">
				</form>";
			}
			
			else{
				
				try{
					$student = Students::findOrFail($id);
					
					$scores1 = DB::table('score')->where('student_id',$id)->where('year','1')->get();
					$scores2 = DB::table('score')->where('student_id',$id)->where('year','2')->get();
					$scores3 = DB::table('score')->where('student_id',$id)->where('year','3')->get();
			
					return view('score.graddetail',['title'=>'gradedetail', 
													'student'=>$student, 
													'scores1'=>$scores1, 
													'scores2'=>$scores2,
													'scores3'=>$scores3]);
					
				}
				catch(ModelNotFoundException $er){
					echo "<center><br><br><h3>Student Not Founded!</h3><br>
					Student ID must have 5-digits eg.00001 <br><br>
					<form action=\"/score\">
					<input type=\"submit\" value=\"Back\">
					</form>";
				}
			
				
			}
		}
		
		public function index()
		{
		    $students = Students::all();
			return view('students.indexForm', [
			'students' => $students
			],['title'=>'Studentindex']);
		}
		
		public function indexgrade($grade)
		{
			$students = Students::all()->where('grade',$grade);
			return view('students.indexForm', ['students' => $students],['title'=>'Studentgrade']);
		}
		
		public function indexgraderoom($grade, $room)
		{
			$students = Students::all()->where('grade',$grade)->where('room',$room);
			return view('students.indexForm', ['students' => $students],['title'=>'Studentroom']);
		}
		
		public function detail($id)
		{
			$student = Students::findOrFail($id);
			return view('students.studentdetail',['title'=>'Studentdetail'])->with('student',$student);
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
			
			if(empty($student->id)) {
				echo "<br><br><center><h3>ID Cannot be empty!</h3><br>
				Adding Fail!<br>" ;	
			}
			else{
				$student->save(); 
				echo "<br><br><center>Adding Success!";
			}
			echo"<form action=\"/students/index\">
			<input type=\"submit\" value=\"Go To Students\">
			</form>";
		}
		
		public function delete($id)
		{
			$student = Student::findOrFail($id);
			$student->delete();
			echo "<center>Delete Success!!";
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
			echo "<center>Edit Success!!";
			echo"<form action=\"/students/index\">
			<input type=\"submit\" value=\"Go To Students\">
			</form>";
		}
	}