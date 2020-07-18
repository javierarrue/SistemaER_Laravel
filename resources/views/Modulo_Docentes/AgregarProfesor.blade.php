

@extends('layouts.PlantillaAdminEncuestaDocentes')

@section('content')

<div class="mt-5">

<form action="ingresar_profesores" method="POST" class="form-register">
@csrf
<h2>Registrar Profesor</h2>
<div class="contenedor-inputs">
@if ($errors->any())
                      <Div class="alert alert-danger">
                         <Ul>
                             @foreach ($errors->all() as $error)
                             <Li>{{$error}}</Li>
                             @endforeach
                         </Ul>

                      </Div>
@endif
Nombre:<input type="text" required="required" name="nombre" placeholder="Ingrese el Nombre" class="input-50" required>
Apellido:<input type="text" required="required" name="apellido" placeholder="Ingrese el apellido" class="input-50" required>
Cédula:<input type="text" required="required" name="cedula" placeholder="Ingrese la Cédula"  class="input-100" required>
Telefono:<input type="text" required="required" name="telefono" placeholder="Ingrese el Telefono" class="input-100" required>
Correo:<input type="text" required="required" name="correo" placeholder="Ingrese el Correo" class="input-100" required>

<div class="form-group col-md-6">
    <label for="inputState">Sede: </label>
    <select id="inputState" name="id_sede" class="form-control">
        <option disabled selected>Ninguno seleccionado</option>
        <option value="1">Campus Metropolitano “Dr. Víctor Levi Sasso”</option>
        <option value="2">Centro Regional de Azuero</option>
        <option value="3">Centro Regional de Bocas del Toro</option>
        <option value="4">Centro Regional de Coclé</option>
        <option value="5">Centro Regional de Colón</option>
        <option value="6">Centro Regional de Chiriquí</option>
        <option value="7">Centro Regional de Panamá Oeste</option>
        <option value="8">Centro Regional de Veraguas</option>
    </select>
  </div>


<input type="submit" value="Registrar" class="btn btn-primary ">

 </div>



</form>


    <a href="{{route('ListaProfesores')}}" class="btn btn-primary btn-lg m-4">Volver</a>


  </div>

@endsection
