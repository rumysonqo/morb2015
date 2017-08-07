<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>@yield('title')</title>
  <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link href="{{ asset('css/dataTables.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/Tablas.css') }}" rel="stylesheet">
  <link href="{{ asset('css/AdminLTE.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">

  
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand active">Red Cusco Norte</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="{{url('/')}}">Inicio</a></li>

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Morbilidad General<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="{{url('morb_cap')}}">Por Capitulos CIE-10</a></li>
            <li><a href="{{url('mic_datos/2014')}}">Por Grupos CIE-10</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="{{url('graf_prov_2014')}}">Por Categorias CIE-10</a></li>
            <li><a href="{{url('graf_mic_2014')}}">Por Enfermedades CIE-10</a></li>
          </ul>
        </li>


        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Morbilidad por Micro Redes<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="{{url('prov_datos/2015')}}">Por Provincia/Distrito</a></li>
            <li><a href="{{url('mic_datos/2015')}}">Por Micro Red/Establecimiento</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="{{url('graf_prov_2015')}}">Grafico por Provincia</a></li>
            <li><a href="{{url('graf_mic_2015')}}">Grafico por Micro Red</a></li>
          </ul>
        </li>

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Morbilidad por Establecimiento<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="{{url('prov_datos/2016')}}">Por Provincia/Distrito</a></li>
            <li><a href="{{url('mic_datos/2016')}}">Por Micro Red/Establecimiento</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="{{url('graf_prov_2016')}}">Grafico por Provincia</a></li>
            <li><a href="{{url('graf_mic_2016')}}">Grafico por Micro Red</a></li>
          </ul>
        </li>


        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Anemia 2017<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="{{url('prov_datos/2017')}}">Por Provincia/Distrito</a></li>
            <li><a href="{{url('mic_datos/2017')}}">Por Micro Red/Establecimiento</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="{{url('prov_graf_prov')}}">Grafico por Provincia</a></li>
            <li><a href="{{url('graf_mic')}}">Grafico por Micro Red</a></li>
          </ul>
        </li>
        
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div class="container">
    @yield('content')
</div>

<div class="script">
  <script src="{{ asset('js/jquery-3.2.1.js') }}"></script>
  <script src="{{ asset('js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('js/dataTables.min.js') }}"></script>
  <script src="{{ asset('js/highcharts.js') }}"></script>
  <script src="{{ asset('js/highcharts-3d.js') }}"></script>
  <script src="{{ asset('js/exporting.js') }}"></script>
  @yield('script')
</div>


<div class="footer">
    <footer>
    <center>
        <h6> &copy; Red de Servicios de Salud Cusco Norte 2016 Derechos Reservados </h6>
    </center>
    </footer>
</div>
    




  <!--<script src="{{ asset('js/app.js') }}"></script>-->
  
  
</body>
</html>


