@extends('admin.layouts.admin')

@section('content')

<div class="container fuente-contenido">
	<div class="card">
   	 <div class="card-header">
        <legend></legend>
     </div>
  
    <div class="card-block">
        
    
    @include ('admin.gerente.partials.submenu.gerente-vistas')<br>
    
    <fielset> 
<legend>Días feriados de sucursal</legend>
    <div class="row">
     
      <div class="form-group col-md-6">
        {!! Form::label('fecha_feriado', 'Días Feriado') !!} <i class="fas fa-calendar"></i><br>
       <table class="table-hover table-sm table-bordered" style="clear: both;">
                <thead class="thead-light thead-label-sm">
                  <tr>
                    <th class="col-md-1">Fecha</th>
                    <th class="col-md-1">Día</th>
                    <th class="col-md-4">Descripción</th>
                   </tr>
                </thead>
                <tbody class="tbody-label-sm">
                  

                  <tr>
                    <td class="align-middle">01/01/2018</td>
                    <td class="align-middle">Jueves</td>
                    <td class="align-middle">Primero de Mayo</td>
                  </tr>                  

                  <tr>
                    <td class="align-middle">21/01/2018</td>
                    <td class="align-middle">Miércoles</td>
                    <td class="align-middle">Día de Santa Ines</td>
                  </tr>

                  <tr>
                    <td class="align-middle">10/02/2018</td>
                    <td class="align-middle">Lunes</td>
                    <td class="align-middle">Lunes de carnaval</td>
                  </tr>

                  <tr>
                    <td class="align-middle">11/02/2018</td>
                    <td class="align-middle">Martes</td>
                    <td class="align-middle">Martes de carnaval</td>
                  </tr>

                  <tr>
                    <td class="align-middle">01/05/2018</td>
                    <td class="align-middle">Martes</td>
                    <td class="align-middle">Día Internacional del Trabajador</td>
                  </tr>

                  <tr>
                    <td class="align-middle">24/06/2018</td>
                    <td class="align-middle">Martes</td>
                    <td class="align-middle">Día </td>
                  </tr>
                  <tr>
                    <td class="align-middle">24/07/2018</td>
                    <td class="align-middle">Martes</td>
                    <td class="align-middle">Día</td>
                  </tr>
                  <tr>
                    <td class="align-middle">12/10/2018</td>
                    <td class="align-middle">Jueves</td>
                    <td class="align-middle">Día de la resistencia Indigena</td>
                  </tr>
                  
                   </tbody>

  </table>
        <!--<span>dia1, dias2, dia3, dia4, dia5, dia6, dia7, dia8, dia9, dia10, dia11 </span>
          
            <li>data1</li>
              <li>data2</li>
              <li>data3</li>
              <li>data4</li>
              <li>data5</li>
              <li>data6</li>
              <li>data7</li>-->
            
       
      </div>
      
      <div class="form-group col-md-3">
        {!! Form::label('fecha_feriado', 'Ingresar día Feriado') !!} <i class="fas fa-calendar"></i>
        {!! Form::date('fecha_feriado', null, ['class' => 'form-control']) !!}
        </div>
        

        <div class="col-md-1">
        <br><br>
           <input type="button" class="btn btn-sm btn-success" value="Registrar">
        </div>

    </div>
</div>

   
</fielset>


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
