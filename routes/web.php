<?php

use Illuminate\Support\Facades\Route;

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
    return view('MenuEncuesta');
});

//Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('AdicionarPregunta','C_Adicionarpregunta@Index')->name('AdicionarPregunta');
Route::post('AdicionarPregunta','C_Adicionarpregunta@Store');

Route::get('MenuEncuesta','C_MenuEncuesta@Index')->name('MenuEncuesta');
Route::get('MenuDocentes','C_MenuDocente@Index')->name('MenuDocentes');
Route::post('MenuDocentes','C_MenuDocente@Store');


Route::get('AgregarProfesor', 'C_AgregarProfesor@AgregarProfesor')->name('AgregarProfesor');
Route::post('ingresar_profesores', 'C_AgregarProfesor@Store');
Route::get('MostrarProfesores', 'C_MostrarProfesores@MostrarProfesores')->name('MostrarProfesores');
Route::get('AgregarProfesor2', 'C_AgregarProfesor2@AgregarProfesor2')->name('AgregarProfesor2');


Route::get('EliminarPregunta','C_EliminarPregunta@Index')->name('EliminarPregunta');
Route::get('ActualizarPregunta','C_ActualizarPregunta@Index')->name('ActualizarPregunta');
Route::get('ActualizarPreguntaEditar','C_ActualizarPreguntaEditar@Index')->name('ActualizarPreguntaEditar');


Route::get('ConsultarPreguntas','C_ConsultarPreguntas@Index')->name('ConsultarPreguntas');

Route::get('AplicarEncuesta','C_AplicarEncuesta@Index')->name('AplicarEncuesta');
Route::get('EncuestaDocentes','C_EncuestaDocentes@Index')->name('EncuestaDocentes');

Route::post('EncuestaDocenteFormulario','C_EncuestaDocenteFormulario@Index');
Route::get('EncuestaDocenteFormulario','C_EncuestaDocenteFormulario@Index')->name('EncuestaDocenteFormulario');


