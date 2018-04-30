@extends('admin.layouts.admin')

@section('content')
<div class="container fuente-contenido">
	<div class="card">
   	 <div class="card-header">
        <legend>Empleados</legend>
     </div>
    <div class="card-block">
     <fielset>


    
    @include ('admin.gerente.partials.submenu.empleado-datos')
    <br>

<h1>estoy en Carga familiar</h1>


@endsection