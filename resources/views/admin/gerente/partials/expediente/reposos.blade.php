@extends('admin.layouts.admin')

@section('content')
<div class="container fuente-contenido">
   <div class="card">
        <div class="card-header">
            <legend>Expediente-reposos</legend>
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
                                        <th class="col-md-5">Reposos</th>
                                        <th class="col-md-2">Fecha Inicio</th>
                                        <th class="col-md-2">Fecha Final</th>
                                        
                                    </tr>
                                </thead>

                                <tbody class="tbody-label-sm">
                                    <tr>
                                        <td class="align-middle">20/10/2017</td>
                                        <td class="align-middle">desgarre muscular</td>
                                        <td>...</td>
                                        <td>...</td>
                                    </tr>
                                    <tr>
                                        <td class="align-middle">12/11/2017</td>
                                        <td class="align-middle">gripe</td>
                                        <td>...</td>
                                        <td>...</td>
                                    </tr>
                                    <tr>
                                        <td class="align-middle">20/12/2017</td>
                                        <td class="align-middle">cansancio fatiga</td>
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


