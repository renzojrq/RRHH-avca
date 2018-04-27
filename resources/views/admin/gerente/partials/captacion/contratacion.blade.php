

{!! Form::open() !!}

<fieldset>
  <legend>Datos personales</legend>
  <div class="row">
    <div class="col-md-3">
      {!! Form::label('cedula', 'Documento de identidad') !!}
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <select name="nacionalidad" id="nacionalidad" class="form-control">
            <option value="V" selected="selected">V</option>
            <option value="E">E</option>
          </select>
        </div>
        {!! Form::text('cedula', null, ['class' => 'form-control', 'maxlength' => 8]) !!}
      </div>
    </div>
    <div class="col-md-3">
      <div class="form-group">
        {!! Form::label('apellidos', 'Apellidos') !!}
        {!! Form::text('apellidos', null, ['class' => 'form-control']) !!}
      </div>
    </div>
    <div class="col-md-3">
      <div class="form-group">
        {!! Form::label('nombres', 'Nombres') !!}
        {!! Form::text('nombres', null, ['class' => 'form-control']) !!}
      </div>
    </div>
    <div class="col-md-3">
      <div class="form-group">
        {!! Form::label('foto', 'Foto de perfil') !!}
        {!! Form::file('foto', ['class' => 'form-control']) !!}
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-3">
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
    <div class="col-md-2">
      <div class="form-group">
        {!! Form::label('fecha_nacimiento', 'Fecha de nacimiento') !!} <i class="fas fa-calendar"></i>
        {!! Form::date('fecha_nacimiento', null, ['class' => 'form-control']) !!}
      </div>
    </div>
    <div class="col-md-3">
      <div class="form-group">
        {!! Form::label('genero', 'Género') !!} <br>
        {!! Form::radio('genero', 'femenino', false, []) !!} Femenino
        {!! Form::radio('genero', 'masculino', false, []) !!} Masculino
      </div>
    </div>
    <div class="col-md-2">
      <div class="form-group">
        {!! Form::label('nivel_academico', 'Nivel académico') !!}
        <select name="nivel_academico" id="nivel_academico" class="form-control" @change="obtenerProfesiones"
                v-model="nivel_academico">
          <option value="" selected="selected">Seleccione</option>
          <option value="bachiller">Bachiller</option>
          <option value="tsu">TSU</option>
          <option value="profesional">Profesional</option>
          <option value="especialista 1">Especialista 1</option>
          <option value="especialista 2">Especialista 2</option>
        </select>
        {{-- {!! Form::select('nivel_academico', [
            '' => 'Seleccione',
            'bachiller' => 'Bachiller',
            'tsu' => 'TSU',
            'profesional' => 'Profesional',
            'especialista 1' => 'Especialista 1',
            'especialista 2' => 'Especialista 2'
            ], ' ', ['class' => 'form-control']) !!} --}}
      </div>
    </div>
    <div class="col-md-2">
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
    <div class="col-md-3">
      <div class="form-group">
        {!! Form::label('estado', 'Estado') !!}
        {!! Form::select('estado', [], [], ['class' => 'form-control']) !!}
      </div>
    </div>
    <div class="col-md-3">
      <div class="form-group">
        {!! Form::label('ciudad', 'Ciudad') !!}
        {!! Form::select('ciudad', [], [], ['class' => 'form-control']) !!}
      </div>
    </div>
    <div class="col-md-6">
      <div class="form-group">
        {!! Form::label('direccion', 'Dirección local') !!}
        {!! Form::text('direccion', null, ['class' => 'form-control']) !!}
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-4">
      <div class="form-group">
        {!! Form::label('telefono_fijo', 'Teléfono fijo', []) !!}
        {!! Form::text('telefono_fijo', null, ['class' => 'form-control']) !!}
      </div>
    </div>
    <div class="col-md-4">
      <div class="form-group">
        {!! Form::label('telefono_movil', 'Teléfono movil', []) !!}
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
            'motriz'                         => 'motriz',
            'auditiva'                       => 'auditiva'
            ], '', ['class' => 'form-control']) !!}
      </div>
    </div>
    <div class="col-md-6"></div>
  </div>
