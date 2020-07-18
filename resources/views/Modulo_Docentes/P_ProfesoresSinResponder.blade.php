@extends('layouts.PlantillaAdminEncuestaDocentes')

@section('content')

    <h1>Profesores que no han respondido la encuesta</h1>

    @if ($profesor->isEmpty())
     <h3>Todos los profesores han respondido la encuesta</h3>
    @else

    <table>

        <tr>
            <th>ID</th>
            <th>Cedula</th>
            <th>Correo</th>
            <th>Asignatura</th>
            <th>Grupo</th>
            <th>Semestre</th>
            <th>Año</th>
        </tr>
        @foreach($profesor as $profesores)

        <tr>
        <td>{!! $profesores->id_profesor !!}</td>
        <td>{!! $profesores->cedula !!}</td>
        <td>{!! $profesores->correo !!}</td>
        <td>{!! $profesores->nombre !!}</td>
        <td>{!! $profesores->cod_grupo !!}</td>
        <td>{!! $profesores->semestre !!}</td>
        <td>{!! $profesores->año !!}</td>

        </tr>
    @endforeach

    </table>
    @endif

    <div class="paginador">

    {{ $profesor->links() }}
    </div>


    <a href="{{ url('P_MenuInicial') }}" class="btn btn-primary m-4">Volver</a>



@endsection
