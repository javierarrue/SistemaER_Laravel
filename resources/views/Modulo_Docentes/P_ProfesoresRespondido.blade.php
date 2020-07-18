@extends('layouts.PlantillaAdminEncuestaDocentes')

@section('content')

<div class="contenido">
    <section id="container">

 <h1>Profesores que respondieron la encuesta </h1>
    @if ($profesor->isEmpty())
                    <div>No hay registros</div>
                @else

    <table>

    <tr>
        <th>ID Profesor</th>
        <th>Cedula</th>
        <th>ID Grupo</th>
        <th>Asignatura</th>
        <th>Semestre</th>
        <th>Año</th>

    </tr>
    @foreach($profesor as $profesores)


    <tr>
    <td>{!! $profesores->id_profesor !!}</td>
    <td>{!! $profesores->cedula !!}</td>
    <td>{!! $profesores->id_grupo !!}</td>
    <td>{!! $profesores->nombre !!}</td>
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
