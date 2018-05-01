@extends('admin.layouts.admin')

@section('content')
<div class="container fuente-contenido">
   <div class="card">
        <div class="card-header">
            <legend>Expediente-cursos</legend>
        </div>
        <div class="card-block">

            @include ('admin.gerente.partials.submenu.expediente')
                        <br>
                <div class="margin-center col-md-8">
                <div class="table-responsive" >
                    <table class="table-hover table-sm table-bordered col" style="clear: both;">
                                <thead class="thead-light thead-label-sm">
                                    <tr>
                                        <th class="col-md-1">Fecha</th>
                                        <th class="col-md-5">Cursos</th>
                                        <th class="col-md-2">...</th>
                                        <th class="col-md-2">...</th>
                                        
                                    </tr>
                                </thead>

                                <tbody class="tbody-label-sm">
                                    <tr>
                                        <td class="align-middle">20/10/2017</td>
                                        <td class="align-middle">atencion al publico</td>
                                        <td>...</td>
                                        <td>...</td>
                                    </tr>
                                    <tr>
                                        <td class="align-middle">20/11/2017</td>
                                        <td class="align-middle">computacion basica</td>
                                        <td>...</td>
                                        <td>...</td>
                                    </tr>
                                    <tr>
                                        <td class="align-middle">20/12/2017</td>
                                        <td class="align-middle">herramientas office</td>
                                        <td>...</td>
                                        <td>...</td>
                                    </tr>

                                </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection


