@extends('admin.layouts.admin')

@section('content')
<div class="container fuente-contenido">
   <div class="card">
        <div class="card-header">
            <legend>Generar Nomina</legend>
        </div>
        <div class="card-block">

           
                   <br>



                    <div class="col-md-12 margin-center">
      <div class="form-group form-inline">
       
			<div class="col-md-1">
     	</div>


			        {!! Form::label('tipo_nomina', 'Tipo Nómina') !!}
        <select name="tipo_nomina" id="tipo_nomina" class="form-control" @change="obtenerProfesiones"
                v-model="nivel_academico">
         
          <option value="bachiller">Regular</option>
          <option value="profesional">Cesta Ticket</option>
          <option value="tsu">Bono Vacacional</option>
          <option value="profesional">Utilidades</option>
          <option value="bachiller">Planila ARC</option>
          <option value="tsu">Prestaciones Sociales</option>
     	
     	</select>

     	<div class="col-md-1">
     	</div>

        {!! Form::label('nivel_academico', 'Período') !!}
        <select name="periodo" id="periodo" class="form-control" @change="obtenerProfesiones"
                v-model="nivel_academico" value= "Mayo 2018">
         
          <option value="bachiller">Mayo 2018</option>
          <option value="tsu">Abril 2018</option>
          <option value="profesional">Marzo 2018</option>
          <option value="bachiller">Febrero 2018</option>
          <option value="tsu">Enero 2018</option>
          <option value="profesional">Diciembre 2017</option>
          <option value="especialista 1">Noviembre 2017</option>
          <option value="especialista 2">Octubre 2017</option>
        </select>
<div class="col-md-1">
	
</div>

        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#convocatoria" style="margin-bottom: 10px;">Generar Nómina</button>  

        
            </div> 

			<div class="col-md-4 margin-center">
			        {!! Form::label('tipo_nomina', 'Grupo Trabajo') !!}
        <select name="tipo_nomina" id="tipo_nomina" class="form-control" @change="obtenerProfesiones"
                v-model="nivel_academico">
         
          <option value="bachiller">Tripulación</option>
          <option value="profesional">Horario Fijo</option>
          <option value="tsu">Horario Rotativo</option>
          
     	</select>

            </div> </div>
<hr>

<div class="row form-group">
      <div class="col-md-6">
      <h4> Configurar Nómina</h4>
		   	  <div class="custom-control custom-checkbox ">
    				<input type="checkbox" class="custom-control-input" id="sueldobasico" Checked>
    				<label class="custom-control-label" for="sueldobasico">101  Sueldo Básico</label>
			    </div>

			    <div class="custom-control custom-checkbox">
    				<input type="checkbox" class="custom-control-input" id="primaantiguedad" checked>
    				<label class="custom-control-label" for="primaantiguedad">103 Prima por antigüedad</label>
			    </div>

		      <div class="custom-control custom-checkbox">
    				<input type="checkbox" class="custom-control-input" id="bonoasistencia">
    				<label class="custom-control-label" for="bonoasistencia">201  Bono por asistencia</label>
			    </div>

		      <div class="custom-control custom-checkbox">
    				<input type="checkbox" class="custom-control-input" id="primahijo">
    				<label class="custom-control-label" for="primahijo">105 Prima por Hijos</label>
			    </div>

		   	  <div class="custom-control custom-checkbox">
    				<input type="checkbox" class="custom-control-input" id="horaextra">
    				<label class="custom-control-label" for="horaextra">107 Horas Extras Diurnas</label>
			    </div>

			    <div class="custom-control custom-checkbox">
    				<input type="checkbox" class="custom-control-input" id="horanocturna">
    				<label class="custom-control-label" for="horanocturna">109  Horas Nocturnas</label>
			    </div>

          <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="horaextranoc">
            <label class="custom-control-label" for="horaextra">111 Horas Extras Nocturnas</label>
          </div>

          <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="hdvp">
            <label class="custom-control-label" for="hdv">113 Pago por Horas de Vuelo de Piloto</label>
          </div>

          <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="hdvc">
            <label class="custom-control-label" for="hdv">115 Pago por Horas de Vuelo de Copiloto-Primer Oficial</label>
          </div>

          <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="hdvs">
            <label class="custom-control-label" for="hdv">117 Pago por Horas de Vuelo de Sobrecargo</label>
          </div>

          <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="bdp">
            <label class="custom-control-label" for="hdv">203 Bono de productividad</label>
          </div>
  

		      <div class="custom-control custom-checkbox">
    				<input type="checkbox" class="custom-control-input" id="diaferiado">
    				<label class="custom-control-label" for="diaferiado">119  Días Feriados y de descanso</label>
			    </div>
      
          <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="bonoriesgo">
            <label class="custom-control-label" for="bonoriesgo">205  Bono de Riesgo</label>
          </div>

		 <div class="custom-control custom-checkbox">
  				<input type="checkbox" class="custom-control-input" id="sso"  checked="">
  				<label class="custom-control-label" for="sso">502 SSO</label>
			</div>

		   	<div class="custom-control custom-checkbox">
  				<input type="checkbox" class="custom-control-input" id="spf" checked="">
  				<label class="custom-control-label" for="spf">504 Seguro Paro Forzoso</label>
			</div>

			<div class="custom-control custom-checkbox">
  				<input type="checkbox" class="custom-control-input" id="lph" checked="">
  				<label class="custom-control-label" for="lph">506 Fondo de ahorro obligatorio de la Vivienda</label>
			</div>

		
      <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="ejudicial">
          <label class="custom-control-label" for="hdv">700 Embargo judicial</label>
      </div>

      </div>


           
        </div>
    </div>
</div>

@endsection


