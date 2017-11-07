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
		
		public function index()
		{
		    $students = Students::all();
			return view('students.indexForm', [
			'students' => $students
			]);
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
		public function studentdetail()
		{
		 $students = Students::all();
			
			echo "<h1>Student Details</h1>";
			echo "<table border=2>
			<tr><th><center>student_id</center></th></tr>
			<tr><th><center>student_ssn</center></th></tr>
			<tr><th><center>student_name</center></th></tr>
			<tr><th><center>sex</center></th></tr>
			<tr><th><center>age</center></th></tr>
			<tr><th><center>address</center></th></tr>
			<tr><th><center>grade</center></th></tr>
			<tr><th><center>room</center></th></tr>
			<tr><th><center>Edit</center></th></tr>
			<tr><th><center>Delete</center></th></tr>";
			
			foreach ($students as $student) {
				echo "
				<tr>
					<td><center>$student->id</center></td>
					<td><center>$student->ssn</center></td>
					<td>$student->name</td>
					<td><center>$student->sex</center></td>
					<td><center>$student->age</center></td>
					<td>$student->address</td>
					<td><center>$student->grade</center></td>
					<td><center>$student->room</center></td>
					<td><center><a href=\"/student/$student->id/editpage\">Click</a></center></td>
					<td><center><a href=\"/student/$student->id/delete\">Click</a></center></td>
				</tr>";
			}
			echo "</table><br>";
	
			echo"<form action=\"/students/insertpage\"><input type=\"submit\" value=\"Add Student\"></form>";
			echo"</form>
				<form action=\"/home\">
				<input type=\"submit\" value=\"Back\">
				</form>";
		
		}
	}