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
    return view('Modulo_Docentes\P_MenuInicial');
});

//Auth::routes();


/*-----------------------------------------MODULO DE DOCENTES-------------------------------------------*/
//////////////////////////////Vistas de Admin/////////////////////////////////////////////////
Route::get('P_MenuInicial','Modulo_Docentes\C_PMenuInicial@Index')->name('P_MenuInicial');

Route::get('MenuEncuesta','Modulo_Docentes\C_MenuEncuesta@Index')->name('MenuEncuesta');

//////////////////Profesores que respondieron encuesta/////////////////
Route::get('P_ProfesoresRespondido','Modulo_Docentes\C_ProfesoresRespondido@Index')->name('P_ProfesoresRespondido');
//////////////////Profesores que NO respondieron encuesta/////////////////
Route::get('P_ProfesoresSinResponder','Modulo_Docentes\C_ProfesoresSinResponder@Index')->name('P_ProfesoresSinResponder');

///////////Actualizacion de una pregunta////////
Route::get('ActualizarPregunta','Modulo_Docentes\C_ActualizarPregunta@Index')->name('ActualizarPregunta');
Route::get('ActualizarPreguntaEditar','Modulo_Docentes\C_ActualizarPreguntaEditar@Show')->name('ActualizarPreguntaEditar');
Route::post('ActualizarPreguntaEditar','Modulo_Docentes\C_ActualizarPreguntaEditar@update');

/////////Adicion de Pregunta/////////
Route::get('AdicionarPregunta','Modulo_Docentes\C_Adicionarpregunta@Index')->name('AdicionarPregunta');
Route::post('AdicionarPregunta','Modulo_Docentes\C_Adicionarpregunta@Store');

///////Eliminacion de Pregunta////////
Route::get('EliminarPregunta','Modulo_Docentes\C_EliminarPregunta@Index')->name('EliminarPregunta');
Route::post('EliminarPregunta','Modulo_Docentes\C_EliminarPregunta@Delete');

///////Consulta de Preguntas/////////
Route::get('ConsultarPreguntas','Modulo_Docentes\C_ConsultarPreguntas@Index')->name('ConsultarPreguntas');

//////Menu de Listado de profesores///////////
Route::get('ListaProfesores','Modulo_Docentes\C_ListaProfesores@Index')->name('ListaProfesores');
///////////Agregar Profesor///////////
Route::get('ListaProfesores/AgregarProfesor', 'Modulo_Docentes\C_AgregarProfesor@AgregarProfesor');
Route::post('ListaProfesores/ingresar_profesores', 'Modulo_Docentes\C_AgregarProfesor@Store');
///////////////////Mostrar lista de Profesores///////////
Route::get('ListaProfesores/MostrarProfesores', 'Modulo_Docentes\C_MostrarProfesores@MostrarProfesores');

//////////////////Vista de Docentes/////////////////////////////////
Route::get('MenuDocentes','Modulo_Docentes\C_MenuDocente@Index')->name('MenuDocentes');
Route::post('MenuDocentes','Modulo_Docentes\C_MenuDocente@Store');

Route::get('EncuestaDocentes','Modulo_Docentes\C_EncuestaDocentes@Index')->name('EncuestaDocentes');

Route::post('EncuestaDocenteFormulario','Modulo_Docentes\C_EncuestaDocenteFormulario@Index');
Route::get('EncuestaDocenteFormulario','Modulo_Docentes\C_EncuestaDocenteFormulario@Index')->name('EncuestaDocenteFormulario');

