@extends('admin.layouts.admin')

@section('content')
<div class="container fuente-contenido">
	<div class="card">
   	 <div class="card-header">
        <legend>Aspirantes</legend>
     </div>
    <div class="card-block">
 <fieldset>
<!-- <div class="dropdown show">-->
<div class="input-group input-group-md mb-3 col-md-8 margin-center">

  <div class="input-group input-group-prepend">
    <span class="input-group-text thead-label-sm" id="inputGroup-sizing-sm">Vacante a Consultar</span>
    <input class="form-control"  list="mylist"/>   
  </div>

  <datalist id="mylist">
    <option>Area Operacional, Cargo Piloto</option>
    <option>Copiloto, primer oficial</option>
    <option>Sobrecargo</option>
    <option>Administrador de operaciones</option>
    <option>Mecánico</option>
    <option>Guía Caníno</option>
    <option>Operador de Tráfico</option>
  </datalist>
</div>
    </fieldset>  
    @include ('admin.gerente.partials.submenu.seleccion-gerente')
    <br>
      <div class="margin-center col-md-6">
   
      <div class="table-responsive" >
	  <table class="table-hover table-sm table-bordered col" style="clear: both;">
                <thead class="thead-light thead-label-sm">
                  <tr>
                    <th class="col-md-1">Fecha</th>
                    <th class="col-md-4">Nombres y apellidos</th>
                    <th class="col-md-1 text-sm-center">Resumen de entrevista</th>
                    
                    </tr>
                </thead>
                <tbody class="tbody-label-sm">
                  <tr>
                    <td class="align-middle">20/10/2017</td>
                    <td class="align-middle">Hugo Rafael Alí Zorrilla</td>
                    <td class="text-sm-center"><button type="button" class="btn btn-info" data-toggle="modal" data-target="#entrevista"><i class="fas fa-clipboard"></i></button></td>
                    
                  </tr>
                  
                  <tr>
                    <td class="align-middle">22/12/2017</td>
                    <td class="align-middle">Leomar Alexander Esparragoza</td>
                    <td class="text-sm-center"><button type="button" class="btn btn-info" data-toggle="modal" data-target="#actualizartabulador"><i class="fas fa-clipboard"></i></button></td>
                  </tr>
                  
                  <tr>
                    <td class="align-middle">22/12/2017</td>
                    <td class="align-middle">Jesús Machado</td>
                    <td class="text-sm-center"><button type="button" class="btn btn-info" data-toggle="modal" data-target="#actualizartabulador"><i class="fas fa-clipboard"></i></button></td>

                  </tr>
                  <tr>
                    <td class="align-middle">10/01/2018</td>
                    <td class="align-middle">Pedro Russo</td>
                    <td class="text-sm-center"><button type="button" class="btn btn-info" data-toggle="modal" data-target="#actualizartabulador"><i class="fas fa-clipboard"></i></button></td>

                  </tr>
                </tbody>
              </table>
        </div>
        </div>
        </div>
        </div></div>

	</div>
   </div>

