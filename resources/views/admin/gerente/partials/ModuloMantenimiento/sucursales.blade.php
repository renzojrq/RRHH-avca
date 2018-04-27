@extends('admin.layouts.admin')

@section('content')
<div class="container fuente-contenido">
	<div class="card">
    <div class="card-header">
          <legend>Sucursales</legend>
    </div>
    <div class="card-block">
        <fieldset>

	
		<br>
		<div class="margin-center col-md-10">
			<div class="table-responsive" >
			
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#nuevasucursal" style="float: right; margin-bottom: 10px;"> <i class="fas fa-plus-square"> </i> Sucursal</button>
			       <table class="table-hover table-sm table-bordered" style="clear: both;">
			          <thead class="thead-light thead-label-sm">
			            <tr>
			              <th class="col-md-5">Sucursal</th>
			              <th class="col-md-2 align-middle">Ciudad</th>
			              <th class="col-md-1 align-middle">Tipo</th>
			              <th class="col-md-1 align-middle">Estatus</th>
			              <th class="col-md-1 text-sm-center"> - </th>
			            </tr>
			          </thead>
			          <tbody class="tbody-label-sm">
			            <tr>
			              <td>Antonio José de Sucre</td>
			              <td class="align-middle">Cumaná</td>
			              <td class="align-middle">Operativa</td>
			              <td class="align-middle">Activa</td>
			              <td class="text-sm-center"><button type="button" class="btn btn-info" data-toggle="modal" data-target="#sucursal"><i class="fas fa-cog"></i></button></td>
			            </tr>
			            <tr>
			              <td>La fria</td>
			              <td class="align-middle">Tachira</td>
			              <td class="align-middle">Comercial</td>
			              <td class="align-middle">Activa</td>
			              <td class="text-sm-center"><button type="button" class="btn btn-info" data-toggle="modal" data-target="#sucursal"><i class="fas fa-cog"></i></button></td>

			            </tr>
			            <tr>
			              <td >Maiquetía</td>
			              <td class="align-middle">Vargas</td>
			              <td class="align-middle">Operativa</td></td>
			              <td class="align-middle">Activa</td>
			              <td class="text-sm-center"><button type="button" class="btn btn-info" data-toggle="modal" data-target="#sucursal"><i class="fas fa-cog"></i></button></td>
			            </tr>
			          </tbody>
			        </table>

			      </div>
			</div>
		</fieldset>
		</div>
		</div>
	</div>
</div>


			<!-- Modal Actualizar Sucursal-->
	<div class="modal fade" id="sucursal" tabindex="-1" role="dialog" aria-labelledby="sucursal" aria-hidden="true" class="fondo-modal">
		<div class="modal-dialog modal-dialog-centered" role="document">
		    <div class="modal-content">
		     <div class="modal-header color-cabecera">
			 <h5 class="modal-title" id="exampleModalLongTitle">Actualizar Sucursales</h5>
			 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			 <span aria-hidden="true">&times;</span>
			 </button>
			 </div>
		<div class="modal-body">
	 
	 		<form class="form-group">
 				
 				<div class="form-group">	
                    <label for="">Sucursal:</label>
                    <input type="text" class="form-control" id="codigo"  name="clave"
                    readonly="" value="Antonio José de Sucre">
				</div>

               <div class="form-group">	
                    <label for="">Ciudad:</label>
                    <input type="text" class="form-control" id="codigo"  name="clave"
                    readonly="" value="Cumaná">
				</div>

                <div class="input-group-prepend mb-3">
                  <div class="input-group-prepend col-6">
                    <select class="custom-select" id="inputGroupSelect01">
                        <option selected>Estatus</option>
                        <option value="1">Activa</option>
                        <option value="2">Inactiva</option>
                    </select>
                   </div>
                 <div class="input-group-prepend col-6">
                    <select class="custom-select" id="inputGroupSelect01">
                    <option selected>Tipo</option>
                    <option value="operativa">Operativa</option>
                    <option value="comercial">Comercial</option>
                    </select>
                  </div>
                </div>

		   
		    </form>
		</div>
		    <div class="modal-footer">
		     
		       <button type="submit" class="btn btn-primary centrado-boton">Guardar</button>
		     </div> 
  
			      
			    </div>
			  </div>
			</div>
			</div>

			<!-- Modal Nueva Sucursal-->
		<div class="modal fade" id="nuevasucursal" tabindex="-1" role="dialog" aria-labelledby="nuevasucursal" aria-hidden="true" class="fondo-modal">
			  <div class="modal-dialog modal-dialog-centered" role="document">
			    <div class="modal-content">
			      <div class="modal-header color-cabecera">
			        <h5 class="modal-title" id="exampleModalLongTitle">Agregar Sucursales</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      <div class="modal-body">

    	 <form class="form-group">
  
		    <div class="form-group">
		    <label for="">Sucursal:</label>
		    <input type="text" class="form-control" id="codigo" placeholder="Ingrese Sucursal " name="clave">
		    	
		    </div>
		    <div class="form-group">
		    <label for="">Ciudad:</label>
		    <input type="text" class="form-control" id="nombre" placeholder="Ingrese Ciudad" name="nombre">
		    </div>

                <div class="input-group-prepend mb-3">
                  <div class="input-group-prepend col-6">
                    <select class="custom-select" id="inputGroupSelect01">
                        <option selected>Estatus</option>
                        <option value="1">Activa</option>
                        <option value="2">Inactiva</option>
                    </select>
                   </div>
                 <div class="input-group-prepend col-6">
                    <select class="custom-select" id="inputGroupSelect01">
                    <option selected>Tipo</option>
                    <option value="1">Operativa</option>
                    <option value="2">Comercial</option>
                    </select>
                  </div>
                </div>


		  			</form>
  			</div>
			    <div class="modal-footer">
			       <button type="submit" class="btn btn-primary centrado-boton">Guardar</button>
			     </div> 
    </div>
  </div>
</div>
			</div>

@endsection
