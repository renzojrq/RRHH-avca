@extends('admin.layouts.admin')
@section('content')
<div class="container fuente-contenido">
	<div class="card">
   	 <div class="card-header">
        <legend>Empleados / Visualizar / Conceptos devengados</legend>
     </div>
    <div class="card-block">
      <fielset>
    @include ('admin.gerente.partials.submenu.empleado-vistas')
 <div class="margin-center col-md-10"> 
<div class="table-responsive" >
    <br>



<h1>estoy en voucher</h1>
  <table class="table-hover" style="clear: both;">
                <thead class="thead-light thead-label-sm">
                  <tr>   
                    <th class="col-md-4 ">Conceptos</th>
                    <th class="col-md-4 ">monto</th>
                  </tr>

                </thead>

                <tbody class="tbody-label-sm">
                  
                 @foreach ($users as $user)
                    
                   <tr>   
                    <th class="col-md-4 ">{{  $user->descripcion }}</th>
                    <th class="col-md-4 ">{{ $user->monto  }}</th>
                  </tr>
                  

                  @endforeach
                 
                   </tbody>
  </table>

<!--</div>-->



@endsection