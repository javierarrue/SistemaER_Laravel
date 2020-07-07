@extends('layouts.app')

<!DOCTYPE HTML>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de encuesta</title>
    <link rel="stylesheet" href="{{asset('css_personal/AdicionPregunta.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

</head>

  <body>


        <div class="contenedor">

            <header>

                <!-- Aqui van las imagenes de arriba-->
                <div class="imagenesHorizontales">

                    <div class="contenedorImagen"> <img src="css_personal/Imagenes/logoUtp.png" alt=""></div>
                    <div class="contenedorImagen"> <img src="css_personal/Imagenes/img1.jpg" alt=""></div>
                    <div class="contenedorImagen"> <img src="css_personal/Imagenes/img2.jpg" alt=""></div>
                    <div class="contenedorImagen"> <img src="css_personal/Imagenes/img3.jpg" alt=""></div>
                    <div class="contenedorImagen"> <img src="css_personal/Imagenes/img4.jpg" alt=""></div>
                    <div class="contenedorImagen"> <img src="css_personal/Imagenes/img5.jpg" alt=""></div>
                    <div class="contenedorImagen"> <img src="css_personal/Imagenes/logoFisc.png" alt=""></div>

                </div>

            </header>

            <!-- Menu de rastros-->

        <div class="contenedor_menu_rastros">

          <ul class="menu_rastros">

              <li class="rastro_item">
                  <a href="{{route('MenuEncuesta')}}" class="rastro_link">Menú</a>
              </li>

              <li class="rastro_item">
                  <a href="" class="rastro_link">Adicion de preguntas</a>
              </li>


          </ul>

          <div class="nombre_usuario">
              <span>Nombre de usuario</span>
          </div>

        </div>

        <!-- Lado izq. de la pagina, tiene una imagen vertical -->
        <aside>

            <div class="contenedor_imagen_vertical">

                <img src="https://www.utp.ac.pa/sites/default/files/fisc-aniversario-2017.jpg" alt="" class="img_vertical">
                <br>

                <span class="txt_imagenVertical">Este sitio es mantenido por la Universidad Tecnológica de Panamá</span>
                <br>
                <a href="">Política de privacidad</a>

            </div>

        </aside>

        <!--Contenido de la Página-->
        <div class="contenido">

            <button type="button" class="btn btn-success float-right" >Cerrar Sesión</button>
            @if(session('status'))
                <div class="alert alert-success">
                    {{session('status')}}
                </div>
                <hr class="my-3">
            @endif

            <form action="AdicionarPregunta" method="POST" class="form-register">
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

                <h2 class="tit1">Adición de pregunta</h2>

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
                            <input type="hidden" name="id_seccion" value="1">

                            <!--Este campo siempre se muestra-->
                            Pregunta a agregar:
                            <input type="text" required name="descrip_preg" placeholder="Ingrese la pregunta" class="input-102" required>

                            <!--Si es una pregunta CERRADA, se muestra este DIV-->
                            <div id="preguntaCerrada">
                                <h5>Respuestas</h5>
                              <!--BOTON QUE SE ENCARGA DE AÑADIR RESPUESTA
                                mediante el onclick-->
                                <button type="button" class="btn btn-success" id="añadirRespuesta" onclick="agregarRespuesta()">
                                    Añadir respuesta
                                </button>

                                <!--En este DIV se incertan los nuevos campos para las respuestas-->
                                <div id="respuestas"></div>

                            </div>

                            <!--Este boton siempre se ve-->
                            <input type="submit" value="Guardar" class="btn btn-success">

                        </div>



                    </div>

            </form>

            <div class="botonvolver">

              <a href="{{route('MenuEncuesta')}}" class="btn btn-success">Volver</a>

            </div>

        </div>

    <script src="{{ asset('js/adicionarPregunta.js') }}"></script>

  </body>
</html>
