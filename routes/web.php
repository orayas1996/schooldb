<?php

use App\Classrooms;
use App\Clubs;
use App\Officials;
use App\Parents;
use App\Students;
use App\Subjects;
use App\Models\Student;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/version', function () use ($router) {
    return $router->app->version();
});

$router->get('/students', function() {
    $students = Students::all();
	
	return $students;
});

$router->get('/classroom', function() {
    $Classrooms = Classrooms::all();
	
	return $Classrooms;
});

$router->get('/club', function() {
    $Clubs = Clubs::all();
	
	return $Clubs;
});

$router->get('/official', function() {
    $Officials = Officials::all();
	
	return $Officials;
});

$router->get('/parent', function() {
    $Parents = Parents::all();
	
	return $Parents;
});
$router->get('/subject', function() {
    $Subjects = Subjects::all();
	
	return $Subjects;
});

$router->get('/student/{id}', function($id){
	$student = Students::findOrFail($id);
	return $student;
});

//GUEST
//HOMEPAGE
$router->get('/home', 'PageController@ghomepage');
$router->get('/officials/login', 'PageController@loginpage');
$router->post('/officials/checklogin', 'PageController@checkloginpage');
$router->get('/score', 'PageController@gsearchscore');
$router->get('/table', 'PageController@gsearchtable');
$router->get('/subjects', 'PageController@gsearchsubject');

//STUDENTS
$router->get('/students/searchstudent', 'StudentController@gsearchstudent');
$router->get('/students/index', 'StudentController@gindex');
$router->post('/students/save','StudentController@save');
$router->get('/student/{grade}/all','StudentController@gindexgrade');
//STUDENTS IN ROOM
$router->get('/studentin/{grade}/{room}','StudentController@gindexgraderoom');
//STUDENT
$router->get('/student/{id}/detail','StudentController@gdetail');
//DETAIL SCORE
$router->get('/students/searchingscore','StudentController@gsearchscore');

//OFFICIALS
$router->get('/officials/index', 'OfficialController@gindex');
$router->get('/officials/insertpage','OfficialController@insertpage');
$router->post('/officials/save','OfficialController@save');
//OFFICIAL
$router->post('/official/login', 'OfficialController@login');
$router->get('/official/{ssn}/delete','OfficialController@delete');
$router->get('/official/{ssn}/editpage','OfficialController@editpage');
$router->post('/official/{ssn}/editsave','OfficialController@editsave');
$router->get('/official/{id}/detail','OfficialController@gdetail');
//CLUBS
$router->get('/clubs', 'ClubController@gallclubs');
$router->get('/clubs/insertpage','ClubController@insertpage');
$router->post('/clubs/save','ClubController@save');
//CLUB
$router->get('/club/{id}/detail','ClubController@gdetail');
$router->get('/club/{id}/delete','ClubController@delete');
$router->get('/club/{id}/editpage','ClubController@editpage');
$router->post('/club/{id}/editsave','ClubController@editsave');

//SUBJECTS
$router->get('/subjects/index', 'SubjectController@gindex');
$router->get('/subjects/index/{grade}', 'SubjectController@gsearchbygrade');
$router->get('/subjects/insertpage', 'SubjectController@insertpage');
$router->post('/subjects/save','SubjectController@save');
//SUBJECT
$router->get('/subject/{id}/detail', 'SubjectController@gdetail');
$router->get('/subject/{id}/editpage', 'SubjectController@editpage');
$router->post('/subject/{id}/editsave', 'SubjectController@editsave');
$router->get('/subject/{id}/delete','SubjectController@delete');
//SCHEDULE
$router->get('/schedule/{grade}/{room}', 'TableController@gtable');
//EXAM
$router->get('/searchexam', 'PageController@gsearchexam');
$router->get('/searchexam/{grade}', 'TableController@gexamdetail');

//BACK
//HOMEPAGE
$router->get('/bk/home', 'PageController@homepage');
$router->get('/bk/officials/login', 'PageController@loginpage');
$router->post('/bk/officials/checklogin', 'PageController@checkloginpage');
$router->get('/bk/score', 'PageController@searchscore');
$router->get('/bk/table', 'PageController@searchtable');
$router->get('/bk/subjects', 'PageController@searchsubject');

//STUDENTS
$router->get('/bk/students/searchstudent', 'StudentController@searchstudent');
$router->get('/bk/students/index', 'StudentController@index');
$router->get('/bk/students/insertpage','StudentController@insertpage');
$router->post('/bk/students/save','StudentController@save');
$router->get('/bk/student/{grade}/all','StudentController@indexgrade');
//STUDENTS IN ROOM
$router->get('/bk/studentin/{grade}/{room}','StudentController@indexgraderoom');
//STUDENT
$router->get('/bk/student/{id}/detail','StudentController@detail');
$router->get('/bk/student/{id}/delete','StudentController@delete');
$router->get('/bk/student/{id}/editpage','StudentController@editpage');
$router->post('/bk/student/{id}/editsave','StudentController@editsave');
//DETAIL SCORE
$router->get('/bk/students/searchingscore','StudentController@searchscore');
$router->get('/bk/student/{id}/{scid}/editscore','StudentController@editscorepage');
$router->post('/bk/student/{id}/{scid}/editscoresave','StudentController@editscoresave');
$router->get('/bk/student/{id}/editbehave','StudentController@editbehavepage');
$router->post('/bk/student/{id}/editbehavesave','StudentController@editbehavesave');
//OFFICIALS
$router->get('/bk/officials/index', 'OfficialController@index');
$router->get('/bk/officials/insertpage','OfficialController@insertpage');
$router->post('/bk/officials/save','OfficialController@save');
//OFFICIAL
$router->post('/bk/official/login', 'OfficialController@login');
$router->get('/bk/official/{ssn}/delete','OfficialController@delete');
$router->get('/bk/official/{ssn}/editpage','OfficialController@editpage');
$router->post('/bk/official/{ssn}/editsave','OfficialController@editsave');
$router->get('/bk/official/{id}/detail','OfficialController@detail');
//CLUBS
$router->get('/bk/clubs', 'ClubController@allclubs');
$router->get('/bk/clubs/insertpage','ClubController@insertpage');
$router->post('/bk/clubs/save','ClubController@save');
//CLUB
$router->get('/bk/club/{id}/detail','ClubController@detail');
$router->get('/bk/club/{id}/delete','ClubController@delete');
$router->get('/bk/club/{id}/editpage','ClubController@editpage');
$router->post('/bk/club/{id}/editsave','ClubController@editsave');
//SUBJECTS
$router->get('/bk/subjects/index', 'SubjectController@index');
$router->get('/bk/subjects/index/{grade}', 'SubjectController@searchbygrade');
$router->get('/bk/subjects/insertpage', 'SubjectController@insertpage');
$router->post('/bk/subjects/save','SubjectController@save');
//SUBJECT
$router->get('/bk/subject/{id}/detail', 'SubjectController@detail');
$router->get('/bk/subject/{id}/editpage', 'SubjectController@editpage');
$router->post('/bk/subject/{id}/editsave', 'SubjectController@editsave');
$router->get('/bk/subject/{id}/delete','SubjectController@delete');
//SCHEDULE
$router->get('/bk/schedule/{grade}/{room}', 'TableController@table');
//EXAM
$router->get('/bk/searchexam', 'PageController@searchexam');
$router->get('/bk/searchexam/{grade}', 'TableController@examdetail');



$router->get('/', 'IndexController@index');

$router->get('/posts', 'PostController@index');

$router->get('/posts/{id}', 'PostController@view');

