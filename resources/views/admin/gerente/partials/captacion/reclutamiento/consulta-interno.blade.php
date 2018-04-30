@extends('admin.layouts.admin')

@section('content')

<div class="container fuente-contenido">
	<div class="card">
   	 <div class="card-header">
        <legend>Reclutamiento Interno</legend>
     </div>
    <div class="card-block">
        <fieldset>

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

            <div class="input-group input-group-md mb-3 col-md-7 margin-center">
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


      </fieldset>
    </div>
 </div>
</div>
   
    <br>





@endsection