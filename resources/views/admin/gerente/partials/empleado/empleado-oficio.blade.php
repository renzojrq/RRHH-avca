@extends('admin.layouts.admin')

@section('content')
<div class="container fuente-contenido">
	<div class="card">
   	 <div class="card-header">
        <legend>Empleados</legend>
     </div>
    <div class="card-block">
    @include ('admin.gerente.partials.submenu.empleado-datos')
    <br>




{!! Form::open() !!}

<div class="row form-group">
    <div class="col-md-3">
      <div class="form-group">
        {!! Form::label('noficio', 'Número de Oficio') !!}
        {!! Form::text('descripcion', null, ['class' => 'form-control']) !!}
      </div>
    </div>

<div class="col-md-4">
      {!! Form::label('tipo oficio', 'Tipo Oficio') !!}
      {!! Form::select('tipo_oficio', [
          '' => 'seleccione',
          'Amonestacion' => 'Amonestación',
          'Reconocimientos' => 'Reconocimientos',
          'Formacion' => 'Formación',
          'Nombramiento' => 'Nombramiento',
        'Accidente laboral' => 'Accidente laboral',
          'Licencias' => 'Licencias'
        
          ], '', ['class' => 'form-control']) !!}
    </div>

    <div class="col-md-4">
      {!! Form::label('Subtipo', 'Subtipo') !!}
      {!! Form::select('subtipo', [
          '' => 'seleccione',
          'verbal' => 'Verbal',
          'escrita' => 'Escrita'
          ], '', ['class' => 'form-control']) !!}
    </div>

</div>
  <!--<H3 class="text-center">Cargar oficios</H3>-->
 
 <div class="row form-group">
    
<!--</div>-->
    <div class="col-md-3">
      <div class="form-group">
        {!! Form::label('fecha_inicio', 'Fecha de Inicio') !!} <i class="fas fa-calendar"></i>
        {!! Form::date('fecha_inicio', null, ['class' => 'form-control']) !!}
      </div>
    </div>
    <div class="col-md-3">
      <div class="form-group">
        {!! Form::label('fecha_fin', 'Fecha de Finalización') !!} <i class="fas fa-calendar"></i>
        {!! Form::date('fecha_fin', null, ['class' => 'form-control']) !!}
      </div>
    </div>
    </div>
<div class="row">
    <div class="col-md-11">
      <div class="form-group">
        {!! Form::label('descripcion', 'Descripción') !!}
        {!! Form::text('descripcion', null, ['class' => 'form-control']) !!}
      </div>
    </div>
</div>
    
    
<div class="row">
  <div class="col-md-3">
      <div class="form-group">
        {!! Form::label('soporte', 'Anexar soporte') !!}
        {!! Form::file('soporte', ['class' => 'form-control-file']) !!}
      </div>
    </div>
  </div>
 </div>  

<div class="d-flex justify-content-center"> 
    <button type="submit" class="btn btn-primary "> Guardar</button>
</div>


<hr>



{!! Form::close() !!}


@endsection