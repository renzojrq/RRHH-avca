@extends('admin.layouts.admin')

@section('content')
<div class="container fuente-contenido">
	<div class="card">
   	 <div class="card-header">
      <legend>Empleados / Actualizar datos personales</legend>
     </div>
  <div class="card-block">
  <fieldset>
        
  @include ('admin.gerente.partials.submenu.empleado-datos')
  
   
    
<br>
<div class="row">
<div class="col-md-6">
      <div class="form-group">
        {!! Form::label('nombres', 'Nombres') !!}
        {!! Form::text('nombres', null, ['class' => 'form-control']) !!}
      </div>
    </div>
    <div class="col-md-5">
      <div class="form-group">
        {!! Form::label('foto', 'Foto de perfil') !!}
        {!! Form::file('foto', ['class' => 'form-control']) !!}
      </div>
</div>

</div>
  <div class="row">
    <div class="col-md-2">
      <div class="form-group">
        {!! Form::label('estado_civil', 'Estado civil', []) !!}
        {!! Form::select('estado_civil', [
            '' => 'Seleccione',
            'solter@' => 'Solter@',
            'casad@' => 'Casad@',
            'divorciad@' => 'Divorciad@',
            'concubin@' => 'Concubin@',
            'viud@' => 'Viud@',
            ], ' ', ['class' => 'form-control']) !!}
      </div>
    </div>
    <div class="col-md-3">
      <div class="form-group">
        {!! Form::label('fecha_nacimiento', 'Fecha de nacimiento') !!} <i class="fas fa-calendar"></i>
        {!! Form::date('fecha_nacimiento', null, ['class' => 'form-control']) !!}
      </div>
    </div>
    <div class="col-md-4">
      <div class="form-group">
        {!! Form::label('genero', 'Sexo: ') !!} <br>
        {!! Form::radio('genero', 'femenino', false, []) !!} <i class="fas fa-female fa-lg"></i>
        {!! Form::radio('genero', 'masculino', false, []) !!} <i class="fas fa-male fa-lg"></i>
      </div>
    </div>
</div>
<div class="row">

    <div class="col-md-2">
      <div class="form-group">
        {!! Form::label('nivel_academico', 'Nivel académico') !!}
        <select name="nivel_academico" id="nivel_academico" class="form-control" @change="obtenerProfesiones"
                v-model="nivel_academico">
          <option value="" selected="selected">Seleccione</option>
          <option value="bachiller">Bachiller</option>
          <option value="tsu">TSU</option>
          <option value="profesional">Universitario</option>
          <option value="especialista 1">Maestría</option>
          <option value="especialista 2">Doctorado</option>
        </select>
      
</div> </div>
<div class="col-md-4">
      <div class="form-group">
        {!! Form::label('profesion', 'Profesión') !!}
        <select name="profesion" id="profesion" class="form-control" v-model="profesiones">
          @{{ profesiones }}
          <option v-for="profesion in profesiones" :value="profesion.titulo">@{{ profesion.titulo }}</option>
        </select>
      </div>
    </div>
  </div>

<div class="row">
    <div class="col-md-2">
      <div class="form-group">
        {!! Form::label('estado', 'Estado') !!}
        {!! Form::select('estado', [], [], ['class' => 'form-control']) !!}
      </div>
    </div>
    <div class="col-md-2">
      <div class="form-group">
        {!! Form::label('ciudad', 'Ciudad') !!}
        {!! Form::select('ciudad', [], [], ['class' => 'form-control']) !!}
      </div>
    </div>

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
    <div class="col-md-4">
      <div class="form-group">
        {!! Form::label('email', 'Correo electrónico', []) !!}
        {!! Form::email('email', null, ['class' => 'form-control']) !!}
      </div>
    </div>
  </div>

  <div class="row align-items-center">
    <div class="col-md-3">
      <div class="form-group">
        {!! Form::label('discapacidad', '¿Posee alguna discapacidad?') !!} <br>
        {!! Form::radio('discapacidad', 'si', []) !!} Si
        {!! Form::radio('discapacidad', 'no', []) !!} No
      </div>
    </div>
    <div class="col-md-3">
      <div class="form-group">
        {!! Form::label('tipo_discapacidad', 'Tipo de discapacidad') !!}
        {!! Form::select('tipo_discapacidad', [
            ''                               => 'Seleccione',
            'trastornos de habla y lenguaje' => 'Trastornos de habla y lenguaje',
            'visual'                         => 'Visual',
            'motriz'                         => 'Motriz',
            'auditiva'                       => 'Auditiva'
            ], '', ['class' => 'form-control']) !!}
      </div>
    </div>      </div>

</div>
</fieldset>
<div class="margin-center">
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#convocatoria" style="float: center; margin-bottom: 10px;"> <i class="fas fa-sync"> </i>  Actualizar Datos
              </button>    
</div>
  

@endsection