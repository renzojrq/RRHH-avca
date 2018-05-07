@extends('admin.layouts.admin')

@section('content')

<div class="container fuente-contenido">
    <div class="card">
   	 <div class="card-header">
        <legend>Reclutamiento Interno</legend>
     </div>

        <div class="card-block">
    


                                <!-- consulta de empleados-->
                <div class="row " style="background: #bebebe;"> 
                <legend> <h3>Buscar empleados con perfil</h3></legend>
                        <div class="input-group input-group-md mb-3 col-md-5 ">
                            <div class="input-group input-group-prepend">
                                <span class="input-group-text thead-label-sm" id="inputGroup-sizing-sm">Sucursal</span>
                                <input class="form-control"  list="lista-sucursal"/>   
                            </div>

                         
                            <datalist id="lista-sucursal">
                                <option>Antonio José de Sucre</option>
                                <option>José Antonio Anzoátegui</option>
                                <option>La Chinita</option>
                                <option>Arturo Michelena</option>
                                <option>Manuel Piar</option>
                                <option>Jacinto Lara</option>
                                <option>Juan Pablo Pérez Alfonso</option>
                                <option>José Tadeo Monagas</option>
                                <option>Santiago Mariño</option>
                                <option>Simón Bolívar</option>
                                <option>Cacique Arame</option>
                                <option>Don Edmundo Barrios</option>
                                <option>Las Flecheras</option>
                                <option>Luisa Caceres de Arismendi</option>
                                <option>Tomas de Heres</option>
                                <option>Josefa Camejo</option>
                            </datalist>

                        </div>

                        <div class="input-group input-group-md mb-3 col-md">
                            <div class="input-group input-group-prepend">
                                <span class="input-group-text thead-label-sm" id="inputGroup-sizing-sm">Formación</span>
                                <input class="form-control"  list="mylist"/>   
                            </div>

                            <datalist id="mylist">
                                <option>Licenciado </option>
                                <option>Administrador</option>
                                <option>Sobrecargo</option>
                                <option>Administrador de operaciones</option>
                                <option>Mecánico</option>
                                <option>Operador de Tráfico</option>
                                <option>Auxiliar de logistica</option>
                                <option>Operador de vehículo superficial</option>
                                <option>Operador de Radio</option>
                                <option>Primer oficial</option>
                                <option>Piloto</option>
                                
                            </datalist>
                        </div>
                        <div class="input-group mb-3 col-md-2">
                        <button class="btn btn-primary" type="">Buscar</button>
                        </div>

                </div>
                                    <!--fin consulta-->
                            
            

                <br>
            <div class="margin-center col-md-8">
                <div class="table-responsive" >
                    <table class="table-hover table-sm table-bordered col" style="clear: both;">
                                <thead class="thead-light thead-label-sm">
                                    <tr>
                                        <th class="col-md-1">Fecha Ingreso</th>
                                        <th class="col-md-5">Nombres y Apellidos</th>
                                        <th class="col-md-2">Área</th>
                                        <th class="col-md-2">Cargo</th>
                                        <th class="col-md-1 text-sm-center">Ver Expediente</th>
                                    </tr>
                                </thead>

                                <tbody class="tbody-label-sm">
                                <tr>
                                    <td class="align-middle">20/10/2017</td>
                                    <td class="align-middle">Hugo Rafael Alí Zorrilla</td>
                                    <td> Administrativa</td>
                                    <td> Auxiliar</td>
                                    <td class="text-sm-center"><a href="{{ ROUTE('admin.gerente.partials.empleado.empleado-oficio') }}" class="btn btn-link" ><i class="fas fa-folder fa-lg" style="color: gray"></i></a></td>
                                </tr>
                                <tr>
                                    <td class="align-middle">22/12/2017</td>
                                    <td class="align-middle">Leomar Alexander Esparragoza</td>
                                    <td>Operativa</td>
                                    <td>Analista</td>
                                    <td class="text-sm-center"><a href="{{route('admin.gerente.partials.expediente.reconocimiento')}}" class="btn btn-link" ><i class="fas fa-folder fa-lg" style="color: gray"></i></a></td>
                                </tr>
                                <tr>
                                    <td class="align-middle">22/12/2017</td>
                                    <td class="align-middle">Jesús Machado</td>
                                    <td>Administrativa</td>
                                    <td>Secretaria</td>
                                    <td class="text-sm-center"><a href="{{route('admin.gerente.partials.expediente.reconocimiento')}}" class="btn btn-link" ><i class="fas fa-folder fa-lg" style="color: gray"></i></a></td>
                                </tr>
                                <tr>
                                    <td class="align-middle">10/01/2018</td>
                                    <td class="align-middle">Pedro Russo</td>
                                    <td>Tripulación</td>
                                    <td>Piloto</td>
                                    <td class="text-sm-center"><a href="{{route('admin.gerente.partials.expediente.reconocimiento')}}" class="btn btn-link" ><i class="fas fa-folder fa-lg" style="color: gray"></i></a></td>
                                </tr>
                                </tbody>
                    </table>
                </div>
            </div>

        </div>
   </div>
</div>




@endsection