</fieldset>

<hr>

<fieldset>
  <legend>Datos laborales</legend>
  <div class="row mb-3">
    <div class="col-md-6">
      {!! Form::label('cargo', 'Cargo') !!}
      {!! Form::select('cargo', [
          '' => 'Seleccione',
          ], '', ['class' => 'form-control']) !!}
    </div>
    <div class="col-md-3">
      {!! Form::label('nivel', 'Nivel') !!}
      {!! Form::text('nivel', null, ['class' => 'form-control']) !!}
    </div>
    <div class="col-md-3">
      {!! Form::label('sueldo_base', 'Sueldo Base') !!}
      {!! Form::text('sueldo_base', null, ['class' => 'form-control']) !!}
    </div>
    <div class="col-md-3">

    </div>
  </div>

  <div class="row">
    <div class="col-md-3">
      <div class="form-group">
        {!! Form::label('sucursal', 'Sucursal') !!}
        {!! Form::select('sucursal', [], [], ['class' => 'form-control']) !!}
      </div>
    </div>
    <div class="col-md-3">
      <div class="form-group">
        {!! Form::label('departamento', 'Departamento') !!}
        {!! Form::select('departamento', [], [], ['class' => 'form-control']) !!}
      </div>
    </div>
    <div class="col-md-2">
      <div class="form-group">
        {!! Form::label('tipo_trabajador', 'Tipo de trabajador') !!}
        {!! Form::select('tipo_trabajador', [
            ' '               => 'Seleccione',
            'operativo'      => 'Operativo',
            'administrativo' => 'Administrativo',
            'tripulante'     => 'Tripulante'
            ], ' ', ['class' => 'form-control']) !!}
      </div>
    </div>
    <div class="col-md-2">
      <div class="form-group">
        {!! Form::label('condicion_laboral', 'Condición laboral') !!}
        {!! Form::select('condicion_laboral', [
            ' '          => 'Seleccione',
            'contratado' => 'Contratado',
            'suplente'   => 'Suplente',
            'fijo'       => 'Fijo'
            ], ' ', ['class' => 'form-control']) !!}
      </div>
    </div>
    <div class="col-md-2">
      <div class="form-group">
        {!! Form::label('tipo_horario', 'Tipo de horario') !!}
        {!! Form::select('tipo_horario', [
            ' '        => 'Seleccione',
            'fijo'     => 'Fijo',
            'rotativo' => 'Rotativo',
            ], ' ', ['class' => 'form-control']) !!}
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-5">
      <div class="form-group">
        {!! Form::label('banco', 'Banco') !!}
        <select name="banco" id="banco" class="form-control" @change="checkBanco" v-model="bancoSelected">
          <option v-for="banco in bancos" :value="banco.banco">@{{ banco.banco }}</option>
        </select>
      </div>
    </div>
    <div class="col-md-4">
      {!! Form::label('cuenta_bancaria', 'Número de cuenta bancaria') !!}
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <input type="text" name="codigo_cuenta" id="codigo_cuenta" v-model="codigo_cuenta" size="4"
                 readonly="readonly" class="input-group-text">
        </div>
        {!! Form::text('cuenta_bancaria', null, ['class' => 'form-control', 'maxlength' => 16]) !!}
      </div>
    </div>
    <div class="col-md-3"></div>
  </div>
</fieldset>

<hr>

<fieldset>
  <legend>Carga familiar</legend>
  <table class="table">
    <thead>
    <tr>
      <th>Nombre y Apellido</th>
      <th>Cedula</th>
      <th>Fecha Nac.</th>
      <th>Género</th>
      <th>Parentesco</th>
      <th>Estatus</th>
      <th>&nbsp;</th>
    </tr>
    </thead>
    <tbody>
    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    </tbody>
  </table>
</fieldset>

{!! Form::close() !!}
