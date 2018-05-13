@extends('admin.layouts.admin')

@section('content')
<div class="container fuente-contenido">
   <div class="card">
        <div class="card-header">
            <legend>Consulta de Nomina</legend>
        </div>
        <div class="card-block">

           
                   <br>

     <div class="col-md-12 margin-center">
      <div class="form-group form-inline">
       
			<div class="col-md-2">
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
                v-model="nivel_academico" >
         
          <option value="bachiller">Mayo 2018</option>
          <option value="tsu">Abril 2018</option>
          <option value="profesional">Marzo 2018</option>
          <option value="bachiller">Febrero 2018</option>
          <option value="tsu">Enero 2018</option>
          <option value="profesional">Diciembre 2017</option>
          <option value="especialista 1">Noviembre 2017</option>
          <option value="especialista 2">Octubre 2017</option>
        </select>

        
            </div> </div>

        </div>
    </div>
</div>

@endsection


