
<div class="container" style="background-color: #BAC6D4">
  <legend>Buscar a empleado</legend>
    <div class="form-inline">
  <div class="input-group mb-3 col-md-4">
    <div class="input-group-prepend">
      <span class="input-group-text" style="font-weight: bold;" id="basic-addon2">Sucursal</span>
    </div>
    <input type="text" class="form-control" placeholder="Buscar en Sucursal" aria-label="Username" aria-describedby="basic-addon2" list="mylist1"/>
  </div>
  
<div class="input-group mb-3 col-md-3">
    <div class="input-group-prepend">
      <span class="input-group-text" style="font-weight: bold;" id="basic-addon2">Cargo</span>
    </div>
    <input type="text" class="form-control" placeholder="Buscar en cargo" aria-label="Username" aria-describedby="basic-addon2" list="mylist0"/>
  </div>

  <div class="input-group mb-3 col-md-5">
    <div class="input-group-prepend">
      <span class="input-group-text" style="font-weight: bold;" id="basic-addon1">Empleado</span>
    </div>
    <input type="text" class="form-control" placeholder="Ingrese nombre o cédula del empleado" aria-label="Username" aria-describedby="basic-addon1" list="mylist"/>
  </div></div>



  <datalist id="mylist0">
    <option>Auxiliar de logistica</option>
    <option>Operador de vehículo superficial</option>
    <option>Operador de Tráfico</option>
    <option>Operador de Radio</option>
    <option>Primer oficial</option>
    <option>Piloto</option>
    <option>Mecánico</option>
  </datalist>
  <datalist id="mylist1">
    <option>Antonio José de Sucre</option>
    <option>José Antonio Anzoátegui</option>
    <option>La Chinita</option>
    <option>Arturo Michelena</option>
    <option>Simón Bolívar</option>
    <option>Manuel Piar</option>
    <option>Valles del Tuy</option>
  </datalist>

  <datalist id="mylist">
    <option>Luis Emilio Gutiérrez Jiménez</option>
    <option>Eduardo Ernesto Fuenmayor</option>
    <option>Isabel López</option>
    <option>Hugo Zorrilla</option>
    <option>Leomar Esparragoza</option>
    <option>Ana Marcano</option>
    <option>Vicente Faviani</option>
  </datalist>


</fieldset>

</div>

<br>
<ul class="nav nav-tabs justify-content-center">
  <li class="nav-item">
    <a class="nav-link" href="{{ ROUTE('admin.gerente.partials.empleado.empleado-nomina') }}"><i class="fas fa-sync"></i> Nómina</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{ ROUTE('admin.gerente.partials.empleado.empleado-cargafamiliar') }}"><i class="fas fa-cogs"></i> Carga Familiar</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{ROUTE('admin.gerente.partials.empleado.empleado-actualizarperfil') }}"><i class="fas fa-cogs"></i> Actualizar Perfil</a>
  </li>
  
  <li class="nav-item">
    <a class="nav-link" href="{{ ROUTE('admin.gerente.partials.empleado.empleado-oficio') }}"><i class="fas fa-cogs"></i>Cargar oficio</a>
  </li>
</ul>