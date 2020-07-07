

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de encuesta</title>
    <link rel="stylesheet" href="{{asset('css_personal/MenuEncuesta.css')}}">

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



        <!---------------------------------------------------------------------------------------------------------------->
        <!-- AQUI VA CONTENIDO DE LA PAGINA-->
        <div class="contenido">

            <button type="button" class="btn btn-success float-right" >Cerrar Sesión</button>


        <h1 class="tit1">Menú de Encuestas</h1>




                 <div class="row">

                <div class="col-md-3">
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

<div class="col-md-3">
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
<div class="col-md-3">
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
<div class="col-md-3">
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



    <div class="col-md-3">
          <div class="card shadow">
                     <div class="inner4">
                       <image img  src="css_personal/Imagenes_menu/aplicacion_encuesta.png"  class="card-img-top" alt="..."></image>
                       </div>
                            <div class="centrado">

                         <h6 class="card-title">Aplicacion de la encuesta</h6>
                           <a href="{{route('AplicarEncuesta')}}" class="btn btn-primary">Acceder</a>
              </div>
           </div>
         </div>


         <div class="col-md-3">
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

</body>
</html>



