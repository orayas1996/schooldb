<?php

	namespace App\Http\Controllers;

	use Illuminate\Support\Facades\DB;
	use Illuminate\Http\Request;
	use App\Models\Club;
	use App\Models\Official;
	use App\Clubs;
	use App\Officials;
	use App\Students;


	class ClubController extends Controller
	{
		public function insertpage()
		{
			return view('back.club.insertForm',['title'=>'insertclub']);
		}

		public function editpage($id)
		{
			$club = Clubs::findOrFail($id);
			return view('back.club.editForm',['title'=>'editclub'])->with('club',$club)->with('id',$id);
		}

		public function allclubs()
		{
			$clubs = Clubs::all();
			return view('back.club.clubsindex',['clubs' => $clubs],['title'=>'Club']);
		}
		
		public function gallclubs()
		{
			$clubs = Clubs::all();
			return view('club.clubsindex',['clubs' => $clubs],['title'=>'Club']);
		}

		public function detail($id)
		{
			$club = Clubs::findOrFail($id);
			$teachers = Officials::all()->where('club',$id);
			$students = Students::all()->where('club',$id);
			return view('back.club.clubdetail',['teachers' => $teachers,
										'students' => $students],[
										'title'=>'clubdetail'])
										->with('club',$club);
		}
		
		public function gdetail($id)
		{
			$club = Clubs::findOrFail($id);
			$teachers = Officials::all()->where('club',$id);
			$students = Students::all()->where('club',$id);
			return view('club.clubdetail',['teachers' => $teachers,
										'students' => $students],[
										'title'=>'clubdetail'])
										->with('club',$club);
		}

		public function save(Request $request)
		{
			$club = new Club;
			$club->id=$request->input('id');
			$club->name=$request->input('name');
			if(empty($club->id)) {
				echo "<br><br><center><h3>ID Cannot be empty!</h3><br>
				Adding Fail!<br>" ;	
			}
			else{
				$club->save(); 
				echo "<center>Adding Success!";
			}
			echo"<form action=\"/bk/clubs\">
			<input type=\"submit\" value=\"Go To Clubs\">
			</form>";
		}

		public function delete($id)
		{
			$club = Club::findOrFail($id);
			$club->delete();
			echo "<br><br><center>Delete Success!!<br>";
			echo"<form action=\"/bk/clubs\">
			<input type=\"submit\" value=\"Go To Clubs\">
			</form>";
		}

		public function editsave(Request $request, $id)
		{
			$club = Club::findOrFail($id);
			//$student->id=$request->input('id');
			$club->name=$request->input('name');
			$club->save();
			echo "<br><br><center>Edit Success!!<br>";
			echo"<form action=\"/bk/clubs\">
			<input type=\"submit\" value=\"Go To Clubs\">
			</form>";
		}
	}
