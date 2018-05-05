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
<div class="container" style="text-align: center">
<h3>Conceptos a aplicar al empleado</h3>
</div>

<div class="row">
<!--<div class="input-inline">-->
	<form class="form-group">
      <div class="col-md">
      <h2> Asignaciones</h2>
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
  				<label class="custom-control-label" for="horaextra">Horas Extras Diurnas</label>
			</div>

			<div class="custom-control custom-checkbox">
  				<input type="checkbox" class="custom-control-input" id="horanocturna">
  				<label class="custom-control-label" for="horanocturna">Horas Nocturnas</label>
			</div>

      <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="horaextranoc">
          <label class="custom-control-label" for="horaextra">Horas Extras Nocturnas</label>
      </div>

          <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="hdvp">
          <label class="custom-control-label" for="hdv">Pago por Horas de Vuelo de Piloto</label>
      </div>

      <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="hdvc">
          <label class="custom-control-label" for="hdv">Pago por Horas de Vuelo de Copiloto-Primer Oficial</label>
      </div>

      <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="hdvs">
          <label class="custom-control-label" for="hdv">Pago por Horas de Vuelo de Sobrecargo</label>
      </div>

      <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="bdp">
          <label class="custom-control-label" for="hdv">Bono de productividad</label>
      </div>
  

		    <div class="custom-control custom-checkbox">
  				<input type="checkbox" class="custom-control-input" id="diaferiado">
  				<label class="custom-control-label" for="diaferiado">Días Feriados y de descanso</label>
			</div>
      <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="bonoriesgo">
          <label class="custom-control-label" for="bonoriesgo">Bono de Riesgo</label>
      </div>

  


<div class="form-group">


    <h2>Deducciones</h2>

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
  				<label class="custom-control-label" for="lph">Fondo de ahorro obligatorio de la Vivienda</label>
			</div>

		
      <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="ejudicial">
          <label class="custom-control-label" for="hdv">Embargo judicial</label>
      </div>

		    
</form>
</div>
<!--</div>-->



@endsection