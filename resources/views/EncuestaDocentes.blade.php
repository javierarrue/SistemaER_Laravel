<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de encuesta</title>
    <link rel="stylesheet" href="{{asset('css_personal/AplicarEncuesta.css')}}">
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
                    <a href="{{route('MenuEncuesta')}}" class="rastro_link">Menu</a>
                </li>

                <li class="rastro_item">
                    <a href="{{route('AplicarEncuesta')}}" class="rastro_link">Aplicació de la encuesta</a>
                </li>

                <li class="rastro_item">
                    <a href="{{route('EncuestaDocentes')}}" class="rastro_link rastro_link_activo">Encuesta</a>
                </li>


            </ul>

            <div class="nombre_usuario">
                <span>Nombre de usuario</span>
            </div>
        </div>




        <!-- Lado izq. de la pagina, tiene una imagen vertical -->
        <aside>

            <div class="contenedor_imagen_vertical">

                <img src="https://www.utp.ac.pa/sites/default/files/fisc-aniversario-2017.jpg" alt=""
                    class="img_vertical">
                <br>

                <span class="txt_imagenVertical">Este sitio es mantenido por la Universidad Tecnológica de Panamá</span>
                <br>
                <a href="">Política de privacidad</a>

            </div>

        </aside>



        <!---------------------------------------------------------------------------------------------------------------->
        <!-- AQUI VA CONTENIDO DE LA PAGINA-->
        <div class="contenido">

            <button type="button" class="btn btn-success float-right" >Cerrar Sesión</button>
            @if(session('status'))
                <div class="alert alert-success">
                    {{session('status')}}
                </div>
                <hr class="my-3">
            @endif

                <form class="encuesta" method="post" action="EncuestaDocentes">
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

                   <center> <h2>Aplicación de la Encuesta</h2></center>
                        <br><br>
                    <div class="form-row">
                        <!-- Asignaturas-->
                        <div class="form-group col-md-6">
                            <label for="inputState">Nombre de la Asignatura:</label>
                            <select id="inputState" class="form-control" name="asignaturas" required>
                              <option disabled selected>Ninguno seleccionado</option>

                              @foreach ($asignaturas as $asignatura)
                              <option value="{{$asignatura->id_asignatura}}" name="">
                                  [{{$asignatura->cod_asignatura}}] {{$asignatura->nombre}}
                                </option>
                              @endforeach

                            </select>
                          </div>
                        <!-- Grupos-->
                        <div class="form-group col-md-6">
                            <label for="inputState">Grupo:</label>
                            <select id="inputState" class="form-control" name="grupos" required>
                              <option disabled selected>Ninguno seleccionado</option>

                              @foreach ($grupos as $grupo)
                              <option value="{{$grupo->id_grupo}}" name="">{{$grupo->cod_grupo}}</option>
                              @endforeach

                        </select>
                        </div>
                        <!-- Sedes-->
                        <div class="form-group col-md-6">
                            <label for="inputState">Sede: </label>
                            <select id="inputState" class="form-control" name="sedes" required>
                                <option disabled selected>Ninguno seleccionado</option>

                                @foreach ($sedes as $sede)
                                <option value="{{$sede->id_sede}}">{{$sede->nombre_sede}}</option>
                                @endforeach

                            </select>
                          </div>
                          <!-- Carreras-->
                          <div class="form-group col-md-6">
                            <label for="inputState">Carrera:</label>
                            <select id="inputState" class="form-control" name="carreras" required>
                                <option disabled selected>Ninguno seleccionado</option>

                                @foreach ($carreras as $carrera)
                                <option value="{{$carrera->id_carrera}}" name="">{{$carrera->nombre_carrera}}</option>
                                @endforeach

                            </select>
                          </div>
                          <!-- Semestres-->
                          <div class="form-group col-md-6">
                            <label for="inputState">Semestre:</label>
                            <select id="inputState" class="form-control" name="semestres" required>
                                <option disabled selected>Ninguno seleccionado</option>
                                <option value="I" name="">I Semestre</option>
                                <option value="II" name="">II Semestre</option>
                            </select>
                          </div>

                          <div class="form-group col-md-12">
                            <label >Cedula: </label>
                            <input type="text" class="form-control" name="cedula" required>
                          </div>

                    <input type="submit" value="Continuar con la encuesta" class="btn btn-success" >
                </form>

            </div>


        <div>
            <a href="{{route('AplicarEncuesta')}}" class="btn btn-success">Volver</a>
        </div>
        </div>


    </div>
    <!---------------------------------------------------------------------------------------------------------------->



    </div>



</body>

</html>


