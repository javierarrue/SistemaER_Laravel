<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de encuesta</title>
    <link rel="stylesheet" href="{{asset('css_personal/ConsultarPregunta.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</head>

<body>


    <div class="contenedor">

        <header>

            <?php
                // Variables
                //Indice se usara como contador
                //El idPregunta se usara para captar el id que se consiga de la BD.
                $indice = 1;
                $idPregunta = -1;
            ?>

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
                    <a href="" class="rastro_link">Consulta de Pregunta</a>
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
            <div class="row" id="listPre">
                    <h2>Consulta de Preguntas</h2>
                    <br>
                    <br>

                <!-- ACORDEON -->
                <div class="container">
                <h6>Click en una pregunta para ver sus respuestas</h6>
                    <div class="row">
                    <!-- Foreach para listar todas las preguntas-->
                    @foreach ($preguntas as $pregunta)
                    <!-- mientras el idPregunta ( en la primera vuelta es -1) sea diferente al
                    ID de pregnta que traigo de la BD, puedes insertar una nueva carta.
                    Esto se hace debido a que la consulta de la BD trae resultados "repetidos"-->
                    <?php if($idPregunta !== $pregunta->id_pregunta): ?>
                        <div class="col-md-10">
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header" id="heading<?php echo $indice;?>">
                                    <h2 class="mb-0">
                                        <button class="btn btn-block text-left" type="button" data-toggle="collapse" data-target="#collapse<?php echo $indice;?>" aria-expanded="false" aria-controls="collapse<?php echo $indice;?>">
                                        <b># <?php echo $indice;?> </b>{{ $pregunta->descrip_preg }}
                                        </button>
                                    </h2>
                                    </div>

                                    <div id="collapse<?php echo $indice;?>" class="collapse" aria-labelledby="heading<?php echo $indice;?>" data-parent="#accordionExample">
                                    <div class="card-body">
                                    <!-- Ahora capturo del idPRegunta de la BD-->
                                      <?php
                                        $idPregunta = $pregunta->id_pregunta;
                                      ?>
                                      <ul>
                                      <!-- Luego verifico, si el campo de descrip_opcion es diferente a ''
                                      Si esta vacio esto significa que esta pregunta no tiene opciones.-->
                                        <?php
                                            if( $pregunta->descrip_opcion <>''):
                                        ?>
                                        @foreach ($preguntas as $pregunta)
                                            <?php
                                                if($idPregunta == $pregunta->id_pregunta AND $pregunta->descrip_opcion <>''):
                                            ?>
                                                </label>
                                                <div class="list-group">
                                                <a href="#!" class="list-group-item list-group-item-action">
                                                        <b>- </b>{{$pregunta->descrip_opcion}}
                                                </a>
                                                </div>
                                                <?php endif ?>
                                        @endforeach
                                        <!-- Si esta vacio muestro un input.-->
                                        <?php else: ?>
                                            <input type="text" class="form-control">
                                        <?php endif ?>
                                        </ul>

                                    </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- aumento el indice-->
                        <?php
                            $indice++;
                        ?>
                        <?php endif ?>
                    @endforeach
                    </div>

                </div>
                <!-- FIN ACORDEON -->
            </div>
                 <div>

                    <a href="{{route('MenuEncuesta')}}" class="btn btn-success">Volver</a>
                </div>
        </div>


    </div>
    <!---------------------------------------------------------------------------------------------------------------->

    </div>




</body>

</html>
