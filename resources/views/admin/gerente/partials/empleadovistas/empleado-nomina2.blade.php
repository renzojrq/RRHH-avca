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
          <option value="tsu">Abril 2018</option>
          <option value="profesional">Marzo 2018</option>
          <option value="bachiller">Febrero 2018</option>
          <option value="tsu">Enero 2018</option>
          <option value="profesional">Diciembre 2017</option>
          <option value="especialista 1">Noviembre 2017</option>
          <option value="especialista 2">Octubre 2017</option>
        </select>
      
</div> </div>


  <table class="table-hover" style="clear: both;">
                <thead class="thead-light thead-label-sm">
                  <tr>
                    <th class="col-md-1 text-sm-left">Código</th>                  
                    <th class="col-md-4 ">Concepto</th>
                    <th class="col-md-1 text-sm-center">Cantidad</th>
                    <th class="col-md-1 text-sm-center">% o Monto</th>
                    <th class="col-md-1 text-sm-right align-middle">Asignaciones</th>
                    <th class="col-md-1 text-sm-right align-middle">Deducciones</th>
                    <th class="col-md-1 text-sm-center align-middle">--</th>
                   </tr>
                </thead>
                <tbody class="tbody-label-sm">
                  <tr>
                    <td class="align-middle text-sm-left">101</td>
                    <td class="align-middle">Sueldo Básico</td>
                    <td class="align-middle"></td>
                    <td class="align-middle"></td>
                    <td class="align-middle text-sm-right">2000000</td>
                    <td class="align-middle"></td>
                    <td class="align-middle"></td>
                  </tr>
                  <tr>
                    <td class="align-middle text-sm-left">103</td>
                    <td class="align-middle">Prima por antigüedad</td>
                    <td class="align-middle"></td>
                    <td class="align-middle text-sm-center">2</td>
                    <td class="align-middle text-sm-right">40000</td>
                    <td class="align-middle"></td>
                    <td class="align-middle"></td>
                  </tr>
                  <tr>
                    <td class="align-middle text-sm-left">105</td>
                    <td class="align-middle">Prima por hijo</td>
                    <td class="align-middle"></td>
                    <td class="align-middle"></td>
                    <td class="align-middle text-sm-right"></td>
                    <td class="align-middle"></td>
                    <td class="align-middle"></td>
                  </tr>
                  <tr>
                    <td class="align-middle text-sm-left">107</td>
                    <td class="align-middle">Bono de Riesgo</td>
                    <td class="align-middle"></td>
                    <td class="align-middle"></td>
                    <td class="align-middle text-sm-right">500000</td>
                    <td class="align-middle"></td>
                    <td class="align-middle"></td>
                  </tr>
                  <tr>
                    <td class="align-middle text-sm-left">109</td>
                    <td class="align-middle">Hora de Vuelo</td>
                    <td class="align-middle text-sm-center">50</td>
                    <td class="align-middle text-sm-center">100000</td>
                    <td class="align-middle text-sm-right">5000000</td>
                    <td class="align-middle"></td>
                    <td class="align-middle"></td>
                  </tr>
                  <tr>
                    <td class="align-middle text-sm-left">201</td>
                    <td class="align-middle">Bono de puntualidad</td>
                    <td class="align-middle"></td>
                    <td class="align-middle"></td>
                    <td class="align-middle text-sm-right">500000</td>
                    <td class="align-middle"></td>
                    <td class="align-middle"></td>
                  </tr>
                  <tr>
                    <td class="align-middle text-sm-left">502</td>
                    <td class="align-middle">Seguro Social Obligatorio</td>
                    <td class="align-middle"></td>
                    <td class="align-middle text-sm-center">4</td>
                    <td class="align-middle"></td>
                    <td class="align-middle text-sm-right">80000</td>
                    <td class="align-middle"></td>
                  </tr>
                  <tr>
                    <td class="align-middle text-sm-left">504</td>
                    <td class="align-middle">Seguro de Paro Forzoso</td>
                    <td class="align-middle"></td>
                    <td class="align-middle text-sm-center">2</td>
                    <td class="align-middle"></td>
                    <td class="align-middle text-sm-right">40000</td>
                    <td class="align-middle"></td>
                  </tr>
                  <tr>
                    <td class="align-middle text-sm-left ">506</td>
                    <td class="align-middle">FAOV</td>
                    <td class="align-middle"></td>
                    <td class="align-middle text-sm-center">2</td>
                    <td class="align-middle"></td>
                    <td class="align-middle text-sm-right">40000</td>
                    <td class="align-middle"></td>
                  </tr>
                  <tr>
                    <th class="col-md-1 text-sm-left"></th>                  
                    <th class="col-md-4 "></th>
                    <td class="align-middle"></td>
                    <th class="col-md-1 text-sm-center">Total</th>
                    <th class="col-md-1 align-middle text-sm-right">8040000</th>
                    <th class="col-md-1 align-middle text-sm-right">160000</th>
                    <th class="col-md-1 text-sm-center align-middle"></th>
                  </tr>
                   <tr>
                    <th class="col-md-1 text-sm-left"></th>                  
                    <th class="col-md-4 "></th>
                    <th class="col-md-1 text-sm-center"></th>
                    <th class="col-md-1 text-sm-center"></th>
                    <th class="col-md-1 text-sm-right align-middle"></th>
                    <th class="col-md-1 text-sm-right align-middle">Total a pagar</th>
                    <th class="col-md-1 text-sm-center align-middle">7880000</th>
                   </tr>
                   </tbody>
  </table>
<hr>
<footer>
<button type="submit" class="btn btn-primary" style="text-align: center;">Imprimir</button>  

</footer>


<div>

  <a href="{{ route('consulta.voucher')  }}" class="btn btn-primary">consulta</a>
</div> 

<!--</div>-->



@endsection