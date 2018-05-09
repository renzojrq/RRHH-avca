@extends('admin.layouts.admin')

@section('content')
<div class="container fuente-contenido">
	<div class="card">
   	 <div class="card-header">
        <legend>Empleados / Actualizar carga familiar</legend>
     </div>
    <div class="card-block">
     <fielset>


    
    @include ('admin.gerente.partials.submenu.empleado-vistas')
    <br>

<!--<h3 style="text-align: center;">Actualizar Carga familiar</h3>-->

	
<div class="margin-center col-md-10">	
<div class="table-responsive" >
		
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#familiar" style="float: right; margin-bottom: 10px;"> <i class="fas fa-plus-square"> </i> Agregar Familiar</button>


  <table class="table-hover table-sm table-bordered" style="clear: both;">
                <thead class="thead-light thead-label-sm">
                  <tr>
                    <th class="col-md-2">C.I.</th>
                    <th class="col-md-4">Nombres y apellidos</th>
                    <th class="col-md-1 text-sm-center align-middle">F. de Nac.</th>
                    <th class="col-md-1 text-sm-center align-middle">Sexo</th>
                    <th class="col-md-1 text-sm-center align-middle">Parentesco</th>
                   </tr>
                </thead>
                <tbody class="tbody-label-sm">
                  <tr>
                    <td class="align-middle">V21564987</td>
                    <td class="align-middle">Hugo Rafael Alí Zorrilla</td>
                    <td class="align-middle">30/10/1993</td>
                    <td class="align-middle">Masculino</td>
                    <td class="align-middle">Hermano</td>
                  </tr>
                  
                   </tbody>

	</table>

</fieldset>
</div></div></div>

<br>
  <div class="modal fade" id="familiar" tabindex="-1" role="dialog" aria-labelledby="familiar" aria-hidden="true" class="fondo-modal">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header color-cabecera">
              <h5 class="modal-title" id="titulo">Agregar Familiar</h5>

              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

  <div class="modal-body">
     
            
{!! Form::open() !!}

 <div class="col-md-6 margin-center">
      <div class="form-group">
        {!! Form::label('ncedula', 'C.I.') !!}
        {!! Form::text('descripcion', null, ['class' => 'form-control']) !!}
      </div>
    </div>
<div class="row form-group">
   

<div class="col-md-5">
      {!! Form::label('tipo oficio', 'Nombres') !!}
      {!! Form::text('tipo_oficio', null, ['class' => 'form-control']) !!}
    </div>


<div class="col-md-5">
      {!! Form::label('tipo oficio', 'Apellidos') !!}
      {!! Form::text('tipo_oficio', null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="row">
    
<div class="col-md-5">
      {!! Form::label('parentes', 'Parentesco') !!}
      {!! Form::select('subtipo', [
          '' => 'seleccione',
          'padre' => 'Padre',
          'madre' => 'Madre',
          'hijo' => 'Hij@',
          'pareja' => 'Espos@'
                    ], '', ['class' => 'form-control']) !!}
    </div>
    <div class="col-md-5">
      <div class="form-group">
        {!! Form::label('genero', 'Sexo: ') !!} <br>
        {!! Form::radio('genero', 'femenino', false, []) !!} <i class="fas fa-female fa-lg"></i>
        {!! Form::radio('genero', 'masculino', false, []) !!} <i class="fas fa-male fa-lg"></i>
      </div>
    </div>

</div>
  <!--<H3 class="text-center">Cargar oficios</H3>-->
 
 <div class="row form-group">
    
<!--</div>-->
    <div class="col-md-5">
      <div class="form-group">
        {!! Form::label('fecha_inicio', 'Fecha de Nacimiento') !!} <i class="fas fa-calendar"></i>
        {!! Form::date('fecha_inicio', null, ['class' => 'form-control']) !!}
      </div>
    </div>
    </div>
  <hr>
<div class="row">
  <div class="col-md-10">
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
<!--</div>
</div>
</div>
{!! Form::close() !!}



@endsection