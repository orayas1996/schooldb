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

			echo "<h1>All Officials</h1>";
			echo "<table border=2>
			<tr>
				<th><center>ssn</center></th>
				<th><center>name</center></th>
				<th><center>sex</center></th>
				<th><center>address</center></th>
				<th><center>teacherroom</center></th>
				<th><center>club</center></th>
				<th><center>Edit</center></th>
				<th><center>Delete</center></th>
				</tr>";

        foreach ($officials as $official) {
  				echo "
  				<tr>
  					<td><center>$official->ssn</center></td>
  					<td>$official->name</td>
  					<td><center>$official->sex</center></td>
  					<td>$official->address</td>
  					<td><center>$official->teacherroom</center></td>
  					<td><center>$official->club</center></td>
  					<td><center><a href=\"/official/$official->ssn/editpage\">Click</a></center></td>
  					<td><center><a href=\"/official/$official->ssn/delete\">Click</a></center></td>
  				</tr>";
  			}
        echo "</table><br>";

  			echo"<form action=\"/officials/insertpage\"><input type=\"submit\" value=\"Add Official\"></form>";
  		}

  		public function insertpage()
  		{
  			return view('official.insertForm');
  		}

  		public function editpage($ssn)
  		{
  			return view('official.editForm')->with('ssn',$ssn);
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
  			$official->save();

  			echo "Add Success!!";
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
