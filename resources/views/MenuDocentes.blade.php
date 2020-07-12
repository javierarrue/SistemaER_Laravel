<!DOCTYPE html>
<html lang="en" class="htmlbg">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Encuesta de Docentes</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel ="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <!-- Styles -->
    <link href="{{ asset('css/menueg.css') }}" rel="stylesheet">
</head>
<body>
<img src="{{asset ('imagenes/fisc.png')}}" class="imglge1">
<img src="{{asset ('imagenes/utplogo.png')}}" class="imglge">

<form action="EncuestaDocentes">
<button href="{{route('EncuestaDocentes')}}" id="startBtn" class="butonenc"><h3>RESOLVER ENCUESTA DE DOCENTES</h3></button>
</form>


</body>


</html>
