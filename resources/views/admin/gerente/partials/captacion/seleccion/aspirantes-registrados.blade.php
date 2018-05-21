@extends('admin.layouts.admin')

@section('content')
<div class="container fuente-contenido">
	<div class="card">
   	 <div class="card-header">
        <legend>Vacantes Activas</legend>
     </div>
    <div class="card-block">

<!-- <div class="dropdown show">-->
<div class="container" style="background-color: #CAD7F8">
<h3>Filtrar vacantes por:</h3>
<div class="form-inline">
  <div class="input-group mb-3 col-md-4">
  <div class="input-group-prepend">
    <span class="input-group-text" style="font-weight: bold;" id="basic-addon2">Sucursal</span>
    </div>
    <input type="text" class="form-control" placeholder="Buscar en Sucursal" aria-label="Username" aria-describedby="basic-addon2" list="lista-sucursal"/>  
  </div>

  <div class="input-group mb-3 col-md-4">
  <div class="input-group-prepend">
    <span class="input-group-text" style="font-weight: bold;" id="basic-addon2">Área</span>
    </div>
    <input type="text" class="form-control" placeholder="Buscar en Área" aria-label="Username" aria-describedby="basic-addon2" list="lista-area"/>  
  </div>

  <div class="input-group mb-3 col-md-4">
  <div class="input-group-prepend">
    <span class="input-group-text" style="font-weight: bold;" id="basic-addon2">Cargo</span>
    </div>
    <input type="text" class="form-control" placeholder="Buscar en Cargo" aria-label="Username" aria-describedby="basic-addon2" list="lista-cargos"/>  
  </div>

<datalist id="lista-cargos">
  <option>Apoyo de asuntos Legales</option>
  <option>Técnico de Refrigeración</option>
  <option>Archivista</option>
  <option>Analísta de Nómina</option>
  <option>Secretaria Ejecutiva</option>
  <option>Administrador de Empresas</option>
  <option>Magister en RRHH</option>
  <option>Recepcionista</option>
  <option>Agente de Tráfico</option>
  <option>Supervisor de Rampa</option>
  <option>Director de Logística</option>
  <option>Director de Marketing</option>
  <option>Mecánico</option> 
</datalist>

<datalist id="lista-sucursal">
    <option>Antonio José de Sucre</option>
    <option>José Antonio Anzoátegui</option>
    <option>La Chinita</option>
    <option>Arturo Michelena</option>
    <option>Manuel Piar</option>
    <option>Jacinto Lara</option>
    <option>Juan Pablo Pérez Alfonso</option>
    <option>José Tadeo Monagas</option>
    <option>Santiago Mariño</option>
    <option>Simón Bolívar</option>
    <option>Cacique Arame</option>
    <option>Don Edmundo Barrios</option>
    <option>Las Flecheras</option>
    <option>Luisa Caceres de Arismendi</option>
    <option>Tomas de Heres</option>
    <option>Josefa Camejo</option>
  </datalist>

  <datalist id="lista-area">
    <option>Operacional</option>
    <option>Administrativa</option>
    <option>Telemática</option>
    <option>Oficina</option>
    <option>Tripulación</option>
    <option>Logística</option>
  </datalist>
</div>
</div>

	
    <br>
    <div class="text-lg-center" style="font-weight: bold;">Vacantes</div>
      <br>
    
    <div class="margin-center col-md-8">
       
    <div class="w3-responsive" >



<table class="table table-striped category-table">
              <thead>
              <tr>
                <th>Cargo</th>
                <th>Sucursal</th>
                <th>Fecha de publicación</th>
                <th>&nbsp;</th>
              </tr>
              </thead>
              <tbody>
              @foreach($vacantes as $vacante)
                <tr>
                  <td class="text-capitalize">{{ $vacante->titulo }}</td>
                  <td>{{ $vacante->nombre }}</td>
                  <td>{{ Carbon\Carbon::parse($vacante->fecha_publicacion)->format('d/m/Y')  }}</td>
                  <td>
                    <a href="{{ route('perfil.show', [$vacante->vacante_id, $vacante->cargo_id]) }}" class="btn btn-info btn-sm text-white">
                      <i class="fas fa-arrow-right"></i>
                    </a>
                  </td>
                </tr>
              @endforeach
              </tbody>
            </table>
    
	<!--  <table class="w3-table-all w3-small w3-border " style="clear: both;">
                <thead class="thead-light  thead-label-sm">
                  <tr>
                    <th class="align-middle w3-light-gray col-md-1 w3-border">Fecha</th>
                    <th class="align-middle w3-light-gray col-md-4 w3-border">Nombres y apellidos</th>
                    <th class="col-md-1 w3-light-gray text-sm-center w3-border">Curriculum Vitae</th>
                    <th class="col-md-2 w3-light-gray text-sm-center w3-border">Verificar</th>
                    </tr>
                </thead>
                <tbody class="tbody-label-sm">
                  <tr>
                    <td class="align-middle">20/10/2017</td>
                    <td class="align-middle">Hugo Rafael Alí Zorrilla</td>
                    <td class="text-sm-center">
                      <button type="button" class="btn btn-outline-info">C.V. PDF</button>

                    </td>
                    <td><div class="text-center" >
                        <button type="button" class="btn btn-link"></button>
                        <button type="button" class="btn btn-link"></button>
                        </div></td>
                  </tr>
                  
                  <tr>
                    <td class="align-middle">22/12/2017</td>
                    <td class="align-middle">Leomar Alexander Esparragoza</td>
                    <td class="text-sm-center"><button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#actualizartabulador">C.V. PDF </button></td>
                    <td><div class="text-center" >
                        <button type="button" class="btn btn-link"><i class="far fa-times-circle fa-1x" style="color: gray"> </i> </button>
                        <button type="button" class="btn btn-link"><i class="far fa-check-circle fa-1x" style="color: #B6C3E5"></i> </button>
                        </div></td>

                  </tr>
                  
                  <tr>
                    <td class="align-middle">22/12/2017</td>
                    <td class="align-middle">Jesús Machado</td>
                    <td class="text-sm-center"><button type="button" class="btn btn-link" data-toggle="modal" data-target="#actualizartabulador"><i class="far fa-file-pdf fa-2x"></i></button></td>
                    <td><div class="text-center" >
                        <button type="button" class="btn btn-link"><i class="far fa-times-circle fa-2x" style="color: gray"> </i> </button>
                        <button type="button" class="btn btn-link"><i class="far fa-check-circle fa-2x" style="color: #b6c3e5"></i> </button>
                        </div></td>


                  </tr>
                  <tr>
                    <td class="align-middle">10/01/2018</td>
                    <td class="align-middle">Pedro Russo</td>
                    <td class="text-sm-center"><button type="button" class="btn btn-link" data-toggle="modal" data-target="#actualizartabulador"><i class="far fa-file-pdf fa-2x"></i></button></td>
                    <td><div class="text-center" >
                        <button type="button" class="btn btn-link"><i class="far fa-times-circle fa-2x" style="color: gray"> </i> </button>
                        <button type="button" class="btn btn-link"><i class="far fa-check-circle fa-2x" style="color: #B6C3E5"></i> </button>
                        </div></td>

                  </tr>
                </tbody>
              </table>-->
<p>Aquí va el listado de vacantes activas cada una con un enlace que lleve a sus respectivos aspirantes</p>

        </div>
  </div></div>
	</div>
  </div>
  </div>

@endsection