@extends('admin.layouts.admin')

@section('content')
<div class="container fuente-contenido">
	<div class="card">
   	 <div class="card-header">
        <legend>Aspirantes</legend>
     </div>
    <div class="card-block">

    @include ('admin.gerente.partials.submenu.seleccion-gerente')
<br>
      <div class="text-lg-center" style="font-weight: bold;">Aspirantes Verificados 
      </div>
      <br>
    
    <div class="col-md-6 margin-center">
    <div class="table-responsive">

    <table class="table-hover table-sm table-bordered col" style="clear: both;">
                
                  <tr>
                  <thead class="thead-light thead-label-sm">

                    <th class="col-md-1 align-middle">Fecha</th>
                    <th class="col-md-11">Nombres y apellidos</th>
                    
                    </tr>
                </thead>
                <tbody class="tbody-label">
                  <tr>
                    <td>20/10/2017</td>
                    <td>Hugo Rafael Alí Zorrilla</td>

                  </tr>
                                           
                  <tr>
                    <td>22/12/2017</td>
                    <td>Jesús Machado</td>
                  </tr>
                  </tr>
                </tbody>
              </table>
              <br>      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#convocatoria" style="float: center; margin-bottom: 10px;"> <i class="fas fa-envelope-square"> </i>  Convocar a entrevista
              </button>           
             
</div>

</div>
	</div>
   </div>
</div>

<!-- Modal Configurar Convocatoria-->

    <div class="modal fade" id="convocatoria" tabindex="-1" role="dialog" aria-labelledby="convocatoria" aria-hidden="true" class="fondo-modal">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header color-cabecera">
              <h5 class="modal-title" id="titulo">Convocatoria para entrevista Preliminar</h5>

              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

  <div class="modal-body">
     <form class="form-group">
   
      <div class="form-group">
         <label for="">Lugar:</label>
         <input type="text" class="form-control" id="lugar" name="lugar" value="Primer piso del aeropuerto Antonio José de Sucre">
       </div>
       <div class="form-group row">
       <div class="form-group col-md-6">
          <label for="">Fecha:</label>
          <input type="text" class="form-control" id="hora" name="hora" value="27/04/2018">
       </div>
       <div class="form-group col-md-6">
           <label for="">Hora:</label>
           <input type="text" class="form-control" id="hora" name="hora" value="08:00">
           </div>
        </div>

<label> Recaudos a consignar:</label>

        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input radio-center" id="0">
          <label class="custom-control-label" for="0">Certificado Médico</label>
      </div>

      <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="1">
          <label class="custom-control-label" for="1">Título de Grado</label>
      </div>

        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="2">
          <label class="custom-control-label" for="2">Resultados de prueba Psicotécnica</label>
      </div>


        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="3">
          <label class="custom-control-label" for="3">RIF</label>
      </div>


        </form>
  </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-primary centrado-boton"><i class="far fa-envelope"></i> Enviar</button>
        </div> 

    
  </div>
 </div>
</div>
     



@endsection