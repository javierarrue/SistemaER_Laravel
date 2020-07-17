@extends('layouts.PlantillaAdminEncuestaDocentes')

@section('content')

@section('navbar')
<h5 class="text-light mx-auto">Menú de Encuesta a Docentes</h5>
@endsection('navbar')

<br>
        <h1 class="text-center text-success">Seleccione una opción</h1>
<div class="container">

    <div class="mx-auto" style="width: 50%;">

            <a href="{{url('MenuEncuesta')}}" class="btn btn-primary btn-block">
                        Mantenimiento
            </a>
            <a href="{{url('P_ProfesoresRespondido')}}" class="btn btn-primary btn-block">
                        Profesores que han contestado la encuesta de docentes
            </a>

            <a href="{{url('P_ProfesoresSinResponder')}}" class="btn btn-primary btn-block">
                        Profesores que han no han contestado la encuesta de docentes
            </a>

        </div>

</div>


@endsection
