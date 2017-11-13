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
//HOMEPAGE
$router->get('/home', 'PageController@homepage');
$router->get('/officials/login', 'PageController@loginpage');
$router->get('/score', 'PageController@searchscore');
$router->get('/table', 'PageController@searchtable');
$router->get('/subjects', 'PageController@searchsubject');

//STUDENTS
$router->get('/students/searchstudent', 'StudentController@searchstudent');
$router->get('/students/index', 'StudentController@index');
$router->get('/students/insertpage','StudentController@insertpage');
$router->post('/students/save','StudentController@save');
$router->get('/student/{grade}/all','StudentController@indexgrade');
//STUDENTS IN ROOM
$router->get('/studentin/{grade}/{room}','StudentController@indexgraderoom');
//STUDENT
$router->get('/student/{id}/detail','StudentController@detail');
$router->get('/student/{id}/delete','StudentController@delete');
$router->get('/student/{id}/editpage','StudentController@editpage');
$router->post('/student/{id}/editsave','StudentController@editsave');
//DETAIL SCORE
$router->post('/students/searchingscore','StudentController@searchscore');
$router->get('student/{id}/score', 'StudentController@scoredetail');
//OFFICIALS
$router->get('/officials/index', 'OfficialController@index');
$router->get('/officials/insertpage','OfficialController@insertpage');
$router->post('/officials/save','OfficialController@save');
//OFFICIAL
$router->post('/official/login', 'OfficialController@login');
$router->get('/official/{ssn}/delete','OfficialController@delete');
$router->get('/official/{ssn}/editpage','OfficialController@editpage');
$router->post('/official/{ssn}/editsave','OfficialController@editsave');
$router->get('/official/{id}/detail','OfficialController@detail');
//SCHEDULE
$router->get('/schedule/{grade}/{room}', 'TableController@table');
//CLUBS
$router->get('/clubs', 'ClubController@allclubs');
$router->get('/clubs/insertpage','ClubController@insertpage');
$router->post('/clubs/save','ClubController@save');
//CLUB
$router->get('/club/{id}/detail','ClubController@detail');
$router->get('/club/{id}/delete','ClubController@delete');
$router->get('/club/{id}/editpage','ClubController@editpage');
$router->post('/club/{id}/editsave','ClubController@editsave');
//SUBJECTS
$router->get('/subjects/index', 'SubjectController@index');
$router->get('/subjects/index/{grade}', 'SubjectController@searchbygrade');
$router->get('/subjects/insertpage', 'SubjectController@insertpage');
$router->post('/subjects/save','SubjectController@save');
//SUBJECT
$router->get('/subject/{id}/detail', 'SubjectController@detail');
$router->get('/subject/{id}/editpage', 'SubjectController@editpage');
$router->post('/subject/{id}/editsave', 'SubjectController@editsave');
$router->get('/subject/{id}/delete','SubjectController@delete');

$router->get('/', 'IndexController@index');

$router->get('/posts', 'PostController@index');

$router->get('/posts/{id}', 'PostController@view');

