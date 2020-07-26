<?php

use Illuminate\Http\Request;

Route::group([
    'middleware' => 'api',
], function () {

    Route::post('login', 'AuthController@login');
    Route::post('signup', 'AuthController@signup');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::get('me', 'AuthController@me');
    Route::post('sendPasswordResetLink', 'ResetPasswordController@sendEmail');
    Route::post('resetPassword', 'ChangePasswordController@process');
});



header('Access-Control-Allow-Methods: GET, POST, PATCH, PUT, DELETE, OPTIONS');
header('Access-Control-Allow-Headers: Authorization,Origin, Content-Type, X-Auth-Token, X-XSRF-TOKEN');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('egresados', 'EgresadosController@index');
Route::get('egresados/{id}', 'EgresadosController@show');
Route::post('egresados', 'EgresadosController@create');
Route::put('egresados/{id}', 'EgresadosController@update');
Route::delete('egresados/{id}', 'EgresadosController@destroy');
Route::post('egresadosfiltrar', 'EgresadosController@egresoFiltrer');

Route::get('trabajos', 'TrabajoController@index');
Route::get('trabajos/{id}', 'TrabajoController@show');
Route::post('trabajos', 'TrabajoController@create');
Route::put('trabajos/{id}', 'TrabajoController@update');
Route::delete('trabajos/{id}', 'TrabajoController@destroy');

Route::get('cursos', 'CursosController@index');
Route::get('cursos/{id}', 'CursosController@show');
Route::post('cursos', 'CursosController@create');
Route::put('cursos/{id}', 'CursosController@update');
Route::delete('cursos/{id}', 'CursosController@destroy');


Route::get('cliente', 'ClienteController@index');
Route::get('cliente/{id}', 'ClienteController@show');
Route::post('cliente', 'ClienteController@create');
Route::put('cliente/{id}', 'ClienteController@update');
Route::delete('cliente/{id}', 'ClienteController@destroy');

Route::get('alumnos', 'AlumnosController@index');
Route::get('alumnos/{id}', 'AlumnosController@show');
Route::post('alumnos', 'AlumnosController@create');
Route::put('alumnos/{id}', 'AlumnosController@update');
Route::delete('alumnos/{id}', 'AlumnosController@destroy');

Route::get('experiencialaboral', 'ExperienciaLaboralController@index');
Route::get('experiencialaboral/{id}', 'ExperienciaLaboralController@show');
Route::post('experiencialaboral', 'ExperienciaLaboralController@create');
Route::put('experiencialaboral/{id}', 'ExperienciaLaboralController@update');
Route::delete('experiencialaboral/{id}', 'ExperienciaLaboralController@destroy');

Route::get('usuarioTipos', 'UsuarioTiposController@index');
Route::get('usuarioTipos/{id}', 'UsuarioTiposController@show');
Route::post('usuarioTipos', 'UsuarioTiposController@create');
Route::put('usuarioTipos/{id}', 'UsuarioTiposController@update');





