@extends('admin.layouts.admin')

@section('content')
<div class="container fuente-contenido">
	<div class="card">
   	 <div class="card-header">
        <legend>Asistencias empleados</legend>
     </div>
    <div class="card-block">
     <fielset>


    
    <br>

<h1 class="text-center">Registro de Asistencias</h1>
<!--<h3 style="text-align: center;">Actualizar Carga familiar</h3>-->

<div class="margin-center col-md-10">	
<div class="table-responsive" >
		
			


            <table class="table-hover table-sm table-bordered" style="clear: both;">
                <thead class="thead-light thead-label-sm">
                  <tr>
                    <th class="col-md-2">Cedula</th>
                    <th class="col-md-6">Nombres y apellidos</th>
                    <th class="col-md-2">Fecha</th>
                    <th></th>
                   </tr>
                </thead>
                <tbody class="tbody-label-sm">
                  <tr>
                    <td class="align-middle">V21564987</td>
                    <td class="align-middle">Hugo Rafael Alí Zorrilla</td>
                    <td class="align-middle">-----</td>
                    
                    <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal3"> Registrar </button>
                    </td>
                  </tr>
                  
                  <tr>
                    <td class="align-middle">V5879747</td>
                    <td class="align-middle">renzo jose rojas quezada</td>
                    <td class="align-middle">------</td>
                    
                    <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal3"> Registrar </button>
                    </td>
                  </tr>
                   </tbody>

	           </table>

</fieldset>
</div></div></div>

<br>




<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModal3Label" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModal3Label">Asignacion De Horas Mensuales</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>

      <div class="modal-body">
    
      <h1 class="text-center">Empleado Hugo Zorilla</h1>
      <br>
      <form>  
        <div class="row">
          <div class="form-group mb-2 col ">
             <label for="staticEmail2" class="">Horas Extras Diurnas</label>
          </div>
          <div class="form-group mx-sm-3 mb-1 col-4">
            <input type="text" class="form-control" id="inputPassword2" placeholder="">
          </div>
        </div>
        
        <div class="row">
          <div class="form-group mb-2 col ">
             <label for="staticEmail2" class="">Horas Faltantes Diurnas</label>
          </div>
          <div class="form-group mx-sm-3 mb-1 col-4">
            <input type="text" class="form-control" id="inputPassword2" placeholder="">
          </div>
        </div>
        
        <div class="row">
          <div class="form-group mb-2 col ">
             <label for="staticEmail2" class="">Horas Extras Nocturnas</label>
          </div>
          <div class="form-group mx-sm-3 mb-1 col-4">
            <input type="text" class="form-control" id="inputPassword2" placeholder="">
          </div>
        </div>
        
        <div class="row">
          <div class="form-group mb-2 col ">
             <label for="staticEmail2" class="">Horas Faltantes Nocturnas</label>
          </div>
          <div class="form-group mx-sm-3 mb-1 col-4">
            <input type="text" class="form-control" id="inputPassword2" placeholder="">
          </div>
        </div>

        <div class="row">
        <div class="form-group mb-2 col ">
             <label for="staticEmail2" class="">Horas Extras feriado Diurnas</label>
          </div>
          <div class="form-group mx-sm-3 mb-1 col-4">
            <input type="text" class="form-control" id="inputPassword2" placeholder="">
          </div>
        </div>
        
        <div class="row">
          <div class="form-group mb-2 col ">
             <label for="staticEmail2" class="">Horas Faltantes feriado Diurnas</label>
          </div>
          <div class="form-group mx-sm-3 mb-1 col-4">
            <input type="text" class="form-control" id="inputPassword2" placeholder="">
          </div>
        </div>
        
        <div class="row">
          <div class="form-group mb-2 col ">
             <label for="staticEmail2" class="">Horas Extras feriado Nocturnas</label>
          </div>
          <div class="form-group mx-sm-3 mb-1 col-4">
            <input type="text" class="form-control" id="inputPassword2" placeholder="">
          </div>
        </div>
        
        <div class="row">
          <div class="form-group mb-2 col ">
             <label for="staticEmail2" class="">Horas Faltantes feriado Nocturnas</label>
          </div>
          <div class="form-group mx-sm-3 mb-1 col-4">
            <input type="text" class="form-control" id="inputPassword2" placeholder="">
          </div>
        </div>

       
      

      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Guardar</button>
      </div>

      </div>
    </form>
    </div>
  </div>
</div>


@endsection