@extends('admin.layouts.admin')

@section('content')

<div class="container fuente-contenido">
	<div class="card">
   	 <div class="card-header">
        <legend>Configuración de Datos Locales</legend>
     </div>
  
    <div class="card-block">
        <fielset> 
    
    @include ('admin.gerente.partials.submenu.gerente-vistas')<br>
    
<h1>Horarios de Grupos</h1>
<h1>Calendario feriado</h1>
<h1>Conformación de grupo</h1>
<h1></h1>
</fielset>
</div>
</div>
</div>
@endsection