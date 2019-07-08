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

Route::get('programacionh', 'ProgramacionHController@materiatodo');

Route::get('progamacionh', 'ProgramacionHController@index');


Route::post('programacionh/', 'ProgramacionHController@crearh')->name('crearh');


Route::get('formulario_crear_materia', 'FormCrearMateriaController@index');
Route::get('editar/{id}', 'FormCrearMateriaController@editar')->name('editar');
Route::put('editar/{id}', 'FormCrearMateriaController@update')->name('update');
Route::delete('eliminar/{id}', 'FormCrearMateriaController@eliminar')->name('eliminar');
Route::post('/', 'FormCrearMateriaController@crear')->name('crearm');

Route::get('formulario_crear_horario', 'HorarioController@index1');
Route::get('editarh/{id}', 'HorarioController@editar')->name('editar');
Route::put('editarh/{id}', 'HorarioController@update')->name('update');
Route::delete('eliminarh/{id}', 'HorarioController@eliminar')->name('eliminar');
Route::post('horario/', 'HorarioController@crear')->name('crear');