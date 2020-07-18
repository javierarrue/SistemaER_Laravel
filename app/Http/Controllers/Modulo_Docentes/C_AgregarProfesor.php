<?php

namespace App\Http\Controllers;
namespace App\Http\Controllers\Modulo_Docentes;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\R_AgregarProfesor;
use App\Model\ingresar_profesores;
use App\Model\Preguntas;
use App\Models\ingresar_profesores as ModelsIngresar_profesores;
use App\Traits\Mostrartraits;

class C_AgregarProfesor extends Controller
{
    use Mostrartraits;
    public function AgregarProfesor(){
        return view('Modulo_Docentes\AgregarProfesor');
    }

    public function Store(R_AgregarProfesor $request){


         $ced=$request['cedula'];


      $bro=$this->cedul($ced);



         if(1==$bro){

             $saved = ingresar_profesores::create($request->all());

             $this->idactualizar($ced, $saved);

             return redirect('ListaProfesores/MostrarProfesores')->with('status', 'El profesor se ingreso correctamente');
           } else {

            return redirect()->back()->withInput()->withErrors('EL PROFESOR COMO USUARIO NO ESTA REGISTRADO');
          }


     }
}
