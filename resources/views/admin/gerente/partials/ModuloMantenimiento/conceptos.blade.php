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
		<div class="margin-center col-md-11">
			<div class="table-responsive" >
						
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#nuevoconcepto" style="float: right; margin-bottom: 10px;"> <i class="fas fa-plus-square"> </i> Concepto</button>
			       <table class="table-hover table-sm table-bordered" style="clear: both;">
			          <thead class="thead-light thead-label-sm">
			            <tr>
			              <th class="col-md-1 align-middle">Código</th>
			              <th class="col-md-3 align-middle">Nombre</th>
			              <th class="col-md-1 align-middle text-sm-center">Valor%</th>
			              <th class="col-md-1 align-middle text-sm-center">Monto Fijo</th>
			              <th class="col-md-1 align-middle text-sm-center">Bono Vacacional</th>
			              <th class="col-md-1 text-sm-center align-middle">Utilidades</th>
			              <th class="col-md-1 align-middle text-sm-center">Prestaciones Sociales</th>
			              <th class="col-md-1 align-middle text-sm-center">ISLR</th>
			              <th class="col-md-1 align-middle text-sm-center"> - </th>
			            </tr>
			          </thead>

			          <tbody class="tbody-label-sm">
			            <tr>
			              <td class="align-middle">101</td>
			              <td class="align-middle">Sueldo Básico</td>
			              <td class="align-middle text-sm-center">--</td>
			              <td class="align-middle text-sm-center">2500000</td>
			              <td class="align-middle text-sm-center">si</td>
			              <td class="align-middle text-sm-center">si</td>
			              <td class="align-middle text-sm-center">si</td>
			              <td class="align-middle text-sm-center">si</td>
			              <td class="text-sm-center"><button type="button" class="btn btn-info" data-toggle="modal" data-target="#configurarconcepto"><i class="fas fa-cog"></i></button></td>
			            </tr>
			            <tr>
			              <td class="align-middle">103</td>
			              <td class="align-middle">Prima por hijos</td>
			              <td class="align-middle text-sm-center">--</td>
			              <td class="align-middle text-sm-center">120000</td>
			              <td class="align-middle text-sm-center">si</td>
			              <td class="align-middle text-sm-center">si</td>
			              <td class="align-middle text-sm-center">N/A</td>
			              <td class="align-middle text-sm-center">N/A</td>
			              <td class="text-sm-center"><button type="button" class="btn btn-info" data-toggle="modal" data-target="#configurarconcepto1"><i class="fas fa-cog"></i></button></td>

			            </tr>
			            <tr>
			              <td class="align-middle">502</td>
			              <td class="align-middle">Aporte al SSO</td>
			              <td class="align-middle text-sm-center">4</td>
			              <td class="align-middle text-sm-center">--</td>
			              <td class="align-middle text-sm-center">N/A</td>
			              <td class="align-middle text-sm-center">N/A</td>
			              <td class="align-middle text-sm-center">N/A</td>
			              <td class="align-middle text-sm-center">N/A</td>
			              <td class="text-sm-center"><button type="button" class="btn btn-info" data-toggle="modal" data-target="#configurarconcepto"><i class="fas fa-cog"></i></button></td>

			            </tr>
			          </tbody>
			        </table>

			      </div>
			</div>
		</fieldset>
		</div>
	</div>
