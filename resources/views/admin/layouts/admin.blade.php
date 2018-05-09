<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Admin Dashboard for AVCA RRHH">
  <meta name="author" content="Jerson Moreno">
  <meta name="keyword" content="Bootstrap,Admin,Template,Dashboard,Laravel">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="shortcut icon" href="img/favicon.png">

  <title>Gerencia de RRHH</title>

  <!-- Icons -->
  <link href="{{ asset('css/fa-svg-with-js.css') }}" rel="stylesheet">

  <!-- Main styles for this application -->
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <link rel="stylesheet" href="{{ asset('css/mantenimiento.css') }}">
   <link rel="stylesheet" href="{{ asset('css/w3.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/awesomplete.css') }}">

</head>

<body class="app">
<header class="app-header fixed-top">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{ route('gerente.dashboard') }}">AVCA RRHH</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#adminHeader"
            aria-controls="adminHeader" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="adminHeader">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
             aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user-circle"></i> {{ Auth::user()->name }} <span class="caret"></span>
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                       document.getElementById('logout-form').submit();">
              {{ __('Salir') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
            </form>
          </div>
        </li>
      </ul>
    </div>
  </nav>
</header>
<div class="app-body d-flex px-0" style="margin-top: 55px;">
  <aside class="sidebar sidebar-fixed bg-dark text-white pt-3 pb-5" id="style-scroll">
    <nav class="sidebar-nav">
      <ul class="nav flex-column h-100">
        <li class="nav-item">
          <a class="nav-link" style="font-size: 1.2rem; color: whitesmoke;" href="#">Gerencia de RRHH </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#captacionCollapse" role="button" aria-expanded="false" aria-controls="captacionCollapse">
            <i class="fas fa-users"></i> Captación de personal
            <i class="fas fa-caret-down" aria-hidden="true"></i>
          </a>
          <div class="collapse" id="captacionCollapse">
            <ul class="nav pl-3 flex-column">
              <li class="nav-item">
                <a href="#reclutamientoCollapse" class="nav-link" data-toggle="collapse" aria-expanded="false" aria-controls="reclutamientoCollapse">
                  Reclutamiento <i class="fas fa-caret-down" aria-hidden="true"></i>
                </a>
                <div class="collapse pl-3" id="reclutamientoCollapse">
                  <a href="{{ route('admin.gerente.partials.captacion.reclutamiento.consulta-interno')}}" class="nav-link">Interno</a>
                  <a href="#" class="nav-link">Externo</a>
                </div>
              </li>
              <li class="nav-item"><a href="{{ ROUTE('admin.gerente.partials.captacion.seleccion.aspirantes-registrados')}}" class="nav-link">Selección</a></li>
              <li class="nav-item"><a href="#" class="nav-link">Contratación</a></li>
            </ul>
          </div>
        </li>
        {{--Datos del empleado--}}
        <li class="nav-item">
          <a class="nav-link"  href="{{ route('admin.gerente.partials.empleado.empleado-nomina')}}" role="button">
            <i class="fas fa-user"></i> Datos del empleado</i>
          </a>
          
          
          
        </li>
        {{--Administracion de nominas--}}
        <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#nominaCollapse" role="button" aria-expanded="false" aria-controls="nominaCollapse">
            <i class="fas fa-file-alt"></i> Administración de nóminas
            <i class="fas fa-caret-down" aria-hidden="true"></i>
          </a>
          <div class="collapse" id="nominaCollapse">
            <ul class="nav pl-3 flex-column">
              <li class="nav-item"><a href="#" class="nav-link">Cesta ticket</a></li>
              <li class="nav-item"><a href="#" class="nav-link">Especiales</a></li>
              <li class="nav-item"><a href="#" class="nav-link">Regulares</a></li>
              <li class="nav-item"><a href="#" class="nav-link">Pasivos laborales</a></li>
            </ul>
          </div>
        </li>
        {{--Modulo de mantenimiento--}}
        <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#mantenimientoCollapse" role="button" aria-expanded="false" aria-controls="mantenimientoCollapse">
            <i class="fas fa-cog"></i> Módulo de mantenimiento
            <i class="fas fa-caret-down" aria-hidden="true"></i>
          </a>
          <div class="collapse" id="mantenimientoCollapse">
            <ul class="nav pl-3 flex-column">
              <li class="nav-item"><a href="#" class="nav-link">Cargos</a></li>
              <li class="nav-item"><a href="#" class="nav-link">Calendario feriado</a></li>
              <li class="nav-item"><a href="{{ ROUTE('admin.mantenimiento.tabulador') }}" class="nav-link">Parámetros de nóminas</a></li>
              <li class="nav-item"><a href="#" class="nav-link">Dependencias</a></li>
              <li class="nav-item"><a href="{{ route('admin.mantenimiento.sucursales') }}" class="nav-link">Sucursales</a></li>
              <li class="nav-item"><a href="#" class="nav-link">Vacantes</a></li>
            </ul>
          </div>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="fas fa-chart-line"></i>
            Reportes y estadísticas
          </a>
        </li>
                      
        <li class="nav-item"><a href="{{ route('admin.gerente.partials.empleadovistas.empleado-nomina2') }}" class="nav-link">vistas empleado</a></li>
      </ul>
    </nav>
  </aside>

  <main class="content w-100" id="app">
    {{--Breadcrumb--}}
    <ol class="breadcrumb">
      <li class="breadcrumb-item">Inicio</li>
      @yield('breadcrumb')
    </ol>
    {{--Contenedor principal--}}
    <div class="container-fluid py-3">
      @yield('content')
    </div>
  </main>

</div>

<footer class="app-footer fixed-bottom">
  ...
</footer>

<!-- Bootstrap and necessary plugins -->
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/fontawesome-all.min.js') }}"></script>
<script src="{{ asset('js/tether.min.js') }}"></script>
<script src="{{ asset('js/pace.min.js') }}"></script>
<script src="{{ asset('js/awesomplete.min.js') }}" type="text/javascript"></script>

</body>
</html>