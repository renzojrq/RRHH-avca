@extends('admin.layouts.admin')

@section('content')





<div class="container fuente-contenido">
	<div class="card">
   	 <div class="card-header">
      <legend>Empleado / Actualizar Perfil</legend>
     </div>
  <div class="card-block">
  <fieldset>
        
  @include ('admin.gerente.partials.submenu.empleado-vistas')
  
<div class="container justify-content-center" style="background-color: #F5F9FF;">
 <!-- <H3>Empleado a consultar</H3>-->
  

   
    
<br>

<div class="row">


    <div class="col-md-5">
      <div class="form-group">
        {!! Form::label('foto', 'Foto de perfil') !!}
        {!! Form::file('foto', ['class' => 'form-control']) !!}
      </div>
    </div>

</div>

<div class="row">

<fieldset>
<legend>Actualizar Contraseña</legend>
    <div class="form-group">

    <label>Contraseña actual</label> 
    <input type="password" name="" value=""> 

    <label>Nueva contraseña</label>
    <input type="password" name="" value=""> 


    <label>Confirmar nueva contraseña</label>
    <input type="password" name="" value="">

</fieldset>
</div>
</div>
</div>

  
<div class="row">
  

    <div class="col-md-7">
      <div class="form-group">
        {!! Form::label('direccion', 'Dirección local') !!}
        {!! Form::text('direccion', null, ['class' => 'form-control']) !!}
      </div>
  </div>    
  </div>

  <div class="row">
    <div class="col-md-2">
      <div class="form-group">
        {!! Form::label('telefono_fijo', 'Teléfono fijo', []) !!}
        {!! Form::text('telefono_fijo', null, ['class' => 'form-control']) !!}
      </div>
    </div>
    <div class="col-md-2">
      <div class="form-group">
        {!! Form::label('telefono_movil', 'Teléfono móvil', []) !!}
        {!! Form::text('telefono_movil', null, ['class' => 'form-control']) !!}
      </div>
    </div>
    <div class="col-md-5">
      <div class="form-group">
        {!! Form::label('email', 'Correo electrónico', []) !!}
        {!! Form::email('email', null, ['class' => 'form-control']) !!}
      </div>
    </div>
  </div>
  
</div>
</fieldset>
<div class="margin-center">
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#convocatoria" style="float: center; margin-bottom: 10px;"> <i class="fas fa-sync"> </i>  Actualizar Datos </button>    
</div>
  

@endsection