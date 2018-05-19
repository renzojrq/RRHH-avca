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


    <div class="col-md-3 margin-center">
      <div class="form-group">
        {!! Form::label('nivel_academico', 'Período') !!}
        <select name="nivel_academico" id="nivel_academico" class="form-control" @change="obtenerProfesiones"
                v-model="nivel_academico">
         
          <option value="bachiller">Mayo 2018</option>
          
        </select>
      
</div> </div>


<hr>
<footer>
<!-- <button type="submit" class="btn btn-primary" style="text-align: center;">Imprimir</button>  
 -->
</footer>


<div>

  <a href="{{ route('consulta.voucher')  }}" class="btn btn-primary">consulta</a>
</div> 

<!--</div>-->



@endsection