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

//Admin
Route::get('MenuEncuesta','C_MenuEncuesta@Index')->name('MenuEncuesta');

//-------------------------------------------------------
Route::get('ListaProfesores','C_ListaProfesores@Index')->name('ListaProfesores');
Route::get('ListaProfesores/AgregarProfesor', 'C_AgregarProfesor@AgregarProfesor');
Route::get('ListaProfesores/MostrarProfesores', 'C_MostrarProfesores@MostrarProfesores');
Route::post('ListaProfesores/ingresar_profesores', 'C_AgregarProfesor@Store');
//Route::get('AgregarProfesor2', 'C_AgregarProfesor2@AgregarProfesor2')->name('AgregarProfesor2');
//---------------------------------------------------------

Route::get('AdicionarPregunta','C_Adicionarpregunta@Index')->name('AdicionarPregunta');
Route::post('AdicionarPregunta','C_Adicionarpregunta@Store');

Route::get('EliminarPregunta','C_EliminarPregunta@Index')->name('EliminarPregunta');
Route::post('EliminarPregunta','C_EliminarPregunta@Delete');

Route::get('ActualizarPregunta','C_ActualizarPregunta@Index')->name('ActualizarPregunta');
Route::get('ActualizarPreguntaEditar','C_ActualizarPreguntaEditar@Show')->name('ActualizarPreguntaEditar');
Route::post('ActualizarPreguntaEditar','C_ActualizarPreguntaEditar@update');

Route::get('ConsultarPreguntas','C_ConsultarPreguntas@Index')->name('ConsultarPreguntas');

//Docentes
Route::get('MenuDocentes','C_MenuDocente@Index')->name('MenuDocentes');
Route::post('MenuDocentes','C_MenuDocente@Store');

Route::get('EncuestaDocentes','C_EncuestaDocentes@Index')->name('EncuestaDocentes');

Route::post('EncuestaDocenteFormulario','C_EncuestaDocenteFormulario@Index');
Route::get('EncuestaDocenteFormulario','C_EncuestaDocenteFormulario@Index')->name('EncuestaDocenteFormulario');


