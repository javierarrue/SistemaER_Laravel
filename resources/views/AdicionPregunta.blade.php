@extends('layouts.PlantillaAdminEncuestaDocentes')

@section('content')

            @if(session('status'))
                <div class="alert alert-success">
                    {{session('status')}}
                </div>
                <hr class="my-3">
            @endif

            <form action="AdicionarPregunta" method="POST" class="form-register mt-5">
                @csrf
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <h2>Adición de pregunta</h2>

                    <div class="contenedor-inputs">

                        <h5>Tipo de pregunta a agregar</h5>
                        <select name="cod_preg" id="tipoPregunta" onchange="preguntaTipo();"  class="custom-select" autofocus>

                            <option disabled selected>Ninguno seleccionado</option>
                            <option value="A">Pregunta Abierta</option>
                            <option value="B">Pregunta Cerrada</option>

                        </select> <br><br>

                        <div id="agregarPregunta">
                        <!-- SIEMPRE ENVIARA ESTOS VALORES-->
                            <input type="hidden" name="id_encuesta" value="1">

                            <!--Este campo siempre se muestra-->
                            <b>Seccion:</b>
                            <select name="id_seccion" id="id_seccion" onchange="preguntaTipo();"  class="custom-select" required>
                                <option disabled selected>Ninguno seleccionado</option>
                                <option value="1">Seccion A: Generales profesor</option>
                                <option value="2">Seccion B: Calificar grupo</option>
                            </select> <br><br>

                            <b>Pregunta a agregar:</b>
                            <input type="text" required name="descrip_preg" placeholder="Ingrese la pregunta" class="input-102" required>


                            <!--Si es una pregunta CERRADA, se muestra este DIV-->
                            <div id="preguntaCerrada">
                                <h5>Respuestas</h5>
                              <!--BOTON QUE SE ENCARGA DE AÑADIR RESPUESTA
                                mediante el onclick-->
                                <button type="button" class="btn btn-primary mb-1" id="añadirRespuesta" onclick="agregarRespuesta()">
                                    Añadir respuesta
                                </button>

                                <!--En este DIV se incertan los nuevos campos para las respuestas-->
                                <div id="respuestas"></div>

                            </div>

                            <!--Este boton siempre se ve-->
                            <input type="submit" value="Guardar" class="btn btn-primary">

                        </div>



                    </div>

            </form>

            <div class="botonvolver">

              <a href="{{route('MenuEncuesta')}}" class="btn btn-success ml-4">Volver</a>

            </div>

    <script src="{{ asset('js/adicionarPregunta.js') }}"></script>

@endsection
