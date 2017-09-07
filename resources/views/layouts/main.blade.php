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
  <link href="{{ asset('css/export.css') }}" rel="stylesheet">

  <style>
    
    footer{
    background:#2A2A2C;
   color:#8C8E8F;
   padding:5px;
   text-align: center
    }


  </style>



  
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
            <li><a href="{{url('morb_gru')}}">Por Grupos CIE-10</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="{{url('morb_cat')}}">Por Categorias CIE-10</a></li>
            <li><a href="{{url('morb_enf')}}">Por Enfermedades CIE-10</a></li>
          </ul>
        </li>


        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Morbilidad por Micro Redes<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="{{url('morb_cap_micro')}}">Por Capitulos CIE-10</a></li>
            <li><a href="{{url('morb_gru_micro')}}">Por Grupos CIE-10</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="{{url('morb_cat_micro')}}">Por Categorias CIE-10</a></li>
            <li><a href="{{url('morb_enf_micro')}}">Por Enfermedades CIE-10</a></li>
          </ul>
        </li>

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Morbilidad por Establecimiento<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="{{url('morb_cap_estab')}}">Por Capitulos CIE-10</a></li>
            <li><a href="{{url('morb_gru_estab')}}">Por Grupos CIE-10</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="{{url('morb_cat_estab')}}">Por Categorias CIE-10</a></li>
            <li><a href="{{url('morb_enf_estab')}}">Por Enfermedades CIE-10</a></li>
          </ul>
        </li>


        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Graficos<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="{{url('graf_cap_estab')}}">10 Primeras Causas por Capitulos CIE-10</a></li>
            <li><a href="{{url('graf_gru_estab')}}">10 Primeras Causas por Grupos CIE-10</a></li>
            <li><a href="{{url('graf_cat_estab')}}">10 Primeras Causas por Categorias CIE-10</a></li>
            <li><a href="{{url('graf_enf_estab')}}">10 Primeras Causas por Enfermedades CIE-10</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="{{url('graf_anl_estab')}}">Grafico Morbilidad Micro Red/EESS </a></li>


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


  <script src="{{ asset('js/amcharts.js') }}"></script>
  <script src="{{ asset('js/serial.js') }}"></script>
  <script src="{{ asset('js/export.min.js') }}"></script>
  <script src="{{ asset('js/light.js') }}"></script>
  @yield('script')
</div>


<div class="footer">
    <footer>
    <center>
        <h6> &copy; Red de Servicios de Salud Cusco Norte 2017 Derechos Reservados Ing. Abel Laurente </h6>
    </center>
    </footer>
</div>    




  <!--<script src="{{ asset('js/app.js') }}"></script>-->
  
  
</body>
</html>


