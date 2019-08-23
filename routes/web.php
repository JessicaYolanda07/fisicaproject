<?php
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['role:super-admin|director|docente|estudiante']], function() {
    Route::resource('usuarios', 'UsersController');
});

// tabla para programacion de los estudiantes
Route::get('controlador','ControllerTabla@index');
//Route::resource('tabla','ProgramacionLabEstuController');

// para la programacion laboratorio-estudiante
Route::get('tabla', 'ProgramacionLabEstuController@index');
Route::get('lista_alumnos_sin_recibo', 'ProgramacionLabEstuController@lista_alumnos_sin_recibo');
Route::get('lista_alumnos_con_recibo', 'ProgramacionLabEstuController@lista_alumnos_con_recibo');
Route::post('programacionlab/', 'ProgramacionLabEstuController@crearlab')->name('crearlab');
//Route::delete('eliminarlab/{id}', 'ProgramacionHController@eliminarlab')->name('eliminarlab');
Route::put('editarlab/{id}', 'ProgramacionLabEstuController@updatelab')->name('updatelab');
//Route::get('editarlab/{id}', 'ProgramacionHController@editarlab')->name('editarlab');



// para la materia
Route::get('/formulario_crear_materia', 'FormCrearMateriaController@index');
Route::get('editarm/{id}', 'FormCrearMateriaController@editarm')->name('editarm');
Route::put('editarm/{id}', 'FormCrearMateriaController@updatem')->name('updatem');
Route::delete('eliminarm/{id}', 'FormCrearMateriaController@eliminarm')->name('eliminarm');
Route::post('/', 'FormCrearMateriaController@crearm')->name('crearm');

// para el horario
Route::get('/formulario_crear_horario', 'HorarioController@index1');
Route::get('editarh/{id}', 'HorarioController@editarh')->name('editarh');
Route::put('editarh/{id}', 'HorarioController@updateh')->name('updateh');
Route::delete('eliminar/{id}', 'HorarioController@eliminarh')->name('eliminarh');
Route::post('horario/', 'HorarioController@crearh')->name('crearh');


// para la programacion
Route::get('/programacionh', 'ProgramacionHController@materiatodo');
Route::get('/programacionh', 'ProgramacionHController@index');
Route::delete('eliminarh/{id}', 'ProgramacionHController@eliminarp')->name('eliminarp');
Route::post('programacionh/', 'ProgramacionHController@crearp')->name('crearp');
Route::put('editarp/{id}', 'ProgramacionHController@updatep')->name('updatep');
Route::get('editarp/{id}', 'ProgramacionHController@editarp')->name('editarp');

//para docente
Route::get('/formulario_crear_docente', 'DocenteController@index');
Route::post('formulario_crear_docente/', 'DocenteController@creard')->name('creard');
Route::get('editard/{id}','DocenteController@editard')->name('editard');
Route::put('editard/{id}','DocenteController@updated')->name('updated');
Route::delete('eliminard/{id}','DocenteController@eliminard')->name('eliminard');