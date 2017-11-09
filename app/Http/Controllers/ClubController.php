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
			return view('club.insertForm');
		}

		public function editpage($id)
		{
			return view('club.editForm')->with('id',$id);
		}

		public function allclubs()
		{
			$clubs = Clubs::all();
			return view('club.clubsindex',['clubs' => $clubs]);
		}

		public function detail($id)
		{
			$club = Clubs::findOrFail($id);
			$teachers = Officials::all()->where('club',$id);
			$students = Students::all();
			return view('club.clubdetail',['teachers' => $teachers,
										'students' => $students])
										->with('club',$club);
		}

		public function save(Request $request)
		{
			$club = new Club;
			$club->id=$request->input('id');
			$club->name=$request->input('name');
			$club->save();

			echo "Add Success!!";
			echo"<form action=\"/clubs\">
			<input type=\"submit\" value=\"Go To Clubs\">
			</form>";
		}

		public function delete($id)
		{
			$club = Club::findOrFail($id);
			$club->delete();
			echo "Delete Success!!";
			echo"<form action=\"/clubs\">
			<input type=\"submit\" value=\"Go To Clubs\">
			</form>";
		}

		public function editsave(Request $request, $id)
		{
			$club = Club::findOrFail($id);
			//$student->id=$request->input('id');
			$club->name=$request->input('name');
			$club->save();
			echo "Edit Success!!";
			echo"<form action=\"/clubs\">
			<input type=\"submit\" value=\"Go To Clubs\">
			</form>";
		}
	}
