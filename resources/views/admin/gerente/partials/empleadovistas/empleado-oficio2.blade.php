@extends('admin.layouts.admin')

@section('content')
<div class="container fuente-contenido">
	<div class="card">
   	 <div class="card-header">
        <legend>Empleados / Visualizar / Expediente laboral</legend>
     </div>
    <div class="card-block">
    <fieldset>
    @include ('admin.gerente.partials.submenu.empleado-vistas') 
 
<br>
  <table class="table-hover table-sm table-bordered" style="clear: both;">
                <thead class="thead-light thead-label-sm">
                  <tr>
                    <th class="col-md-2">N° Oficio</th>
                    <th class="col-md-1">F. de Oficio</th>
                    <th class="col-md-2 text-sm-center align-middle">Tipo de Oficio</th>
                    <th class="col-md-2 text-sm-center align-middle">SubTipo de Oficio</th>
                    <th class="col-md-1 text-sm-center align-middle">F.Inicio</th>
                    <th class="col-md-1 text-sm-center align-middle">F.Finalización</th>
                    <th class="col-md text-sm-center align-middle">Descripción</th>
                    <th class="col-md-1 text-sm-center align-middle">Soporte</th>
                   </tr>
                </thead>
                <tbody class="tbody-label-sm">
                  <tr>
                    <td class="align-middle">RRHH-AVCA_050-2017</td>
                    <td class="align-middle">05/05/2017</td>
                    <td class="align-middle">Reconocimiento</td>
                    <td class="align-middle">Empleado del Mes</td>
                    <td class="align-middle">01/05/2018</td>
                    <td class="align-middle">--/--/----</td>
                    <td class="align-middle">El trabajador recibio la distinción de empleado del mes</td>
                    <td class="align-middle text-md-center"><i class="fas fa-file-pdf fa-lg"></i></td>
                  </tr>
                    <tr>
                    <td class="align-middle">RRHH-AVCA_025-2017</td>
                    <td class="align-middle">10/05/2017</td>
                    <td class="align-middle">Formación</td>
                    <td class="align-middle">Consignación de título</td>
                    <td class="align-middle">10/05/2012</td>
                    <td class="align-middle">05/02/2017</td>
                    <td class="align-middle">El trabajador consigno título de Licenciado en Informática</td>
                    <td class="align-middle text-md-center"><i class="fas fa-file-pdf fa-lg"></i></td>
                  </tr>
                    <tr>
                    <td class="align-middle">RRHH-AVCA_022-2016</td>
                    <td class="align-middle">10/10/2016</td>
                    <td class="align-middle">Licencia</td>
                    <td class="align-middle">Vacaciones</td>
                    <td class="align-middle">12/10/2016</td>
                    <td class="align-middle">12/11/2016</td>
                    <td class="align-middle">Período vacacional</td>
                    <td class="align-middle text-md-center"><i class="fas fa-file-pdf fa-lg"></i></td>
                  </tr>
                  
                   </tbody>

  </table>

</fieldset>

</div>

@endsection