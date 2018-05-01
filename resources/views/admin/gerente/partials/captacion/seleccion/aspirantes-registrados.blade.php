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
    <div class="text-lg-center" style="font-weight: bold;">Aspirantes Registrados 
      </div>
      <br>
    
    <div class="margin-center col-md-8">
       
    <div class="w3-responsive" >
	  <table class="w3-table-all w3-small w3-border " style="clear: both;">
                <thead class="thead-light  thead-label-sm">
                  <tr>
                    <th class="align-middle w3-light-gray col-md-1 w3-border">Fecha</th>
                    <th class="align-middle w3-light-gray col-md-4 w3-border">Nombres y apellidos</th>
                    <th class="col-md-1 w3-light-gray text-sm-center w3-border">Curriculum Vitae</th>
                    <th class="col-md-2 w3-light-gray text-sm-center w3-border">Verificar</th>
                    </tr>
                </thead>
                <tbody class="tbody-label-sm">
                  <tr>
                    <td class="align-middle">20/10/2017</td>
                    <td class="align-middle">Hugo Rafael Alí Zorrilla</td>
                    <td class="text-sm-center">
                      <button type="button" class="btn btn-outline-info">C.V. PDF</button>

                    </td>
                    <td><div class="text-center" >
                        <button type="button" class="btn btn-link"></button>
                        <button type="button" class="btn btn-link"></button>
                        </div></td>
                  </tr>
                  
                  <tr>
                    <td class="align-middle">22/12/2017</td>
                    <td class="align-middle">Leomar Alexander Esparragoza</td>
                    <td class="text-sm-center"><button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#actualizartabulador">C.V. PDF </button></td>
                    <td><div class="text-center" >
                        <button type="button" class="btn btn-link"><i class="far fa-times-circle fa-1x" style="color: gray"> </i> </button>
                        <button type="button" class="btn btn-link"><i class="far fa-check-circle fa-1x" style="color: #B6C3E5"></i> </button>
                        </div></td>

                  </tr>
                  
                  <tr>
                    <td class="align-middle">22/12/2017</td>
                    <td class="align-middle">Jesús Machado</td>
                    <td class="text-sm-center"><button type="button" class="btn btn-link" data-toggle="modal" data-target="#actualizartabulador"><i class="far fa-file-pdf fa-2x"></i></button></td>
                    <td><div class="text-center" >
                        <button type="button" class="btn btn-link"><i class="far fa-times-circle fa-2x" style="color: gray"> </i> </button>
                        <button type="button" class="btn btn-link"><i class="far fa-check-circle fa-2x" style="color: #b6c3e5"></i> </button>
                        </div></td>


                  </tr>
                  <tr>
                    <td class="align-middle">10/01/2018</td>
                    <td class="align-middle">Pedro Russo</td>
                    <td class="text-sm-center"><button type="button" class="btn btn-link" data-toggle="modal" data-target="#actualizartabulador"><i class="far fa-file-pdf fa-2x"></i></button></td>
                    <td><div class="text-center" >
                        <button type="button" class="btn btn-link"><i class="far fa-times-circle fa-2x" style="color: gray"> </i> </button>
                        <button type="button" class="btn btn-link"><i class="far fa-check-circle fa-2x" style="color: #B6C3E5"></i> </button>
                        </div></td>

                  </tr>
                </tbody>
              </table>
        </div>
  </div></div>
	</div>
  </div>
  </div>

@endsection