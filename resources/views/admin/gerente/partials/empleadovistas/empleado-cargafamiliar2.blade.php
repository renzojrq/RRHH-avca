@extends('admin.layouts.admin')

@section('content')
<div class="container fuente-contenido">
	<div class="card">
   	 <div class="card-header">
        <legend>Empleados / Visualizar / Carga familiar</legend>
     </div>
    <div class="card-block">
     <fielset>


    
    @include ('admin.gerente.partials.submenu.empleado-vistas')
    <br>

<!--<h3 style="text-align: center;">Actualizar Carga familiar</h3>-->

	
<div class="margin-center col-md-10">	
<div class="table-responsive" >
		
  <table class="table-hover table-sm table-bordered" style="clear: both;">
                <thead class="thead-light thead-label-sm">
                  <tr>
                    <th class="col-md-2">C.I.</th>
                    <th class="col-md-4">Nombres y apellidos</th>
                    <th class="col-md-1 text-sm-center align-middle">F. de Nac.</th>
                    <th class="col-md-1 text-sm-center align-middle">Sexo</th>
                    <th class="col-md-1 text-sm-center align-middle">Parentesco</th>
                   </tr>
                </thead>
                <tbody class="tbody-label-sm">
                  <tr>
                    <td class="align-middle">V21564987</td>
                    <td class="align-middle">Hugo Rafael Alí Zorrilla</td>
                    <td class="align-middle">30/10/1993</td>
                    <td class="align-middle">Masculino</td>
                    <td class="align-middle">Hermano</td>
                  </tr>
                  
                   </tbody>

	</table>

</fieldset>
</div></div></div>




@endsection