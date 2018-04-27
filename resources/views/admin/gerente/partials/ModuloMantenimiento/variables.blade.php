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
			<div class="margin-center col-md-8">
				<div class="table-responsive" >
				
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#nuevavariable" style="float: right; margin-bottom: 10px;"> <i class="fas fa-plus-square"> </i> Variable</button>
			       <table class="table-hover table-sm table-bordered col" style="clear: both;">
			          <thead class="thead-light thead-label-sm">
			            <tr>
			              <th class="col-md-3">Nombre</th>
			              <th class= "col-md-1 text-sm-center">Valor%</th>
			              <th class= "col-md-1 text-sm-center">Monto Fijo</th>
			              <th class= "col-md-1 text-sm-center">Base de Cálculo</th>
			              <th class= "col-md-1 text-sm-center">N° Días</th>
			              <th class= "col-md-1 text-sm-center"> - </th>
			              </tr>
			          </thead>
			          <tbody class="tbody-label-sm">
			            <tr>
			              <td class="align-middle">Unidad Tributaria</td>
			              <td class="align-middle text-sm-center">N/A</td>
			              <td class="align-middle text-sm-center">500000,00</td>
			              <td class="align-middle text-sm-center">N/A</td>
			              <td class="align-middle text-sm-center">N/A</td>
			              <td class="text-sm-center"><button type="button" class="btn btn-info" data-toggle="modal" data-target="#configurarvariable"><i class="fas fa-cog"></i></button></td>
			            </tr>
			            <tr>
			              <td class="align-middle">Recargo por hora extra</td>
			              <td class="align-middle text-sm-center">50</td>
			              <td class="align-middle text-sm-center">N/A</td>
			              <td class="align-middle text-sm-center">N/A</td>
			              <td class="align-middle text-sm-center">N/A</td>
			              <td class="text-sm-center"><button type="button" class="btn btn-info" data-toggle="modal" data-target="#configurarvariable"><i class="fas fa-cog"></i></button></td>

			            </tr>
			            <tr>
			              <td class="align-middle">Recargo por hora nocturna</td>
			              <td class="align-middle text-sm-center">30</td>
			              <td class="align-middle text-sm-center">N/A</td>
			              <td class="align-middle text-sm-center">N/A</td>
			              <td class="align-middle text-sm-center">N/A</td>
			              <td class="text-sm-center"><button type="button" class="btn btn-info" data-toggle="modal" data-target="#configurarvariable"><i class="fas fa-cog"></i></button></td>

			            </tr>
			            <tr>
			              <td class="align-middle">Recargo por día feriado</td>
			              <td class="align-middle text-sm-center">30</td>
			              <td class="align-middle text-sm-center">N/A</td>
			              <td class="align-middle text-sm-center">N/A</td>
			              <td class="align-middle text-sm-center">N/A</td>
			              <td class="text-sm-center"><button type="button" class="btn btn-info" data-toggle="modal" data-target="#configurarvariable"><i class="fas fa-cog"></i></button></td>

			            </tr>
			          </tbody>
			        </table>
</div>
			      </div>
		</div>
</fieldset>
		</div>
	</div>
</div>
			<!-- Modal Configurar Conceptos-->
		<div class="modal fade" id="configurarvariable" tabindex="-1" role="dialog" aria-labelledby="configurarvariable" aria-hidden="true" class="fondo-modal">
			  <div class="modal-dialog modal-dialog-centered" role="document">
			    <div class="modal-content">
			      <div class="modal-header color-cabecera">
			        <h5 class="modal-title" id="exampleModalLongTitle">Configurar Variable de Nómina</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      <div class="modal-body">
	 <form class="form-group">
   			<div class="form-group">	

		    <label for="">Nombre:</label>
		    <input type="text" class="form-control" id="nombre" name="clave" readonly="" value="Unidad Tributaria">
		    </div>
		    <div class="form-group">	

		    <label for="">Valor%</label>
		    <input type="text" class="form-control" id="valor" placeholder="Ingrese %" name="nombre" value="N/A" readonly="">
		    </div>
		    <div class="form-group">	

		    <label for="">Monto Fijo:</label>
		    <input type="text" class="form-control" id="montofijo" placeholder="Ingrese el Monto" name="nombre" value="500000,00">
		    </div>
		    <div class="form-group">	

		    <label for="">Base de Cálculo:</label>
		    <input type="text" class="form-control" id="basecalculo" placeholder="Ingrese Base de Cálculo" name="nombre" value="N/A" readonly="">
		    </div>

		    <div class="form-group">	
		    <label for="">N° de Días:</label>
		    <input type="text" class="form-control" id="ndias" placeholder="Ingrese Número de días" name="nombre" value="N/A" readonly="">
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

			<!-- Modal Nueva Variable-->
		<div class="modal fade" id="nuevavariable" tabindex="-1" role="dialog" aria-labelledby="nuevavariable" aria-hidden="true" class="fondo-modal">
			  <div class="modal-dialog modal-dialog-centered" role="document">
			    <div class="modal-content">
			      <div class="modal-header color-cabecera">
			        <h5 class="modal-title" id="exampleModalLongTitle">Agregar Variable de Nómina</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      <div class="modal-body">
	 <form class="form-group">
		    <label for="">Nombre:</label>
		    <input type="text" class="form-control" id="nombre" name="nombre" >
		    </style>
		    <label for="">Valor%</label>
		    <input type="text" class="form-control" id="valor" placeholder="Ingrese %" name="nombre">
		    <label for="">Monto Fijo:</label>
		    <input type="text" class="form-control" id="montofijo" placeholder="Ingrese el Monto" name="nombre" >
		    <label for="">Base de Cálculo:</label>
		    <input type="text" class="form-control" id="basecalculo" placeholder="Ingrese Base de Cálculo" name="basecalculo">
		    <label for="">N° de Días:</label>
		    <input type="text" class="form-control" id="ndias" placeholder="Ingrese Número de días" name="nombre">
		    <div class="modal-footer">
		     
		       <button type="submit" class="btn btn-primary centrado-boton">Guardar</button>
		     </div> 
  	</form>
		</div>      
    </div>
  </div>
</div>
			</div>

@endsection
