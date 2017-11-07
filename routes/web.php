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
$router->get('/score', 'PageController@searchscore');
$router->get('/table', 'PageController@searchtable');
//STUDENT
$router->get('/students/searchstudent', 'StudentController@searchstudent');
$router->get('/students/index', 'StudentController@index');
$router->get('/students/insertpage','StudentController@insertpage');
$router->post('/students/save','StudentController@save');
$router->get('/student/{id}/delete','StudentController@delete');
$router->get('/student/{id}/editpage','StudentController@editpage');
$router->post('/student/{id}/editsave','StudentController@editsave');
$router->get('/student/{id}/detail','StudentController@detail');
//OFFICIAL
$router->get('/officials/index', 'OfficialController@index');
$router->get('/officials/insertpage','OfficialController@insertpage');
$router->post('/officials/save','OfficialController@save');
$router->get('/official/{ssn}/delete','OfficialController@delete');
$router->get('/official/{ssn}/editpage','OfficialController@editpage');
$router->post('/official/{ssn}/editsave','OfficialController@editsave');
$router->get('/official/{id}/detail','OfficialController@detail');
//SCHEDULE
$router->get('/schedule', 'PageController@table');

$router->get('/', 'IndexController@index');

$router->get('/posts', 'PostController@index');

$router->get('/posts/{id}', 'PostController@view');

