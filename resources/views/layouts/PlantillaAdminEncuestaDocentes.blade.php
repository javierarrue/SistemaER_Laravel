<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>Sistema Encuesta a Docentes</title>


  <link rel="stylesheet" href="{{asset('Modulo_docentes/css_personal/MenuEncuesta.css')}}">
    <link rel="stylesheet" href="{{asset('Modulo_docentes/css_personal/AdicionPregunta.css')}}">
    <link rel="stylesheet" href="{{asset('Modulo_docentes/css_personal/MostrarProfesores.css')}}">

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>



  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>

  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">

  @yield('styles')
<style>
*{
    margin:0;
    padding: 0;
}

body{
    font-family: Arial, Helvetica, sans-serif;
}

</style>

</head>
<!-- UTP HEADER -->
<header style="background-image: url(../imagenes/headerutp.jpg); background-repeat: no-repeat; background-size: cover; padding: 8.3%; ">
</header>
<nav>
  <!--NAV NAME -->

  <!-- NAV PRINCIPAL -->
  <nav class="navbar navbar-light" style="background-color:#005B28;">
    <!-- Navbar content -->
    @yield('navbar')
  </nav>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup" style="display:flex; align-items: center; justify-content: center;">
      <div class="navbar-nav">

        <img src="../icons/home.svg" alt="home SVG">
        <a class="nav-item nav-link  mr-3" href="/modulos">INICIO</a>

        <li class="nav-item dropdown mr-3">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          MANTENIMIENTO
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="{{asset('P_MenuInicial')}}">Menu Inicial</a>
        <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="{{asset('ActualizarPregunta')}}">Actualizar pregunta</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="{{asset('AdicionarPregunta')}}">Añadir pregunta</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="{{asset('EliminarPregunta')}}">Eliminar pregunta</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="{{url('ListaProfesores/AgregarProfesor')}}">Agregar Docente</a>
        </div>
      </li>

      <li class="nav-item dropdown mr-3">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          CONSULTAS
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{url('ListaProfesores/MostrarProfesores')}}#">Lista de docentes</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="{{url('P_ProfesoresRespondido')}}">Docentes que han contestado encuesta</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="{{url('P_ProfesoresSinResponder')}}">Docentes que no han contestado encuesta</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="{{asset('ConsultarPreguntas')}}">Consultar Preguntas</a>
        </div>
      </li>

        <img src="../icons/cerrar_sesion.svg" alt="home SVG">
        <a class="nav-item nav-link" href="#!">  CERRAR SESION</a>

      </div>
    </div>
  </nav>
</nav>

<body>
  <div class="container-fluid">
    <div class="row">
      <div class="col-4">
        <div class="d-flex flex-column mb-4 justify-content-center">
            <img src="imagenes/IMGWEB1.jpg" alt="" width="350">
            <img src="imagenes/IMGWEB.jpg" alt="" width="350" class="mt-2">
        </div>
      </div>
      <div class="col-8">
      @yield('content')
      </div>
    </div>
  </div>
</body>

<script src="{{asset('js/bootstrap.min.js')}}"></script>
@yield('scripts')
</html>


