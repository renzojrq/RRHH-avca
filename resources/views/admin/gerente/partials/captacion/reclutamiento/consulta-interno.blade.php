@extends('admin.layouts.admin')

@section('content')

<div class="container fuente-contenido">
    <div class="card">
   	 <div class="card-header">
        <legend>Reclutamiento Interno</legend>
     </div>

        <div class="card-block">
            <fieldset>
                                <!-- consulta de empleados-->
                <div class="row"> 
                        <div class="input-group input-group-md mb-3 col-md-5 margin-center">
                            <div class="input-group input-group-prepend">
                                <span class="input-group-text thead-label-sm" id="inputGroup-sizing-sm">Sucursales</span>
                                <input class="form-control"  list="mylis"/>   
                            </div>

                            <datalist id="mylis">
                                <option>antonio jose de sucre </option>
                                <option>maiquetia</option>
                                <option>la fria</option>
                                <option>jose antonio anzoategui</option>
                            </datalist>
                        </div>

                        <div class="input-group input-group-md mb-3 col-md-5 margin-center">
                            <div class="input-group input-group-prepend">
                                <span class="input-group-text thead-label-sm" id="inputGroup-sizing-sm">Formacion</span>
                                <input class="form-control"  list="mylist"/>   
                            </div>

                            <datalist id="mylist">
                                <option>licenciado </option>
                                <option>administrador</option>
                                <option>Sobrecargo</option>
                                <option>Administrador de operaciones</option>
                                <option>Mecánico</option>
                                <option>piloto</option>
                                <option>Operador de Tráfico</option>
                            </datalist>
                        </div>
                </div>
                                    <!--fin consulta-->
                            
            </fieldset>

                <br>
            <div class="margin-center col-md-8">
                <div class="table-responsive" >
                    <table class="table-hover table-sm table-bordered col" style="clear: both;">
                                <thead class="thead-light thead-label-sm">
                                    <tr>
                                        <th class="col-md-1">Fecha Ingreso</th>
                                        <th class="col-md-5">Nombres y Apellidos</th>
                                        <th class="col-md-2">Area</th>
                                        <th class="col-md-2">Cargo</th>
                                        <th class="col-md-1 text-sm-center">Consultar Expediente</th>
                                    </tr>
                                </thead>

                                <tbody class="tbody-label-sm">
                                <tr>
                                    <td class="align-middle">20/10/2017</td>
                                    <td class="align-middle">Hugo Rafael Alí Zorrilla</td>
                                    <td> Administrativa</td>
                                    <td> auxiliar</td>
                                    <td class="text-sm-center"><a href="{{route('admin.gerente.partials.expediente.reconocimiento')}}" class="btn btn-link" ><i class="fas fa-eye fa-2x" style="color: black"></i></a></td>
                                </tr>
                                <tr>
                                    <td class="align-middle">22/12/2017</td>
                                    <td class="align-middle">Leomar Alexander Esparragoza</td>
                                    <td>Operativa</td>
                                    <td>analista</td>
                                    <td class="text-sm-center"><a href="{{route('admin.gerente.partials.expediente.reconocimiento')}}" class="btn btn-link" ><i class="fas fa-eye fa-2x" style="color: black"></i></a></td>
                                </tr>
                                <tr>
                                    <td class="align-middle">22/12/2017</td>
                                    <td class="align-middle">Jesús Machado</td>
                                    <td>Administrativa</td>
                                    <td>secretaria</td>
                                    <td class="text-sm-center"><a href="{{route('admin.gerente.partials.expediente.reconocimiento')}}" class="btn btn-link" ><i class="fas fa-eye fa-2x" style="color: black"></i></a></td>
                                </tr>
                                <tr>
                                    <td class="align-middle">10/01/2018</td>
                                    <td class="align-middle">Pedro Russo</td>
                                    <td>tripulacion</td>
                                    <td>piloto</td>
                                    <td class="text-sm-center"><a href="{{route('admin.gerente.partials.expediente.reconocimiento')}}" class="btn btn-link" ><i class="fas fa-eye fa-2x" style="color: black"></i></a></td>
                                </tr>
                                </tbody>
                    </table>
                </div>
            </div>

        </div>
   </div>
</div>




@endsection