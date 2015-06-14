<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');

//Route::get('home', 'HomeController@index');
Route::resource('login', 'LoginController');

Route::resource('pag-principal3', 'Pagprincipal3Controller');
//               como quiera buscarlo , nombre del controlador

Route::resource('regalum', 'RegalumController');

Route::resource('actualizarest', 'ActualizarestController');

Route::resource('regasigest', 'RegasigestController');

Route::resource('regnotas', 'RegnotalController');

Route::resource('vernotalum', 'VernotalumController');

Route::resource('datgenalum', 'DatgenalumController');

Route::resource('regprofesor', 'RegprofesorController');

Route::resource('actprof', 'ActprofController');

Route::resource('regasigprof', 'RegasigprofController');

Route::resource('datgenprof', 'DatgenprofController');

Route::resource('regasignatura', 'RegasignaturaController');

Route::resource('actasignatura', 'ActdatasigController');




Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
