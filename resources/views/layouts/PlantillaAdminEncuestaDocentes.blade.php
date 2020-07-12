<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel ="stylesheet" href="{{asset('css/bootstrap.min.css')}}">

    <link rel="stylesheet" href="{{asset('css_personal/MenuEncuesta.css')}}">
    <link rel="stylesheet" href="{{asset('css_personal/AdicionPregunta.css')}}">
    <link rel="stylesheet" href="{{asset('css_personal/EliminarPregunta.css')}}">
    <link rel="stylesheet" href="{{asset('css_personal/MostrarProfesores.css')}}">

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    <!-- Styles -->
    <style>
        body{
            background-color: white;
        }
        .anav{
        color: black;
        font-family: "Pill Gothic 600mg Semibd", sans-serif;
        }

    </style>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<!-- UTP HEADER -->
<header style="background-image: url(../imagenes/headerutp.jpg); background-repeat: no-repeat; background-size: cover; padding: 8.3%; ">
</header>
<!--NAV NAME -->
<nav class="navbar navbar-light" style="background-color:#005B28;">
  <!-- Navbar content -->
  <a class="navbar-brand" style="color: #fff" href="#"> SECRETARIA DE LA VICEDECANA ACADEMICA </a>
</nav>
   <!-- NAV PRINCIPAL -->

<nav class="navbar navbar-expand-sm justify-content-center navbar-light sticky-top" style="font-family: Pill Gothic 600mg Semibd; sans-serif; background-color:  rgba(80, 78, 78, 0.233);">
  <ul class="navbar-nav">
    <li class="nav-item" >
      <a class="navbar-link anav" href="MenuEncuesta" ><img src="../icons/home.svg" alt="home SVG" >  INICIO</a>
    </li>
    <div Style="width: 50px;"></div>
    <li class="nav-item" >
      <a class="navbar-link anav" href="MenuEncuesta" ><img src="../icons/cerrar_sesion.svg" alt="home SVG" >  CERRAR SESION</a>
    </li>
    <div Style="width: 50px;"></div>
  </ul>
</nav>

<body>

    @yield('content')

    <script src="{{asset('js/bootstrap.min.js')}}"></script>
</body>

</html>
