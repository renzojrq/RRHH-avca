@extends('admin.layouts.admin')

@section('content')

<div class="container fuente-contenido">
	<div class="card">
   	 <div class="card-header">
        <legend></legend>
     </div>
  
    <div class="card-block">
        <fielset> 
    
    @include ('admin.gerente.partials.submenu.gerente-vistas')<br>
    
<h1>estoy en gerente2</h1>


  
<div class="container">
<h3>Listado de Empleados Activos</h3>
              
  <table class="table table-sm table-borderless">
    <thead>
      <tr>
        <th>Cédula</th>
        <th>Apellidos y Nombres</th>
        <th>Departamento</th>
        <th>Cargo</th>
        <th class="text-sm-center">Turno</th>
      
      </tr>
    </thead>
    <tbody>
      <tr>
        <td class="align-middle">12274999</td>
        <td class="align-middle">Víctor Guzmán</td>
        <td class="align-middle">Logistica</td>
        <td class="align-middle">Conductor</td>
 
        <td class="text-sm-center align-middle"><button type="button" class="btn btn-link" data-toggle="modal" data-target="#gerenteempleado"><i class="fas fa-sync"></i></button></td>
        </tr>
      <tr>
        <td class="align-middle">15741667</td>
        <td class="align-middle">César A. Fabbiani M</td>
        <td class="align-middle">Gerencia</td>
        <td class="align-middle">Asistente</td>
   
        <td class="text-sm-center align-middle"><button type="button" class="btn btn-link" data-toggle="modal" data-target="#gerenteempleado"><i class="fas fa-sync"></i></button></td>
      </tr>
      <tr>
        <td class="align-middle">13598083</td>
        <td class="align-middle">Carolina Carvajal</td>
        <td class="align-middle">Atención al Público</td>
        <td class="align-middle">Operador de Tráfico</td>
        
        <td class="text-sm-center align-middle"><button type="button" class="btn btn-link" data-toggle="modal" data-target="#gerenteempleado"><i class="fas fa-sync"></i></button></i></td>
      </tr>
    </tbody>
  </table>
</div>






</fielset>
</div>
</div>
</div>

<!--inicio del modal Registro de Historial de Empleado-->
    <div class="modal fade" id="gerenteempleado" tabindex="-1" role="dialog" aria-labelledby="oficio" aria-hidden="true" class="fondo-modal">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header color-cabecera">
              <h5 class="modal-title" id="titulo">Ingresar Incidencia</h5>

              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

  <div class="modal-body">
     
            
{!! Form::open() !!}

<div class="row form-group">
       <div class="col-md-6">
        {!! Form::label('tipo oficio', 'Tipo de Incidencia') !!}
        {!! Form::select('tipo_oficio', [
            '' => 'seleccione',
            'Amonestacion' => 'Amonestación',
            'Accidente laboral' => 'Accidente laboral',
            'solicitud de baja' => 'Solicitud de Baja',
            'Licencias' => 'Licencias'], 
            '', ['class' => 'form-control']) !!}
    </div>

   <div class="col-md-6">
      {!! Form::label('Subtipo', 'Incidencia') !!}
      {!! Form::select('subtipo', [
          '' => 'seleccione',
          'verbal' => 'Verbal',
          'escrita' => 'Escrita'
          ], '', ['class' => 'form-control']) !!}
    </div>
    <!--
    <div class="col-md-6">
      <div class="form-group">
        {!! Form::label('noficio', 'Número de oficio') !!}
        {!! Form::text('descripcion', null, ['class' => 'form-control']) !!}
      </div>
    </div> -->
  
 
</div>   
 <div class="row form-group">
    
    <div class="col-md-6">
      <div class="form-group">
        {!! Form::label('fecha_inicio', 'Fecha de Inicio') !!} <i class="fas fa-calendar"></i>
        {!! Form::date('fecha_inicio', null, ['class' => 'form-control']) !!}
      </div>
    </div>
    <div class="col-md-6">
      <div class="form-group">
        {!! Form::label('fecha_fin', 'Fecha de Finalización') !!} <i class="fas fa-calendar"></i>
        {!! Form::date('fecha_fin', null, ['class' => 'form-control']) !!}
      </div>
    </div>
    </div>
<div class="row">
    <div class="col-md">
      <div class="form-group">
        {!! Form::label('descripcion', 'Descripción') !!}
        {!! Form::textarea ('Descripcion', null, ['class' => 'form-control']) !!}
      </div>
    </div>
</div>
    
    
<div class="row">
  <div class="col-md-8">
      <div class="form-group">
        {!! Form::label('soporte', 'Anexar soporte') !!}
        {!! Form::file('soporte', ['class' => 'form-control-file']) !!}
      </div>
    </div>
  </div>
<hr>
<div class="d-flex justify-content-center"> 
    <button type="submit" class="btn btn-primary "> Guardar</button>
    <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
</div>

 </div>  


</div>

</div>
</div>
</div>
</div>
{!! Form::close() !!}
</div>


@endsection
