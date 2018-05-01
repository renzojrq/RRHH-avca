@extends('admin.layouts.admin')

@section('content')
<div class="container fuente-contenido">
	<div class="card">
   	 <div class="card-header">
        <legend>Empleados</legend>
     </div>
    <div class="card-block">
      <fielset>

    
    @include ('admin.gerente.partials.submenu.empleado-datos')
    <br>

<h3>Conceptos a aplicar al empleado</h3>

	<form class="form-group">

		   	<div class="custom-control custom-checkbox ">
  				<input type="checkbox" class="custom-control-input" id="sueldobasico" Checked>
  				<label class="custom-control-label" for="sueldobasico">Sueldo Básico</label>
			</div>

			<div class="custom-control custom-checkbox">
  				<input type="checkbox" class="custom-control-input" id="primaantiguedad" checked>
  				<label class="custom-control-label" for="primaantiguedad">Prima por antigüedad</label>
			</div>

		    <div class="custom-control custom-checkbox">
  				<input type="checkbox" class="custom-control-input" id="bonoasistencia">
  				<label class="custom-control-label" for="bonoasistencia">Bono por asistencia</label>
			</div>


		    <div class="custom-control custom-checkbox">
  				<input type="checkbox" class="custom-control-input" id="primahijo">
  				<label class="custom-control-label" for="primahijo">Prima por Hijos</label>
			</div>

		   	<div class="custom-control custom-checkbox">
  				<input type="checkbox" class="custom-control-input" id="horaextra">
  				<label class="custom-control-label" for="horaextra">Horas Extras</label>
			</div>

			<div class="custom-control custom-checkbox">
  				<input type="checkbox" class="custom-control-input" id="horanocturna">
  				<label class="custom-control-label" for="horanocturna">Horas Nocturnas</label>
			</div>

		    <div class="custom-control custom-checkbox">
  				<input type="checkbox" class="custom-control-input" id="diaferiado">
  				<label class="custom-control-label" for="diaferiado">Días Feriados</label>
			</div>


		    <div class="custom-control custom-checkbox">
  				<input type="checkbox" class="custom-control-input" id="sso"  checked="">
  				<label class="custom-control-label" for="sso">SSO</label>
			</div>

		   	<div class="custom-control custom-checkbox">
  				<input type="checkbox" class="custom-control-input" id="spf" checked="">
  				<label class="custom-control-label" for="spf">Seguro Paro Forzoso</label>
			</div>

			<div class="custom-control custom-checkbox">
  				<input type="checkbox" class="custom-control-input" id="lph" checked="">
  				<label class="custom-control-label" for="lph">Ley de política habitacional</label>
			</div>

		    <div class="custom-control custom-checkbox">
  				<input type="checkbox" class="custom-control-input" id="hdv">
  				<label class="custom-control-label" for="hdv">Pago por Horas de Vuelo</label>
			</div>


		    <div class="custom-control custom-checkbox">
  				<input type="checkbox" class="custom-control-input" id="bonoriesgo">
  				<label class="custom-control-label" for="bonoriesgo">Bono de Riesgo</label>
			</div>
</form>



@endsection