</div>


   <!-- ModalConfigurarConceptosSueldoBasico -->

  <div class="modal fade" id="entrevista" tabindex="-1" role="dialog" aria-labelledby="entrevista" aria-hidden="true" class="fondo-modal">
    <div class="modal-dialog " role="document">
        <div class="modal-content">
         <div class="modal-header color-cabecera">
       <h5 class="modal-title" id="exampleModalLongTitle"> Ver Resumen de Entrevista Preliminar</h5>
       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
       <span aria-hidden="true">&times;</span>
       </button>
       </div>
    <div class="modal-body">
    <form>
        <fieldset disabled="">
         
        
       <table class="table-bordered" style="clear: both;">
                <thead class="thead-label">
                  <tr>
                    <th></th>
                    <th>4</th>
                    <th>3</th>
                    <th>2</th>
                    <th>1</th>
                    <th>0</th>
                  </tr>
                </thead>
                <tbody class="tbody-label">
                  <tr>
                    <th>Presentación Personal</th>
                    <td><div class="custom-control custom-radio" >
                          <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input" checked>
                          <label class="custom-control-label" for="customRadio1"></label>
                        </div></td>
                          
                          <td><div class="custom-control custom-radio">
                          <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                          <label class="custom-control-label" for="customRadio2"></label>
                        </div></td>

                          <td><div class="custom-control custom-radio">
                          <input type="radio" id="customRadio3" name="customRadio" class="custom-control-input">
                          <label class="custom-control-label" for="customRadio3"></label>
                        </div></td>
                          
                          <td><div class="custom-control custom-radio">
                          <input type="radio" id="customRadio4" name="customRadio" class="custom-control-input">
                          <label class="custom-control-label" for="customRadio4"></label>
                        </div></td>
                          <td><div class="custom-control custom-radio">
                          <input type="radio" id="customRadio5" name="customRadio" class="custom-control-input">
                          <label class="custom-control-label" for="customRadio5"></label>
                        </div></td>
                   </tr>
                  <tr>
                    <th>Inteligencia Efectiva</th>
                    <td><div class="custom-control custom-radio">
                          <input type="radio" id="customRadio6" name="customRadio1" class="custom-control-input">
                          <label class="custom-control-label" for="customRadio6"></label>
                        </div></td>
                           <td><div class="custom-control custom-radio">
                          <input type="radio" id="customRadio7" name="customRadio1" class="custom-control-input" checked>
                          <label class="custom-control-label" for="customRadio7"></label>
                        </div></td>
                           <td><div class="custom-control custom-radio">
                          <input type="radio" id="customRadio8" name="customRadio1" class="custom-control-input">
                          <label class="custom-control-label" for="customRadio8"></label>
                        </div></td>
                           <td><div class="custom-control custom-radio">
                          <input type="radio" id="customRadio9" name="customRadio1" class="custom-control-input">
                          <label class="custom-control-label" for="customRadio9"></label>
                        </div></td>
                           <td><div class="custom-control custom-radio">
                          <input type="radio" id="customRadio10" name="customRadio1" class="custom-control-input">
                          <label class="custom-control-label" for="customRadio10"></label>
                        </div></td>
                  </tr>
                  <tr>
                    <th>Formación</th>
                        <td><div class="custom-control custom-radio">
                          <input type="radio" id="customRadio11" name="customRadio2" class="custom-control-input">
                          <label class="custom-control-label" for="customRadio11"></label>
                        </div></td>
                           
                           <td><div class="custom-control custom-radio">
                          <input type="radio" id="customRadio12" name="customRadio2" class="custom-control-input" checked>
                          <label class="custom-control-label" for="customRadio12"></label>
                        </div></td>
                           
                           <td><div class="custom-control custom-radio">
                          <input type="radio" id="customRadio13" name="customRadio2" class="custom-control-input">
                          <label class="custom-control-label" for="customRadio13"></label>
                        </div></td>
                           
                           <td><div class="custom-control custom-radio">
                          <input type="radio" id="customRadio14" name="customRadio2" class="custom-control-input">
                          <label class="custom-control-label" for="customRadio14"></label>
                        </div></td>
                           
                           <td><div class="custom-control custom-radio">
                          <input type="radio" id="customRadio15" name="customRadio2" class="custom-control-input">
                          <label class="custom-control-label" for="customRadio15"></label>
                        </div></td>
                  </tr>

                  <tr>
                    <th>Experiencia</th>
                     <td><div class="custom-control custom-radio">
                          <input type="radio" id="customRadio16" name="customRadio3" class="custom-control-input">
                          <label class="custom-control-label" for="customRadio16"></label>
                        </div></td>
                                            <td><div class="custom-control custom-radio">
                          <input type="radio" id="customRadio17" name="customRadio3" class="custom-control-input">
                          <label class="custom-control-label" for="customRadio17"></label>
                        </div></td>
                                            <td><div class="custom-control custom-radio">
                          <input type="radio" id="customRadio18" name="customRadio3" class="custom-control-input" checked>
                          <label class="custom-control-label" for="customRadio18"></label>
                        </div></td>
                                            <td><div class="custom-control custom-radio">
                          <input type="radio" id="customRadio19" name="customRadio3" class="custom-control-input">
                          <label class="custom-control-label" for="customRadio19"></label>
                        </div></td>
                                            <td><div class="custom-control custom-radio">
                          <input type="radio" id="customRadio20" name="customRadio3" class="custom-control-input">
                          <label class="custom-control-label" for="customRadio20"></label>
                        </div></td>
                  </tr>

                  <tr>
                    <th>Facilidad de Expresión</th>
                     <td><div class="custom-control custom-radio">
                          <input type="radio" id="customRadio21" name="customRadio4" class="custom-control-input" checked>
                          <label class="custom-control-label" for="customRadio21"></label>
                        </div></td>
                                            <td><div class="custom-control custom-radio">
                          <input type="radio" id="customRadio22" name="customRadio4" class="custom-control-input">
                          <label class="custom-control-label" for="customRadio22"></label>
                        </div></td>
                                            <td><div class="custom-control custom-radio">
                          <input type="radio" id="customRadio23" name="customRadio4" class="custom-control-input">
                          <label class="custom-control-label" for="customRadio23"></label>
                        </div></td>
                                            <td><div class="custom-control custom-radio">
                          <input type="radio" id="customRadio24" name="customRadio4" class="custom-control-input">
                          <label class="custom-control-label" for="customRadio24"></label>
                        </div></td>
                                            <td><div class="custom-control custom-radio">
                          <input type="radio" id="customRadio25" name="customRadio4" class="custom-control-input">
                          <label class="custom-control-label" for="customRadio25"></label>
                        </div></td>
                  </tr>

                  <tr>
                    <th>Habilidad para relacionarse</th>
                     <td><div class="custom-control custom-radio">
                          <input type="radio" id="customRadio26" name="customRadio5" class="custom-control-input">
                          <label class="custom-control-label" for="customRadio26"></label>
                        </div></td>
                                            <td><div class="custom-control custom-radio">
                          <input type="radio" id="customRadio27" name="customRadio5" class="custom-control-input">
                          <label class="custom-control-label" for="customRadio27"></label>
                        </div></td>
                                            <td><div class="custom-control custom-radio">
                          <input type="radio" id="customRadio28" name="customRadio5" class="custom-control-input" checked>
                          <label class="custom-control-label" for="customRadio28"></label>
                        </div></td>
                                            <td><div class="custom-control custom-radio">
                          <input type="radio" id="customRadio29" name="customRadio5" class="custom-control-input">
                          <label class="custom-control-label" for="customRadio29"></label>
                        </div></td>
                                            <td><div class="custom-control custom-radio">
                          <input type="radio" id="customRadio30" name="customRadio5" class="custom-control-input">
                          <label class="custom-control-label" for="customRadio30"></label>
                        </div></td>
                  </tr>

                  <tr>
                    <th>Otros conocimientos</th>
                     <td><div class="custom-control custom-radio">
                          <input type="radio" id="customRadio31" name="customRadio6" class="custom-control-input">
                          <label class="custom-control-label" for="customRadio31"></label>
                        </div></td>
                                            <td><div class="custom-control custom-radio">
                          <input type="radio" id="customRadio32" name="customRadio6" class="custom-control-input" checked>
                          <label class="custom-control-label" for="customRadio32"></label>
                        </div></td>
                                            <td><div class="custom-control custom-radio">
                          <input type="radio" id="customRadio33" name="customRadio6" class="custom-control-input">
                          <label class="custom-control-label" for="customRadio33"></label>
                        </div></td>
                                            <td><div class="custom-control custom-radio">
                          <input type="radio" id="customRadio34" name="customRadio6" class="custom-control-input">
                          <label class="custom-control-label" for="customRadio34"></label>
                        </div></td>
                                            <td><div class="custom-control custom-radio">
                          <input type="radio" id="customRadio35" name="customRadio6" class="custom-control-input">
                          <label class="custom-control-label" for="customRadio35"></label>
                        </div></td>
                  </tr>
                  
                 
                 </tbody>
              </table>
               <div class="form-group">
    <label for="exampleFormControlTextarea1"><h6>Observaciones:</h6></label>
    <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Hola que tal" rows="2"></textarea>
  </div>
        </fieldset>
         </form>

   
        <div class="modal-footer">
         
           <button type="submit" class="btn btn-primary centrado-boton">Aprobar</button>
         </div> 
    </div>
            
          </div>
        </div>
      </div>
      


@endsection