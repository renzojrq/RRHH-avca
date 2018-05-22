@extends('admin.layouts.admin')

@section('content')

<div class="container fuente-contenido">
  <div class="card">
     <div class="card-header">
        <legend>Empleados / Descarga de constancias</legend>
     </div>
  
    <div class="card-block">
        
    
    @include ('admin.gerente.partials.submenu.gerente-vistas')<br>
    

<div class="container">
  <div class="form-inline">
  <h3>Asigar Turnos a grupos</h3>
  <small>Seleccione el turno correspondiente a los grupos por semana.</small></div>
  <div class="form-inline">
  <div class="col-md-6">
      <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo">Grupo A</button>
  </div>

  <div class="col-md-6">
      <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demob">Grupo B</button>
  </div>
</div>
 <div class="form-inline">
       
 
  <div id="demo" class="collapse col-md-6">
    <li>Luis E. Gutierrez   Agente de Pista</li>
    <li>Renzo J. Rojas      Conductor</li>
    <li>Leomar Esparragoza  Supervisor</li>
    <li>Gerson Vasquez      Logísticas</li>
    <li>Luis P. Coronado    Chequeador</li>
    <li>Ramón López         Mecánico</li>
    <li>Rafael Medina       Agente de Tráfico</li>
  </div>
  <div id="demob" class="collapse col-md-6">
    <select name="" multiple>
      <option value="Agente de Tráfico"></option>
      option
    </select>
  </div>

</div>

</div>


</div>
</div>
</div>
@endsection