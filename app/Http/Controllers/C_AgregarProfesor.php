<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\http\Requests\R_AgregarProfesor;
use App\Model\ingresar_profesores;
use App\Traits\Mostrartraits;

class C_AgregarProfesor extends Controller
{
    use Mostrartraits;
    public function AgregarProfesor(){
        return view('AgregarProfesor');
    }
    
    public function Store(R_AgregarProfesor $request){
        
        
         $ced=$request['cedula'];
         
         
      $bro=$this->cedul($ced);
      

 
         if(1==$bro){

            
             $saved = ingresar_profesores::create($request->all());
             
             $this->idactualizar($ced, $saved);
           
             return redirect('MostrarProfesores')->with('status', 'El profesor se ingreso correctamente');
           } else {
            
            return redirect()->back()->withInput()->withErrors('EL PROFESOR COMO USUARIO NO ESTA REGISTRADO');
          }
   
         
     }
}
