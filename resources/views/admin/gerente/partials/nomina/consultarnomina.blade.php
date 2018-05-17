@extends('admin.layouts.admin')

@section('content')
<div class="container fuente-contenido">
   <div class="card">
        <div class="card-header">
            <legend>Consulta de Nómina</legend>
        </div>
        <div class="card-block">

           
                   <br>

     <div class="col-md-12 margin-center">
      <div class="form-group form-inline">

        {!! Form::label('periodo_nomina', 'Período') !!}
        <select name="periodo" id="periodo" class="form-control" @change="obtenerProfesiones"
                v-model="nivel_academico" >
          <option value="05_2018">Mayo 2018</option>
          <option value="04_2018">Abril 2018</option>
          <option value="03_2018">Marzo 2018</option>
          <option value="02_2018">Febrero 2018</option>
          <option value="01_2018">Enero 2018</option>
          <option value="12_2017">Diciembre 2017</option>
          <option value="11_2017">Noviembre 2017</option>
          <option value="10_2017">Octubre 2017</option>
        </select>


      <div class="col-md-1">
      </div>

			        {!! Form::label('tipo_nomina', 'Tipo Nómina') !!}
        <select name="tipo_nomina" id="tipo_nomina" class="form-control" @change="obtenerProfesiones"
                v-model="nivel_academico">
          <option value="regular">Regular</option>
          <option value="alimentacion">Cesta Ticket</option>
          <option value="bv">Bono Vacacional</option>
          <option value="bu">Utilidades</option>
          <option value="arc">Planila ARC</option>
          <option value="prestaciones">Prestaciones Sociales</option>
     	 	</select>


      <div class="col-md-1">
      </div>

        {!! Form::label('filtro_nomina', 'Filtrar por:') !!}
        <select name="periodo" id="periodo" class="form-control" @change="obtenerProfesiones"
                v-model="nivel_academico" >
          <option value="sucursal_total">Sucursal</option>
          <option value="sbasico_total">Depertamento</option>
          <option value="snormal_total">Cargo/option>

          <option value="tripulacion_total">Total Tripulación</option>

        </select>



        
            </div> </div>

        </div>
    </div>




<div class="container">

  <div class="row">
    <div class="col-md-1">
    </div>
    <div class="col-md">
            <p> Total a pagar por sucursal por ms de mayo 2018</p>
          </div>
    <table class="table-hover table-sm table-bordered" style="clear: both;">
                <thead class="thead-light thead-label-sm">
                  <tr>
                    <th class="col-md-2 align-middle">Sucursal</th>
                    <th class="col-md-1 align-middle">Total Sueldo</th>
                    <th class="col-md-1 align-middle text-sm-center">Total Prima por Hijos</th>
                    <th class="col-md-1 align-middle text-sm-center">Total Prima por Antigüedad</th>
                    <th class="col-md-1 align-middle text-sm-center">SSO</th>
                    <th class="col-md-1 text-sm-center align-middle">SPF</th>
                    <th class="col-md-1 align-middle text-sm-center">Horas Extras diurnas</th>
                    <th class="col-md-1 align-middle text-sm-center">Horas Extras nocturnas</th>
                  </tr>
                </thead>

                <tbody class="tbody-label-sm">
                  <tr>
                    <td class="align-middle">Antonio José de Sucre</td>
                    <td class="align-middle">56400000</td>
                    <td class="align-middle text-sm-center">2000000</td>
                    <td class="align-middle text-sm-center">2500000</td>
                    <td class="align-middle text-sm-center">10000</td>
                    <td class="align-middle text-sm-center">10000</td>
                    <td class="align-middle text-sm-center">5011122</td>
                    <td class="align-middle text-sm-center">85554545</td>
                  </tr>

                  <tr>
                    <td class="align-middle">La Chinita</td>
                    <td class="align-middle">96400000</td>
                    <td class="align-middle text-sm-center">4000000</td>
                    <td class="align-middle text-sm-center">5900000</td>
                    <td class="align-middle text-sm-center">40000</td>
                    <td class="align-middle text-sm-center">40000</td>
                    <td class="align-middle text-sm-center">20011122</td>
                    <td class="align-middle text-sm-center">100054545</td>
                  </tr>

                </tbody>
              </table>
        



      </div>
    </div>
    
</div>


@endsection


