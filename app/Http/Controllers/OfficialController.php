<?php
  namespace App\Http\Controllers;

  use Illuminate\Http\Request;
  use App\Models\Official;
  use App\Officials;
  use Illuminate\Support\Facades\DB;

  class OfficialController extends Controller
	{
		public function index()
		{
		    $officials = Officials::all();
			return view('official.indexForm', [
			'officials' => $officials
			]);
  		}
		
		public function login(Request $request)
		{
			$username = $request->input('username');
			$password = $request->input('password');
			
			$check = DB::table('officials')->where(['username'=>$username,'password'=>$password])->get();
			if(count($check) >0)
			{
				echo "Login Success!";
			}else{
				echo "Login Fail!";
			}
		}
		
		public function detail($ssn)
		{
			$teacher = Officials::findOrFail($ssn);
			return view('official.teacherdetail')->with('official',$teacher);
		}

  		public function insertpage()
  		{
  			return view('official.insertForm');
  		}

  		public function editpage($ssn)
  		{
			$teacher = Officials::findOrFail($ssn);
  			return view('official.editForm')->with('official',$teacher)->with('ssn',$ssn);
  		}

      public function save(Request $request)
  		{
  			$official = new Official;
  			$official->ssn=$request->input('ssn');
  			$official->name=$request->input('name');
  			$official->sex=$request->input('sex');
  			$official->address=$request->input('address');
  			$official->teacherroom=$request->input('teacherroom');
  			$official->club=$request->input('club');
  			if(empty($official->ssn)) {
				echo "<br><br><center><h3>SSN cannot be empty!</h3><br>
				Adding Fail!<br>" ;	
			}
			else{
				$official->save(); 
				echo "<center>Adding Success!";
			}
  			echo"<form action=\"/officials/index\">
  			<input type=\"submit\" value=\"Go To Officials\">
  			</form>";
  		}

      public function delete($ssn)
  		{
  			$official = Official::findOrFail($ssn);
  			$official->delete();
  			echo "Delete Success!!";
  			echo"<form action=\"/officials/index\">
  			<input type=\"submit\" value=\"Go To official\">
  			</form>";
  		}

      public function editsave(Request $request, $ssn)
  		{
  			$official = Official::findOrFail($ssn);
  			//$student->id=$request->input('id');
  			//$official->ssn=$request->input('ssn');
  			$official->name=$request->input('name');
  			$official->sex=$request->input('sex');
  			$official->address=$request->input('address');
  			$official->teacherroom=$request->input('teacherroom');
			$official->club=$request->input('club');
  			$official->save();
  			echo "Edit Success!!";
  			echo"<form action=\"/officials/index\">
  			<input type=\"submit\" value=\"Go To Official\">
  			</form>";
  		}
  	}
