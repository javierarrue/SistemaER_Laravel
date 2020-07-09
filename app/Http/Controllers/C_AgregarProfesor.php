<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class C_AgregarProfesor extends Controller
{
    public function Index(){
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
