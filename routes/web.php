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
Route::get('/formulario_crear_materia', 'FormCrearMateriaController@index');
Route::get('editarm/{id}', 'FormCrearMateriaController@editarm')->name('editarm');
Route::put('editarm/{id}', 'FormCrearMateriaController@update')->name('update');
Route::delete('eliminarm/{id}', 'FormCrearMateriaController@eliminarm')->name('eliminarm');
Route::post('/', 'FormCrearMateriaController@crear')->name('crearm');

// para el horario
Route::get('/formulario_crear_horario', 'HorarioController@index1');
Route::get('editarh/{id}', 'HorarioController@editarh')->name('editarh');
Route::put('editarh/{id}', 'HorarioController@updateh')->name('updateh');
Route::delete('eliminar/{id}', 'HorarioController@eliminar')->name('eliminar');
Route::post('horario/', 'HorarioController@crear')->name('crear');


// para la programacion
Route::get('/programacionh', 'ProgramacionHController@materiatodo');
Route::get('/programacionh', 'ProgramacionHController@index');
Route::delete('eliminarh/{id}', 'ProgramacionHController@eliminarh')->name('eliminarh');
Route::post('programacionh/', 'ProgramacionHController@crearp')->name('crearp');
Route::put('editarp/{id}', 'ProgramacionHController@updatep')->name('updatep');
Route::get('editarp/{id}', 'ProgramacionHController@editarp')->name('editarp');

//para docente
Route::get('/formulario_crear_docente', 'DocenteController@index');
Route::post('formulario_crear_docente/', 'DocenteController@creard')->name('creard');
Route::get('editard/{id}','DocenteController@editard')->name('editard');
Route::put('editard/{id}','DocenteController@updated')->name('updated');
Route::delete('eliminard/{id}','DocenteController@eliminard')->name('eliminard');