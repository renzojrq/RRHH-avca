@extends('admin.layouts.admin')

@section('content')
<div class="container fuente-contenido">
	<div class="card">
   	 <div class="card-header">
        <legend>Aspirantes</legend>
     </div>
    <div class="card-block">
      <fieldset>
    <!-- <div class="dropdown show">-->
<div class="input-group input-group-md mb-3 col-md-8 margin-center">

  <div class="input-group input-group-prepend">
    <span class="input-group-text thead-label-sm" id="inputGroup-sizing-sm">Vacante a Consultar</span>
    <input class="form-control"  list="mylist"/>   
  </div>

  <datalist id="mylist">
    <option>Area Operacional, Cargo Piloto</option>
    <option>Copiloto, primer oficial</option>
    <option>Sobrecargo</option>
    <option>Administrador de operaciones</option>
    <option>Mecánico</option>
    <option>Guía Caníno</option>
    <option>Operador de Tráfico</option>
  </datalist>
</div>
    </fieldset>
    @include ('admin.gerente.partials.submenu.seleccion-gerente')
<br>
<div class="text-lg-center" style="font-weight: bold;">Aspirantes Preseleccionados 
      </div>
      <br>

    <div class="col-md-7 margin-center">
    <div class="table-responsive">

      
    
    <table class="table-hover table-sm table-bordered" style="clear: both;">
                <thead class="thead-light thead-label-sm">
                  <tr>
                    <th class="col-sm-1">Fecha</th>
                    <th class="col-sm-7">Nombres y apellidos</th>
                    <th class="col-sm-1 text-sm-center">Contactar</th>
                    <th class="col-sm-1 text-sm-center">Seleccionado</th>
                    </tr>
                </thead>
                <tbody class="tbody-label-sm">
                  <tr>
                    <td>20/10/2017</td>
                    <td>Hugo Rafael Alí Zorrilla</td>
                    <td class="text-sm-center"><button type="button" class="btn btn-link" data-toggle="modal" data-target="#"><i class="fas fa-phone-square fa-2x"></i></button></td>
                    <td class="text-sm-center"><button type="button" class="btn btn-link" data-toggle="modal" data-target="#"><i class="fas fa-check-square fa-2x"></i></button></td>
                  </tr>
                                           
                  <tr>
                    <td>22/12/2017</td>
                    <td>Jesús Machado</td>
                    <td class="text-sm-center"><button type="button" class="btn btn-link" data-toggle="modal" data-target="#"><i class="fas fa-phone-square fa-2x"></i></button></td>
                  <td class="text-sm-center"><button type="button" class="btn btn-link" data-toggle="modal" data-target="#"><i class="fas fa-check-square fa-2x"></i></button></td>
                  </tr>
                  

                  </tr>
                </tbody>
              </table>
</div>
</div>
	</div>
   </div>
</div>
@endsection