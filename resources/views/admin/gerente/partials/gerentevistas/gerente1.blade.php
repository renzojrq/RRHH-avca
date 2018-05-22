@extends('admin.layouts.admin')

@section('content')

<div class="container fuente-contenido">
  <div class="card">
     <div class="card-header">
        <legend><h1>Personal de Sucursal "AJS"</h1></legend>
     </div>
  
    <div class="card-block">
        <fielset> 
    
   {{-- @include ('admin.gerente.partials.submenu.gerente-vistas')--}}
    

  
<div class="container">
<h3>Empleados Activos</h3>


  <table class="table table-sm table-borderless">
    <thead>
      <tr>
        <th class="text-sm-center">Grupo</th>
        <th>Cédula</th>
        <th>Apellidos y Nombres</th>
        <th>Departamento</th>
        <th>Cargo</th>
        
        <th class="text-sm-center">Incidencias</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td class="text-sm-center align-middle">A</td>
        <td class="align-middle">12274999</td>
        <td class="align-middle">Víctor Guzmán</td>
        <td class="align-middle">Logistica</td>
        <td class="align-middle">Conductor</td>
        
        <td class="text-sm-center align-middle"><button type="button" class="btn btn-link" data-toggle="modal" data-toggle= "tooltip" title="Insertar nueva incidencia" data-target="#gerenteempleado"><i class="fas fa-sync"></i></button> <button type="button" class="btn btn-link" data-toggle="modal" data-toggle= "tooltip" title="Ver historial de incidencias" data-target="#vgerenteempleado"><i class="fas fa-eye"></i></button></td>
        </tr>
      <tr>
        <td class="text-sm-center align-middle">A</td>
        <td class="align-middle">15741667</td>
        <td class="align-middle">César A. Fabbiani M</td>
        <td class="align-middle">Gerencia</td>
        <td class="align-middle">Asistente</td>
        
        <td class="text-sm-center align-middle"><button type="button" class="btn btn-link" data-toggle="modal" data-toggle= "tooltip"  title="Insertar nueva incidencia" data-target="#gerenteempleado"><i class="fas fa-sync"></i></button> <button type="button" class="btn btn-link" data-toggle="modal" data-toggle= " tooltip" title="Ver historial de incidencias" data-target="#vgerenteempleado"><i class="fas fa-eye"></i></button></td>
      </tr>
      <tr>
        <td class="text-sm-center align-middle">C</td>
        <td class="align-middle">13598083</td>
        <td class="align-middle">Carolina Carvajal</td>
        <td class="align-middle">Atención al Público</td>
        <td class="align-middle">Operador de Tráfico</td>
        
        <td class="text-sm-center align-middle"><button type="button" class="btn btn-link" data-toggle="modal" data-toggle= "tooltip" title="Insertar nueva incidencia" data-target="#gerenteempleado"><i class="fas fa-sync"></i></button></i> <button type="button" class="btn btn-link" data-toggle="modal" data-toggle= "tooltip" title="Ver historial de incidencias" data-target="#vgerenteempleado"><i class="fas fa-eye"></i></button></td>
      </tr>
    </tbody>
  </table>

<div class="container">
  <ul class="pagination pagination-sm float-right">
    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
    <li class="page-item active"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item"><a class="page-link" href="#">Next</a></li>
  </ul>
</div>




<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});
</script>


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


<!--inicio del modal Registro de Historial de Empleado-->
    <div class="modal fade" id="vgerenteempleado" tabindex="-1" role="dialog" aria-labelledby="oficio" aria-hidden="true" class="fondo-modal">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header color-cabecera">
              <h5 class="modal-title" id="titulo">Histórico de Incidencias: Víctor Guzmán</h5>

              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

  <div class="modal-body">
<table class="table-hover table-sm table-bordered" style="clear: both;">
                <thead class="thead-light thead-label-sm">
                  <tr>
                    <!--<th class="col-md-2">N° Oficio</th>-->
                    <th class="col-md-1">Fecha</th>
                    
                    <th class="col-md-2 text-sm-center align-middle">Incidencia</th>
                    <th class="col-md-1 text-sm-center align-middle">F.Inicio</th>
                    <th class="col-md-1 text-sm-center align-middle">F.Finalización</th>
                    <th class="col-md text-sm-center align-middle">Descripción</th>
                    <th class="col-md-1 text-sm-center align-middle">Soporte</th>
                   </tr>
                </thead>
                <tbody class="tbody-label-sm">
                  <tr>
                    <!--<td class="align-middle">RRHH-AVCA_050-2017</td>-->
                    <td class="align-middle">05/05/2017</td>
                    
                    <td class="align-middle">Empleado del Mes</td>
                    <td class="align-middle">01/05/2018</td>
                    <td class="align-middle">--/--/----</td>
                    <td class="align-middle">El trabajador recibio la distinción de empleado del mes</td>
                    <td class="align-middle text-md-center"><i class="fas fa-file-pdf fa-lg"></i></td>
                  </tr>
                    <tr>
                    <!--<td class="align-middle">RRHH-AVCA_025-2017</td>-->
                    <td class="align-middle">10/05/2017</td>
                    
                    <td class="align-middle">Consignación de título</td>
                    <td class="align-middle">10/05/2012</td>
                    <td class="align-middle">05/02/2017</td>
                    <td class="align-middle">El trabajador consigno título de Licenciado en Informática</td>
                    <td class="align-middle text-md-center"><i class="fas fa-file-pdf fa-lg"></i></td>
                  </tr>
                    <tr>
                    <!--<td class="align-middle">RRHH-AVCA_022-2016</td>-->
                    <td class="align-middle">10/10/2016</td>
                    
                    <td class="align-middle">Vacaciones</td>
                    <td class="align-middle">12/10/2016</td>
                    <td class="align-middle">12/11/2016</td>
                    <td class="align-middle">Período vacacional</td>
                    <td class="align-middle text-md-center"><i class="fas fa-file-pdf fa-lg"></i></td>
                  </tr>
                  
                   </tbody>

  </table>
     

<hr>
<div class="d-flex justify-content-center"> 
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