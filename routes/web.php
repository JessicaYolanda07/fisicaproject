<?php

// Login 
Route::get('login', 'Auth\AuthController@getLogin');
Route::post('login', ['as' =>'login', 'uses' => 'Auth\AuthController@postLogin']);
Route::get('logout', ['as' => 'logout', 'uses' => 'Auth\AuthController@getLogout']);
 
// Registration routes...
Route::get('register', 'Auth\AuthController@getRegister');
Route::post('register', ['as' => 'auth/register', 'uses' => 'Auth\AuthController@postRegister']);
Route::get('/', 'HomeController@index');
Route::get('home', 'HomeController@index');

// principal
Route::get('home', function () {
    return view('home');
});

// tabla para programacion de los estudiantes
Route::get('controlador','ControllerTabla@index');
Route::resource('tabla','TablaController');

// para la materia
Route::get('formulario_crear_materia', 'FormCrearMateriaController@index');
Route::get('editar/{id}', 'FormCrearMateriaController@editar')->name('editar');
Route::put('editar/{id}', 'FormCrearMateriaController@update')->name('update');
Route::delete('eliminar/{id}', 'FormCrearMateriaController@eliminar')->name('eliminar');
Route::post('/', 'FormCrearMateriaController@crear')->name('crearm');

// para el horario
Route::get('formulario_crear_horario', 'HorarioController@index1');
Route::get('editarh/{id}', 'HorarioController@editar')->name('editar');
Route::put('editarh/{id}', 'HorarioController@update')->name('update');
Route::delete('eliminar/{id}', 'HorarioController@eliminar')->name('eliminar');
Route::post('horario/', 'HorarioController@crear')->name('crear');


// para la programacion
Route::get('programacionh', 'ProgramacionHController@materiatodo');
Route::get('progamacionh', 'ProgramacionHController@index');
Route::delete('eliminarh/{id}', 'ProgramacionHController@eliminarh')->name('eliminarh');
Route::post('programacionh/', 'ProgramacionHController@crearh')->name('crearh');
Route::put('editarho/{id}', 'ProgramacionHController@update')->name('update');
Route::get('editarho/{id}', 'ProgramacionHController@editar')->name('editar');
