<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Profesores</title>
    <link rel="stylesheet" href="{{asset('css_personal/MostrarProfesores.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400&display=swap" rel="stylesheet">
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
       
</head>
<body>


    <div class="contenedor">

        <header>

            <!-- Aqui van las imagenes de arriba-->
            <div class="imagenesHorizontales">
                    
                <div class="contenedorImagen"> <img src="Imagenes/logoUtp.png" alt=""></div>
                <div class="contenedorImagen"> <img src="Imagenes/img1.jpg" alt=""></div>
                <div class="contenedorImagen"> <img src="Imagenes/img2.jpg" alt=""></div>
                <div class="contenedorImagen"> <img src="Imagenes/img3.jpg" alt=""></div>
                <div class="contenedorImagen"> <img src="Imagenes/img4.jpg" alt=""></div>
                <div class="contenedorImagen"> <img src="Imagenes/img5.jpg" alt=""></div>
                <div class="contenedorImagen"> <img src="Imagenes/logoFisc.png" alt=""></div>

            </div>
    
        </header>
    
        <!-- Menu de rastros-->

         <div class="contenedor_menu_rastros">
    
    <ul class="menu_rastros">

        <li class="rastro_item">
            <a href="{{route('MenuEncuesta')}}" class="rastro_link">Menú</a>
        </li>

        <li class="rastro_item">
            <a href="{{route('ListaProfesores')}}" class="rastro_link">Lista de profesores</a>
        </li>

        <li class="rastro_item">
            <a href="" class="rastro_link rastro_link_activo">Lista de Los Profesores Registrados</a>
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

<section id="container">

<h1>Lista de Profesores</h1>
@if ($profesor->isEmpty())
                <div>No hay Mensajes</div>
            @else

<table>

<tr>
    <th>Nombre</th>
    <th>Apellido</th>
    <th>cedula</th>
    <th>Telefono</th>
    <th>Correo</th>
    <th>Centro Regional</th>
</tr>
@foreach($profesor as $profesores)


<tr>
<td>{!! $profesores->nombre !!}</td>
<td>{!! $profesores->apellido !!}</td>
<td>{!! $profesores->cedula !!}</td>
<td>{!! $profesores->telefono !!}</td>
<td>{!! $profesores->correo !!}</td>
<td>{!! $profesores->sedenombre  !!}</td>
</tr>
@endforeach

</table>
@endif

<div class="paginador">

{{ $profesor->links() }}
</div>


</section>

    








<div class="botonvolver">
<a href="{{ url('ListaProfesores') }}" class="btn btn-success">Volver</a>


</div>

<div class="botonregistar">
    <a href="{{ url('AgregarProfesor2') }}" class="btn btn-success">Registrar Profesores</a>
    </div>


</div>






 
</body>
</html>
