
@extends('layouts.PlantillaAdminEncuestaDocentes')

@section('content')


<h1 class="text-success" style="margin-left:-25%;">Menú de Encuestas</h1>

<div class="container">


    <div class="row" style="margin:0;">
         <div class="col-md-6 mb-4">
             <div class="card shadow">
                 <div class="inner">
                     <image img src="css_personal/Imagenes_menu/act3.png"  class="card-img-top" alt="..."></image>
                    </div>
                    <div class="centrado">
                        <h6 class="card-title">Actualización de Preguntas</h6>
                        <a href="{{asset('ActualizarPregunta')}}" class="btn btn-primary">Acceder</a>
                    </div>
                </div>
            </div>
            <!---------finalactualizacionpreguntas------>


            <!---------inicioadicionpreguntas------>
            <div class="col-md-6 mb-4">
               <div class="card shadow">
                    <div class="inner">
                        <image img src="css_personal/Imagenes_menu/agregar.png"  class="card-img-top" alt="..."></image>
                    </div>
                    <div class="centrado">
                        <h6 class="card-title">Adición de Preguntas</h6>
                        <a href="{{asset('AdicionarPregunta')}}" class="btn btn-primary">Acceder</a>
                    </div>
                </div>
            </div>
            <!---------finaladicionpreguntas------>

            <!---->
            <div class="col-md-6 mb-4">
                <div class="card shadow">
                    <div class="inner">
                        <image img src="css_personal/Imagenes_menu/eliminar.png"  class="card-img-top" alt="..."></image>
                    </div>
                    <div class="centrado">
                        <h6 class="card-title">Eliminación de Preguntas</h6>
                        <a href="{{asset('EliminarPregunta')}}" class="btn btn-primary">Acceder</a>
                    </div>
                </div>
            </div>
                <!---->

                <!---->
            <div class="col-md-6 mb-4">
                <div class="card shadow">
                    <div class="inner4">
                        <image img  src="css_personal/Imagenes_menu/consulta.png"  class="card-img-top" alt="..."></image>
                    </div>
                    <div class="centrado">
                        <h6 class="card-title">Consultas de Preguntas</h6>
                        <a href="{{asset('ConsultarPreguntas')}}" class="btn btn-primary">Acceder</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 mb-4">
                <div class="card shadow">
                    <div class="inner5">
                        <image img  src="css_personal/Imagenes_menu/list.png"  class="card-img-top" alt="..."></image>
                    </div>
                    <div class="centrado">
                        <h6 class="card-title">Lista de profesores</h6>
                        <a href="{{route('ListaProfesores')}}" class="btn btn-primary">accecder</a>
                    </div>
                </div>
            </div>

            <!--->
        </div>
        <!---------------------------------------------------------------------------------------------------------------->

    </div>
    </div>
@endsection

