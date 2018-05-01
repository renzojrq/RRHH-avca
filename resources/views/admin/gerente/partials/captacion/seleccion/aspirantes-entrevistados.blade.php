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
    <div class="text-lg-center" style="font-weight: bold;">Aspirantes Entrevistados 
      </div>
      <br>
    
      <div class="margin-center col-md-6">
   
      <div class="table-responsive" >
	  <table class="table-hover table-sm table-bordered col" style="clear: both;">
                <thead class="thead-light thead-label-sm">
                  <tr>
                    <th class="col-md-1">Fecha</th>
                    <th class="col-md-8">Nombres y apellidos</th>
                    <th class="col-md-1 text-sm-center">Resumen de entrevista</th>
                    
                    </tr>
                </thead>
                <tbody class="tbody-label-sm">
                  <tr>
                    <td class="align-middle">20/10/2017</td>
                    <td class="align-middle">Hugo Rafael Alí Zorrilla</td>
                    <td class="text-sm-center"><button type="button" class="btn btn-link" data-toggle="modal" data-target="#entrevista"><i class="fas fa-eye fa-2x" style="color: black"></i></button></td>
                    
                  </tr>
                  
                  <tr>
                    <td class="align-middle">22/12/2017</td>
                    <td class="align-middle">Leomar Alexander Esparragoza</td>
                    <td class="text-sm-center"><button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#actualizartabulador"><i class="fas fa-"></i></button></td>
                  </tr>
                  
                  <tr>
                    <td class="align-middle">22/12/2017</td>
                    <td class="align-middle">Jesús Machado</td>
                    <td class="text-sm-center"><button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#actualizartabulador"><i class="fas fa-"></i></button></td>

                  </tr>
                  <tr>
                    <td class="align-middle">10/01/2018</td>
                    <td class="align-middle">Pedro Russo</td>
                    <td class="text-sm-center"><button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#actualizartabulador"><i class="fas fa-clipboard"></i></button></td>

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


 <!-- Modal Entrevista -->

  <div class="modal fade" id="entrevista" tabindex="-1" role="dialog" aria-labelledby="entrevista" aria-hidden="true" class="fondo-modal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
         <div class="modal-header color-cabecera">
       <h5 class="modal-title" id="exampleModalLongTitle">Resumen de Entrevista Preliminar</h5>
       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
       <span aria-hidden="true">&times;</span>
       </button>
       </div>
    <div class="modal-body">
    <form>
        <fieldset disabled="">
       <table class="table-sm table-bordered " style="clear: both;">
                <thead class="thead-label text-sm-center">
                  <tr>
                    <td></td>
                    <td>Excelente</td>
                    <td>Sobre término medio</td>
                    <td>Término medio</td>
                    <td>Bajo término medio</td>
                    <td>Deficiente</td>
                  </tr>
                </thead>
                <tbody class="tbody-label">
                  <tr >
                    
                    <td scope="row">Presentación Personal</td>
                    <td> <div class="custom-control custom-radio"  style="left: 22px">
                          <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input" >
                          <label class="custom-control-label" for="customRadio1" ></label>
                        </div></td>
                          <td><div class="custom-control custom-radio"  style="left: 20px">
                          <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input"  style="display: auto; text-align: center; vertical-align: middle;" >
                          <label class="custom-control-label" for="customRadio2"></label>
                        </div></td>
                          <td><div class="custom-control custom-radio" style="left: 18px">
                          <input type="radio" id="customRadio3" name="customRadio" class="custom-control-input">
                          <label class="custom-control-label" for="customRadio3"></label>
                        </div></td>
                          <td><div class="custom-control custom-radio" style="left: 20px">
                          <input type="radio" id="customRadio4" name="customRadio" class="custom-control-input">
                          <label class="custom-control-label" for="customRadio4"></label>
                        </div></td>
                          <td ><div class="custom-control custom-radio" style="left: 22px">
                          <input type="radio" id="customRadio5" name="customRadio" class="custom-control-input">
                          <label class="custom-control-label" for="customRadio5"></label>
                        </div></td>
                   </tr>
                  <tr>
                    <td scope="row">Inteligencia Efectiva</td>
                    <td><div class="custom-control custom-radio" style="left: 22px">
                          <input type="radio" id="customRadio6" name="customRadio1" class="custom-control-input">
                          <label class="custom-control-label" for="customRadio6"></label>
                        </div></td>
                          <td><div class="custom-control custom-radio" style="left: 20px">
                          <input type="radio" id="customRadio7" name="customRadio1" class="custom-control-input">
                          <label class="custom-control-label" for="customRadio7"></label>
                        </div></td>
                          <td><div class="custom-control custom-radio"  style="left: 18px">
                          <input type="radio" id="customRadio8" name="customRadio1" class="custom-control-input">
                          <label class="custom-control-label" for="customRadio8"></label>
                        </div></td>
                          <td><div class="custom-control custom-radio" style="left: 20px">
                          <input type="radio" id="customRadio9" name="customRadio1" class="custom-control-input">
                          <label class="custom-control-label" for="customRadio9"></label>
                        </div></td>
                          <td><div class="custom-control custom-radio" style="left: 22px">
                          <input type="radio" id="customRadio10" name="customRadio1" class="custom-control-input">
                          <label class="custom-control-label" for="customRadio10"></label>
                        </div></td>
                  </tr>
                  <tr>
                    <td scope="row">Formación</td>
                     <td><div class="custom-control custom-radio" style="left: 22px">
                          <input type="radio" id="customRadio11" name="customRadio2" class="custom-control-input">
                          <label class="custom-control-label" for="customRadio11"></label>
                        </div></td>
                          <td><div class="custom-control custom-radio" style="left: 20px">
                          <input type="radio" id="customRadio12" name="customRadio2" class="custom-control-input">
                          <label class="custom-control-label" for="customRadio12"></label>
                        </div></td>
                          <td><div class="custom-control custom-radio"  style="left: 18px">
                          <input type="radio" id="customRadio13" name="customRadio2" class="custom-control-input">
                          <label class="custom-control-label" for="customRadio13"></label>
                        </div></td>
                          <td><div class="custom-control custom-radio" style="left: 20px">
                          <input type="radio" id="customRadio14" name="customRadio2" class="custom-control-input">
                          <label class="custom-control-label" for="customRadio14"></label>
                        </div></td>
                          <td><div class="custom-control custom-radio" style="left: 22px">
                          <input type="radio" id="customRadio15" name="customRadio2" class="custom-control-input">
                          <label class="custom-control-label" for="customRadio15"></label>
                        </div></td>
                  </tr>

                  <tr>
                    <td scope="row">Experiencia</td>
                     <td><div class="custom-control custom-radio" style="left: 22px">
                          <input type="radio" id="customRadio16" name="customRadio3" class="custom-control-input">
                          <label class="custom-control-label" for="customRadio16"></label>
                        </div></td>
                          <td><div class="custom-control custom-radio" style="left: 20px">
                          <input type="radio" id="customRadio17" name="customRadio3" class="custom-control-input">
                          <label class="custom-control-label" for="customRadio17"></label>
                        </div></td>
                          <td><div class="custom-control custom-radio"  style="left: 18px">
                          <input type="radio" id="customRadio18" name="customRadio3" class="custom-control-input">
                          <label class="custom-control-label" for="customRadio18"></label>
                        </div></td>
                          <td><div class="custom-control custom-radio" style="left: 20px">
                          <input type="radio" id="customRadio19" name="customRadio3" class="custom-control-input">
                          <label class="custom-control-label" for="customRadio19"></label>
                        </div></td>
                          <td><div class="custom-control custom-radio" style="left: 22px">
                          <input type="radio" id="customRadio20" name="customRadio3" class="custom-control-input">
                          <label class="custom-control-label" for="customRadio20"></label>
                        </div></td>
                  </tr>

                  <tr>
                    <td scope="row">Facilidad de Expresión</td>
                     <td><div class="custom-control custom-radio" style="left: 22px">
                          <input type="radio" id="customRadio21" name="customRadio4" class="custom-control-input">
                          <label class="custom-control-label" for="customRadio21"></label>
                        </div></td>
                          <td><div class="custom-control custom-radio" style="left: 20px">
                          <input type="radio" id="customRadio22" name="customRadio4" class="custom-control-input">
                          <label class="custom-control-label" for="customRadio22"></label>
                        </div></td>
                          <td><div class="custom-control custom-radio"  style="left: 18px">
                          <input type="radio" id="customRadio23" name="customRadio4" class="custom-control-input">
                          <label class="custom-control-label" for="customRadio23"></label>
                        </div></td>
                          <td><div class="custom-control custom-radio" style="left: 20px">
                          <input type="radio" id="customRadio24" name="customRadio4" class="custom-control-input">
                          <label class="custom-control-label" for="customRadio24"></label>
                        </div></td>
                          <td><div class="custom-control custom-radio" style="left: 22px">
                          <input type="radio" id="customRadio25" name="customRadio4" class="custom-control-input">
                          <label class="custom-control-label" for="customRadio25"></label>
                        </div></td>
                  </tr>

                  <tr>
                    <td scope="row">Habilidad para relacionarse</td>
                     <td><div class="custom-control custom-radio" style="left: 22px">
                          <input type="radio" id="customRadio26" name="customRadio5" class="custom-control-input">
                          <label class="custom-control-label" for="customRadio26"></label>
                        </div></td>
                          <td><div class="custom-control custom-radio" style="left: 20px">
                          <input type="radio" id="customRadio27" name="customRadio5" class="custom-control-input">
                          <label class="custom-control-label" for="customRadio27"></label>
                        </div></td>
                          <td><div class="custom-control custom-radio"  style="left: 18px">
                          <input type="radio" id="customRadio28" name="customRadio5" class="custom-control-input">
                          <label class="custom-control-label" for="customRadio28"></label>
                        </div></td>
                          <td><div class="custom-control custom-radio" style="left: 20px">
                          <input type="radio" id="customRadio29" name="customRadio5" class="custom-control-input">
                          <label class="custom-control-label" for="customRadio29"></label>
                        </div></td>
                          <td><div class="custom-control custom-radio" style="left: 22px">
                          <input type="radio" id="customRadio30" name="customRadio5" class="custom-control-input">
                          <label class="custom-control-label" for="customRadio30"></label>
                        </div></td>
                  </tr>

                  <tr>
                    <td scope="row">Otros conocimientos</td>
                     <td><div class="custom-control custom-radio" style="left: 22px">
                          <input type="radio" id="customRadio31" name="customRadio6" class="custom-control-input">
                          <label class="custom-control-label" for="customRadio31"></label>
                        </div></td>
                                            <td><div class="custom-control custom-radio" style="left: 20px">
                          <input type="radio" id="customRadio32" name="customRadio6" class="custom-control-input">
                          <label class="custom-control-label" for="customRadio32"></label>
                        </div></td>
                                            <td><div class="custom-control custom-radio"  style="left: 18px">
                          <input type="radio" id="customRadio33" name="customRadio6" class="custom-control-input">
                          <label class="custom-control-label" for="customRadio33"></label>
                        </div></td>
                                            <td><div class="custom-control custom-radio" style="left: 20px">
                          <input type="radio" id="customRadio34" name="customRadio6" class="custom-control-input">
                          <label class="custom-control-label" for="customRadio34"></label>
                        </div></td>
                                            <td><div class="custom-control custom-radio" style="left: 22px">
                          <input type="radio" id="customRadio35" name="customRadio6" class="custom-control-input">
                          <label class="custom-control-label" for="customRadio35"></label>
                        </div></td>
                  </tr>
                  
                 
                 </tbody>
              </table>
               <div class="form-group">
    <label for="exampleFormControlTextarea1"><h6>Observaciones:</h6></label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="2"></textarea>
  </div>
         </form>

   </fieldset>
        <div class="modal-footer">
         
           <button type="submit" class="btn btn-outline-primary">Preseleccionar</button>
           <button type="submit" class="btn btn-outline-danger">Descartar</button>
         </div> 
    </div>
            
          </div>
        </div>
      </div>
      


@endsection