</div>


			<!-- Modal Configurar Conceptos Sueldo Basico-->

	<div class="modal fade" id="configurarconcepto" tabindex="-1" role="dialog" aria-labelledby="configurarconcepto" aria-hidden="true" class="fondo-modal">
		<div class="modal-dialog modal-dialog-centered" role="document">
		    <div class="modal-content">
		     <div class="modal-header color-cabecera">
			 <h5 class="modal-title" id="exampleModalLongTitle">Configurar Concepto de Nómina</h5>
			 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			 <span aria-hidden="true">&times;</span>
			 </button>
			 </div>
		<div class="modal-body">
	 
	 		<form class="form-group">
 				
 				<div class="form-group">	

   		    	<label for="" >Código:</label>

		    	<input type="text" class="form-control" id="codigo" placeholder="Ingrese el Código" name="clave"
		    	readonly="" value="101">
				</div>
				<div class="form-group">
		    	<label for="">Nombre:</label>

		    	<input type="text" class="form-control" id="nombre" placeholder="Ingrese Nombre del Concepto" name="nombre" value="Salario Básico" readonly="">
			</div>
				<div class="custom-control custom-radio custom-control-inline">
  					<input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
  					<label class="custom-control-label" for="customRadioInline1">Monto Fijo</label>
				</div>
				<div class="custom-control custom-radio custom-control-inline">
  					<input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
  					<label class="custom-control-label" for="customRadioInline2">Valor %</label>
				</div>
		        
			<div class="form-group">
		    	<input type="text" class="form-control" id="valor" placeholder="2.500.000,00" name="valor" readonly="">

				<small class="form-text text-muted">Ingrese pocentaje o monto según sea el caso</small>
			</div>
		   	<label> Aplica a:</label>

		   	<div class="custom-control custom-checkbox">
  				<input type="checkbox" class="custom-control-input" id="vacacional">
  				<label class="custom-control-label" for="vacacional">Bono Vacacional</label>
			</div>

			<div class="custom-control custom-checkbox">
  				<input type="checkbox" class="custom-control-input" id="utilidades">
  				<label class="custom-control-label" for="utilidades">Utilidades</label>
			</div>

		    <div class="custom-control custom-checkbox">
  				<input type="checkbox" class="custom-control-input" id="prestaciones">
  				<label class="custom-control-label" for="prestaciones">Prestaciones Sociales</label>
			</div>


		    <div class="custom-control custom-checkbox">
  				<input type="checkbox" class="custom-control-input" id="impuesto">
  				<label class="custom-control-label" for="impuesto">ISLR</label>
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

			<!-- Modal Configurar Conceptos Prima por hijo-->
	<div class="modal fade" id="configurarconcepto1" tabindex="-1" role="dialog" aria-labelledby="configurarconcepto1" aria-hidden="true" class="fondo-modal">
		<div class="modal-dialog modal-dialog-centered" role="document">
		    <div class="modal-content">
		     <div class="modal-header color-cabecera">
			 <h5 class="modal-title" id="exampleModalLongTitle">Configurar Concepto de Nómina</h5>
			 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			 <span aria-hidden="true">&times;</span>
			 </button>
			 </div>
		<div class="modal-body">
	 
	 		<form class="form-group">
 				
 				<div class="form-group">	

   		    	<label for="">Código:</label>
		    	<input type="text" class="form-control" id="codigo" name="clave"
		    	readonly="" value="103">
				</div>
				<div class="form-group">
		    	<label for="">Nombre:</label>
		    	<input type="text" class="form-control" id="nombre" name="nombre" value="Prima por Hijo" readonly="">
			</div>

		        <div class="custom-control custom-radio custom-control-inline"  >
  					<input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
  					<label class="custom-control-label" for="customRadioInline1">Monto Fijo</label>
				</div>
				<div class="custom-control custom-radio custom-control-inline">
  					<input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input" checked="">
  					<label class="custom-control-label" for="customRadioInline2">Valor %</label>
				</div>
			<div class="form-group">
		    	<input type="text" class="form-control" id="valor" placeholder="10" name="valor">
				<small class="form-text text-muted">Ingrese pocentaje o monto según sea el caso</small>
			</div>
		   	<label> Aplica a:</label>
			

		   	<div class="custom-control custom-checkbox">
  				<input type="checkbox" class="custom-control-input" id="vacacional2">
  				<label class="custom-control-label" for="vacacional2">Bono Vacacional</label>
			</div>

			<div class="custom-control custom-checkbox">
  				<input type="checkbox" class="custom-control-input" id="utilidades2">
  				<label class="custom-control-label" for="utilidades2">Utilidades</label>
			</div>

		    <div class="custom-control custom-checkbox">
  				<input type="checkbox" class="custom-control-input" id="prestaciones2">
  				<label class="custom-control-label" for="prestaciones2">Prestaciones Sociales</label>
			</div>


		    <div class="custom-control custom-checkbox">
  				<input type="checkbox" class="custom-control-input" id="impuesto2">
  				<label class="custom-control-label" for="impuesto2">ISLR</label>
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

			<!-- Modal Nuevo Concepto-->
		<div class="modal fade" id="nuevoconcepto" tabindex="-1" role="dialog" aria-labelledby="nuevoconcepto" aria-hidden="true" class="fondo-modal">
			  <div class="modal-dialog modal-dialog-centered" role="document">
			    <div class="modal-content">
			      <div class="modal-header color-cabecera">
			        <h5 class="modal-title" id="exampleModalLongTitle">Agregar Concepto de Nómina</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      <div class="modal-body">
	 
	 		<form class="form-group">
 				
 				<div class="form-group">	

   		    	<label for="">Código:</label>
		    	<input type="text" class="form-control" id="codigo" name="clave">
				</div>
				<div class="form-group">
		    	<label for="">Nombre:</label>
		    	<input type="text" class="form-control" id="nombre" name="nombre">
			</div>
		    
		
		        <div class="custom-control custom-radio custom-control-inline">
  					<input type="radio" id="customRadioInline3" name="customRadioInline1" class="custom-control-input">
  					<label class="custom-control-label" for="customRadioInline3">Monto Fijo</label>
				</div>
				<div class="custom-control custom-radio custom-control-inline">
  					<input type="radio" id="customRadioInline4" name="customRadioInline1" class="custom-control-input">
  					<label class="custom-control-label" for="customRadioInline4">Valor %</label>
				</div>
			<div class="form-group">
		    	<input type="text" class="form-control" id="valor"  name="valor">
				<small class="form-text text-muted">Ingrese pocentaje o monto según sea el caso</small>
			</div>
		   	<label> Aplica a:</label>
			

		   	<div class="custom-control custom-checkbox">
  				<input type="checkbox" class="custom-control-input" id="vacacional1">
  				<label class="custom-control-label" for="vacacional1">Bono Vacacional</label>
			</div>

			<div class="custom-control custom-checkbox">
  				<input type="checkbox" class="custom-control-input" id="utilidades1">
  				<label class="custom-control-label" for="utilidades1">Utilidades</label>
			</div>

		    <div class="custom-control custom-checkbox">
  				<input type="checkbox" class="custom-control-input" id="prestaciones1">
  				<label class="custom-control-label" for="prestaciones1">Prestaciones Sociales</label>
			</div>


		    <div class="custom-control custom-checkbox">
  				<input type="checkbox" class="custom-control-input" id="impuesto1">
  				<label class="custom-control-label" for="impuesto1">ISLR</label>
			</div>
		    </form>
		</div>	    <div class="modal-footer">
			       <button type="submit" class="btn btn-primary centrado-boton">Guardar</button>
			     </div> 
    </div>
  </div>
</div>
			</div>

@endsection
