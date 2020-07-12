

@extends('layouts.PlantillaAdminEncuestaDocentes')

@section('content')


        <br>
        <h1 class="text-center text-success">Crear Lista de Profesores</h1>
<div class="container">

    <div class="mx-auto" style="width: 50%;">


                <a href="{{route('AgregarProfesor')}}" class="btn btn-primary btn-block">
                        Agregar Profesor
            </a>
            <a href="{{route('MostrarProfesores')}}" class="btn btn-primary btn-block">
                        Lista de Profesores
            </a>

        </div>

</div>

<a href="{{route('MenuEncuesta')}}" class="btn btn-primary ml-4">Volver</a>



@endsection
