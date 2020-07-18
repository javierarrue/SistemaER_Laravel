@extends('layouts.PlantillaAdminEncuestaDocentes')

@section('content')

<?php
    $i = 1;
?>

        <!---------------------------------------------------------------------------------------------------------------->
         <h1><center>Actualizar Preguntas</center></h1><br>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="table-responsive">
                        <table class="table table-bordered table-condensed table-hover">
                        <div class="col-12">
                            @if (session('status'))
                                <div class="alert alert-success">
                                    {{ session('status') }}
                                </div>
                                <hr class="my-3">
                            @endif
                            </div>
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Pregunta</th>
                                    <th>Opción</th>
                                </tr>
                            </thead>
                            <!-- foreach para recorrer las peguntas de en la BD -->
                            @foreach ($preguntas as $pregunta)
                                <tr>
                                    <th>{{$pregunta->id_pregunta}}</th>
                                    <td>{{ $pregunta->descrip_preg }}</td>
                                    <th>
                                        <!-- En esta columna se declara un Form con botón para poder enviar el id a la
                                        página 'ActualizarPreguntaEditar' y mostrar la pregunta a actualizar -->
                                        <form action="{{asset('ActualizarPreguntaEditar')}}" method="get">
                                            <button class="btn btn-primary" value="{{ $pregunta->id_pregunta}}" name="id_preg">Editar</button>
                                        </form>
                                    </th>
                                </tr>
                                <?php $i++;?>
                            @endforeach
                        </table>
                    </div>
                    {{ $preguntas->render()}}
                </div>
                <a href="{{route('MenuEncuesta')}}" class="btn btn-primary btn-lg">Volver</a>
            </div>

            <br><br>




        <!---------------------------------------------------------------------------------------------------------------->

@endsection
