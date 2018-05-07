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

  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#convocatoria" style="float: right; margin-bottom: 10px;"> <i class="fas fa-file-alt"> </i>  Agregar Nuevo Oficio
              </button>           
 


  <table class="table-hover table-sm table-bordered" style="clear: both;">
                <thead class="thead-light thead-label-sm">
                  <tr>
                    <th class="col-md-2">N° Oficio</th>
                    <th class="col-md-1">F. de Oficio</th>
                    <th class="col-md-2 text-sm-center align-middle">Tipo de Oficio</th>
                    <th class="col-md-2 text-sm-center align-middle">SubTipo de Oficio</th>
                    <th class="col-md-1 text-sm-center align-middle">F.Inicio</th>
                    <th class="col-md-1 text-sm-center align-middle">F.Finalización</th>
                    <th class="col-md text-sm-center align-middle">Descripción</th>
                    <th class="col-md-1 text-sm-center align-middle">Soporte</th>
                   </tr>
                </thead>
                <tbody class="tbody-label-sm">
                  <tr>
                    <td class="align-middle">RRHH-AVCA_050-2017</td>
                    <td class="align-middle">05/05/2017</td>
                    <td class="align-middle">Reconocimiento</td>
                    <td class="align-middle">Empleado del Mes</td>
                    <td class="align-middle">01/05/2018</td>
                    <td class="align-middle">--/--/----</td>
                    <td class="align-middle">El trabajador recibio la distinción de empleado del mes</td>
                    <td class="align-middle text-md-center"><i class="fas fa-file-pdf fa-lg"></i></td>
                  </tr>
                    <tr>
                    <td class="align-middle">RRHH-AVCA_025-2017</td>
                    <td class="align-middle">10/05/2017</td>
                    <td class="align-middle">Formación</td>
                    <td class="align-middle">Consignación de título</td>
                    <td class="align-middle">10/05/2012</td>
                    <td class="align-middle">05/02/2017</td>
                    <td class="align-middle">El trabajador consigno título de Licenciado en Informática</td>
                    <td class="align-middle text-md-center"><i class="fas fa-file-pdf fa-lg"></i></td>
                  </tr>
                    <tr>
                    <td class="align-middle">RRHH-AVCA_022-2016</td>
                    <td class="align-middle">10/10/2016</td>
                    <td class="align-middle">Licencia</td>
                    <td class="align-middle">Vacaciones</td>
                    <td class="align-middle">12/10/2016</td>
                    <td class="align-middle">12/11/2016</td>
                    <td class="align-middle">Período vacacional</td>
                    <td class="align-middle text-md-center"><i class="fas fa-file-pdf fa-lg"></i></td>
                  </tr>
                  
                   </tbody>

  </table>







<!--ionicio del modal igresar oficio-->
    <div class="modal fade" id="convocatoria" tabindex="-1" role="dialog" aria-labelledby="convocatoria" aria-hidden="true" class="fondo-modal">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header color-cabecera">
              <h5 class="modal-title" id="titulo">Agregar Oficio</h5>

              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

  <div class="modal-body">
     
            
{!! Form::open() !!}

 <div class="col-md-6 margin-center">
      <div class="form-group">
        {!! Form::label('noficio', 'Número de oficio') !!}
        {!! Form::text('descripcion', null, ['class' => 'form-control']) !!}
      </div>
    </div>
<div class="row form-group">
   

<div class="col-md-6">
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

    <div class="col-md-6">
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