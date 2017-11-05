<?php

use App\Classrooms;
use App\Clubs;
use App\Officials;
use App\Parents;
use App\Students;
use App\Subjects;

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
    $Students = Students::all();
	
	return $Students;
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





$router->get('/', 'IndexController@index');

$router->get('/posts', 'PostController@index');

$router->get('/posts/{id}', 'PostController@view');

