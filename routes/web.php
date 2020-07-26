<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('cliente/index',"ClienteController@index");
Route::get('cliente/show/{id}',"ClienteController@show");

Route::get('egresado/index',"EgresadoController@index");
Route::get('egresado/show/{id}',"EgresadoController@show");

Route::get('trabajos/index',"TrabajoController@index");
Route::get('trabajos/show/{id}',"TrabajoController@show");

Route::get('cursos/index',"CursosController@index");
Route::get('cursos/show/{id}',"CursosController@show");


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

$s = 'social.';
Route::get('/social/redirect/{provider}', [
	'as' => $s . 'redirect', 
	'uses' => 'SocialController@getSocialRedirect'
]);
Route::get('/social/handle/{provider}', [
	'as' => $s . 'handle', 
	'uses' => 'SocialController@getSocialHandle'
]);
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('user-list-pdf',      'UserController@exportPdf')->name('users.pdf');
Route::get('user-list-excel',    'UserController@exportExcel')->name('users.excel');
Route::post('import-list-excel', 'UserController@importExcel')->name('users.import.excel');
