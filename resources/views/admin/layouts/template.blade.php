<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Admin Layout</title>
    <link rel="stylesheet" href="{{ asset('css/fa-svg-with-js.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        .nav-link {
            color: white;
        }
        .nav-link:hover {
            color: whitesmoke;
        }
        
    </style>
</head>
<body>
    <header class="admin-header">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <a class="navbar-brand" href="#">RRHH</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
              </li>              
          </div>
        </nav>
    </header>

    <div class="container-fluid px-0">
        <div class="row no-gutters">
            <div class="col-12 col-lg-2">                
                <aside>
                    <ul class="nav bg-dark flex-column text-white" style="min-height: 100vh; flex: 1;">
                        <li class="nav-item text-center py-3 text-uppercase">Módulo RRHH</li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#captacionPersonal" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="captacionPersonal">
                                Captación de personal
                                <i class="fas fa-caret-down"></i>
                            </a>
                            <div class="collapse" id="captacionPersonal">
                                <a href="#" class="nav-link">Reclutamiento</a>
                                <a href="#" class="nav-link">Selección</a>
                                <a href="#" class="nav-link">Contratación</a>
                                <a href="#" class="nav-link">Movimientos de empleado</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Item 2</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Item 3</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#">Item 4</a>
                        </li>
                    </ul>  
                </aside>
            </div>
            <div class="col-12 col-lg-10">                
                {{-- Breadcrumb --}}              
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Library</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Data</li>
                    </ol>
                </nav>

                {{-- Seccion principal --}}
                <main class="main" id="app">
                    <div class="container">
                        @include('admin.gerente.partials.captacion.contratacion')
                    </div>
                </main>
            </div>

        </div>
    </div>

    <footer class="footer">

    </footer>

    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/fontawesome-all.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap-filestyle.min.js') }}"></script>
    <script src="{{ asset('js/vue.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('js/axios.min.js') }}">
    <script src="{{ asset('js/rrhh.js') }}"></script>
    @yield('scripts')
</body>
</html>