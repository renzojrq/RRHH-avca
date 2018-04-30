@extends('admin.layouts.admin')

@section('content')
<div class="container fuente-contenido">
	<div class="card">
   	 <div class="card-header">
        <legend>Empleados</legend>
     </div>
    <div class="card-block">
      <fieldset>
<!-- <div class="dropdown show">-->
<div class="input-group input-group-md mb-3 col-md-8 margin-center">

  <div class="input-group input-group-prepend">
    <span class="input-group-text thead-label-sm" id="inputGroup-sizing-sm">Empleado a Consultar</span>
    <input class="form-control"  list="mylist"/>   
  </div>

  <datalist id="mylist">
    <option>Area Operacional, Cargo Piloto</option>
    <option>Copiloto, primer oficial</option>
    <option>Sobrecargo</option>
    <option>Administrador de operaciones</option>
    <option>Mecánico</option>
    <option>Guía Caníno</option>
    <option>Operador de Tráfico</option>
  </datalist>
</div>
    </fieldset>
    
    @include ('admin.gerente.partials.submenu.empleado-datos')
    <br>




{!! Form::open() !!}

<fieldset>
  <legend class="text-center">Cargar oficios</legend>
 
 <div class="row form-group ">
    <div class="col-md-4 offset-2">
      {!! Form::label('tipo oficio', 'Tipo Oficio') !!}
      {!! Form::select('tipo_oficio', [
          '' => 'seleccione',
          'Amonestacion' => 'amonestacion',
          'Reconocimientos' => 'Reconocimientos',
          'Formacion' => 'Formacion',
          'Nombramiento' => 'Nombramiento',
        'Accidente laboral' => 'Accidente laboral',
          'Licencias' => 'Licencias'
        
          ], '', ['class' => 'form-control']) !!}
    </div>

    <div class="col-md-4">
      {!! Form::label('Subtipo', 'Subtipo') !!}
      {!! Form::select('subtipo', [
          '' => 'seleccione',
          'verval' => 'verval',
          'escrita' => 'escrita'
          ], '', ['class' => 'form-control']) !!}
    </div>
</div>

<div class="row">
    <div class="col-md-8 offset-2">
      <div class="form-group">
        {!! Form::label('descripcion', 'Descripcion') !!}
        {!! Form::text('descripcion', null, ['class' => 'form-control']) !!}
      </div>
    </div>
</div>
    
    
<div class="row">  
    <div class="col-md-4 offset-2">
      <div class="form-group">
        {!! Form::label('fecha_inicio', 'Fecha de Inicio') !!} <i class="fas fa-calendar"></i>
        {!! Form::date('fecha_inicio', null, ['class' => 'form-control']) !!}
      </div>
    </div>
    <div class="col-md-4">
      <div class="form-group">
        {!! Form::label('fecha_fin', 'Fecha de Finalizacion') !!} <i class="fas fa-calendar"></i>
        {!! Form::date('fecha_fin', null, ['class' => 'form-control']) !!}
      </div>
    </div>
</div>

<div class="row">
  <div class="col-md-3 offset-2">
      <div class="form-group">
        {!! Form::label('soporte', 'soporte') !!}
        {!! Form::file('soporte', ['class' => 'form-control-file']) !!}
      </div>
    </div>
  </div>
 </div>  

<div class="d-flex justify-content-center"> 
    <button type="submit" class="btn btn-primary "> guardar</button>
</div>
</fieldset>

<hr>



{!! Form::close() !!}


@endsection