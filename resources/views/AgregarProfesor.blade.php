<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Profesores</title>
    <link rel="stylesheet" href="{{asset('css_personal/AgregarProfesor.css')}}">
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
                        <a href="{{route('ListaProfesores')}}" class="rastro_link">Lista de profesores</a>
                    </li>
            
                    <li class="rastro_item">
                        <a href="" class="rastro_link rastro_link_activo">Agregar Profesor</a>
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

<form action="conexion.php" method="POST" class="form-register">
<h2 class="tit1">Registrar Profesor</h2>
<div class="contenedor-inputs">
Nombre:<input type="text" required="required" name="nombre" placeholder="Ingrese el Nombre" class="input-50" required>
Apellido:<input type="text" required="required" name="apellido" placeholder="Ingrese el apellido" class="input-50" required>
Cédula:<input type="text" required="required" name="cedula" placeholder="Ingrese la Cédula"  class="input-100" required>
Telefono:<input type="text" required="required" name="telefono" placeholder="Ingrese el Telefono" class="input-100" required>
Correo:<input type="text" required="required" name="Correo" placeholder="Ingrese el Correo" class="input-100" required>

<div class="form-group col-md-4">
    <label for="inputState">Sede: </label>
    <select id="inputState" class="form-control">
        <option disabled selected>Ninguno seleccionado</option>               
        <option value="1">Campus Metropolitano “Dr. Víctor Levi Sasso”</option>
        <option value="2">Centro Regional de Azuero</option>
        <option value="3">Centro Regional de Bocas del Toro</option>
        <option value="5">Centro Regional de Coclé</option>
        <option value="6">Centro Regional de Colón</option>
        <option value="4">Centro Regional de Chiriquí</option>
        <option value="8">Centro Regional de Panamá Oeste</option>
        <option value="7">Centro Regional de Veraguas</option>
    </select>
  </div>


<input type="submit" value="Registrar" class="btn-enviar">
 </div> 



</form>


<div > 
    <a href="{{route('MenuEncuesta')}}" class="btn btn-success">Volver</a>

</div>

  </div>




    
</body>
</html>