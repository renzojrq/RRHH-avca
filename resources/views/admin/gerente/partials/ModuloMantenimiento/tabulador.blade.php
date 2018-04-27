@extends('admin.layouts.admin')

@section('content')
<div class="container fuente-contenido">
	<div class="card">
    <div class="card-header">
          <legend>Parámetros de Nómina</legend>
    </div>
    <div class="card-block">
        <fieldset>

		@include('admin.gerente.partials.submenu.parametros-nomina')

		<br>
					
			
					<div class="col-md-8 margin-center">
							<div class="table-responsive" >
				
			       <table class="table-hover table-sm table-bordered col" style="clear: both;">
			          <thead class="thead-light thead-label-sm">
			            <tr>

			              <th class="col-md-1">Id</th>
			              <th class="col-md-2">Nivel</th>
			              <th class="col-md-3 text-sm-center">Interescala %</th>
			              <th class="col-md-4 text-sm-center">Sueldo Básico</th>
			              <th class="col-md-2 text-sm-center"> - </th>
			              </tr>
			          </thead>
			          <tbody class="tbody-label-sm">
			            <tr>
			              <td class="align-middle">101</td>
			              <td class="align-middle">Auxiliar</td>
			              <td class="align-middle text-sm-center">0</td>
			              <td class="align-middle text-sm-center">1000000</td>
			              <td class="text-sm-center"><button type="button" class="btn btn-info" data-toggle="modal" data-target="#actualizartabulador"><i class="fas fa-sync"></i></button></td>
			            </tr>
			            
			            <tr>
			              <td class="align-middle">201</td>
			              <td class="align-middle">Técnico III</td>
			              <td class="align-middle text-sm-center">10</td>
			              <td class="align-middle text-sm-center">1100000</td>
			              <td class="text-sm-center"><button type="button" class="btn btn-info" data-toggle="modal" data-target="#actualizartabulador"><i class="fas fa-sync"></i></button></td>
			            </tr>
			            
			            <tr>
			              <td class="align-middle">202</td>
			              <td class="align-middle">Técnico II</td>
			              <td class="align-middle text-sm-center">10</td>
			              <td class="align-middle text-sm-center">1210000</td>
			              <td class="text-sm-center"><button type="button" class="btn btn-info" data-toggle="modal" data-target="#actualizartabulador"><i class="fas fa-sync"></i></button></td>

			            </tr>
			            <tr>
			              <td class="align-middle">203</td>
			              <td class="align-middle">Ténico I</td>
			              <td class="align-middle text-sm-center">10</td>
			              <td class="align-middle text-sm-center">1331000</td>
			              <td class="text-sm-center"><button type="button" class="btn btn-info" data-toggle="modal" data-target="#actualizartabulador"><i class="fas fa-sync"></i></button></td>

			            </tr>
			          </tbody>
			        </table>
		     </div>

			      </div>
		</div>
			
		</div>
</fieldset>
</div>
</div>

		</div>
	</div>
</div>
			<!-- Modal Configurar Conceptos-->

		<div class="modal fade" id="actualizartabulador" tabindex="-1" role="dialog" aria-labelledby="actualizartabulador" aria-hidden="true" class="fondo-modal">
			  <div class="modal-dialog modal-dialog-centered" role="document">
			    <div class="modal-content">
			      <div class="modal-header color-cabecera">
			        <h5 class="modal-title" id="exampleModalLongTitle">Actualizar Nivel de Tabulador Salarial</h5>

			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>

	<div class="modal-body">
		 <form class="form-group">
   
		    <div class="form-group">
		    <label for="">ID:</label>
		    <input type="text" class="form-control" id="id" name="idnivel" readonly="" value="101" readonly="">
		    </div>

		    <div class="form-group">
		    <label for="">Nivel</label>
		    <input type="text" class="form-control" id="valor" name="nombre" value="Auxiliar" readonly="">
		    </div>

		    <div class="form-group">
		    <label for="">% Interescala</label>
		    <input type="text" class="form-control" id="montofijo" name="nombre" value="0">
		    </div>

		    <div class="form-group">
		    <label for="">Sueldo Básico</label>
		    <input type="text" class="form-control" id="sueldobasico" name="nombre" value="1000000">
		    </div>
	    </form>
	</div>
		    <div class="modal-footer">
		        <button type="submit" class="btn btn-primary centrado-boton">Actualizar</button>
		    </div> 
  	
			</div>
			</div>
			</div>
			</div>

@endsection
