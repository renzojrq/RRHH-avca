
<div class="container" style="background-color: #CAD7F8">
  <H3>Empleado a consultar</H3>
    <div class="form-inline">
 <!-- <div class="input-group mb-3 col-md-4">
    <div class="input-group-prepend">
      <span class="input-group-text" style="font-weight: bold;" id="basic-addon2">Sucursal</span>
    </div>
    <input type="text" class="form-control" placeholder="Buscar en Sucursal" aria-label="Username" aria-describedby="basic-addon2" list="lista-sucursal"/>
  </div>
  
<div class="input-group mb-3 col-md-4">
    <div class="input-group-prepend">
      <span class="input-group-text" style="font-weight: bold;" id="basic-addon2">Cargo</span>
    </div>
    <input type="text" class="form-control" placeholder="Buscar en cargo" aria-label="Username" aria-describedby="basic-addon2" list="mylist0"/>
  </div>
-->
  <div class="input-group mb-3 col-md-5">
    <div class="input-group-prepend">
      <span class="input-group-text" style="font-weight: bold;" id="basic-addon1">Empleado</span>
    </div>
    <input type="text" class="form-control" placeholder="Ingrese nombre o cédula del empleado" aria-label="Username" aria-describedby="basic-addon1" list="mylist"/>
  </div>

  <div class="input-group mb-3 col-md-5">
    
<label for="staticnombre" class="col-sm-2 col-form-label">Nombre:</label>
    <div class="col-sm-10">
      <input type="text" readonly class="form-control-plaintext" id="staticnombre" style="font-style: italic;" value="Palomino Vergara de la Trinidad">
    </div>


  <div class="input-group mb-3 col-md-3">
    
<label for="staticci" class="col-sm-2 col-form-label">C.I.:</label>
    <div class="col-sm-10">
      <input type="text" readonly class="form-control-plaintext" id="staticci" style="font-style: bold;" value="V. 205557777">
    </div>

    <!--<div class="input">
      <label class="input-group-tex" style="font-weight: bold;">Nombre:</label>
    </div>
    <input type="text" plaintext readonly class="form-control plaintext" value="Fulanito de tal y pascual">
  </div>-->


</div>



  <datalist id="mylist0">
    <option>Auxiliar de logistica</option>
    <option>Operador de vehículo superficial</option>
    <option>Operador de Tráfico</option>
    <option>Operador de Radio</option>
    <option>Primer oficial</option>
    <option>Piloto</option>
    <option>Mecánico</option>
  </datalist>
  

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
  <datalist id="mylist">
    <option>Luis Emilio Gutiérrez Jiménez</option>
    <option>Eduardo Ernesto Fuenmayor</option>
    <option>Isabel López</option>
    <option>Hugo Zorrilla</option>
    <option>Leomar Esparragoza</option>
    <option>Ana Marcano</option>
    <option>Vicente Faviani</option>
  </datalist>




</div>


<ul class="nav nav-tabs justify-content-center" style="background-color: #EAF2C8;">
  
  <li class="nav-item">
    <a class="nav-link" href="{{ROUTE('admin.gerente.partials.empleado.empleado-actualizarperfil') }}"><i class="fas fa-cogs"></i> Datos Personales</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{ ROUTE('admin.gerente.partials.empleado.empleado-nomina') }}"><i class="fas fa-sync"></i> Ingresos-Deducciones</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{ ROUTE('admin.gerente.partials.empleado.empleado-cargafamiliar') }}"><i class="fas fa-cogs"></i> Carga Familiar</a>
  </li>
  
  <li class="nav-item">
    <a class="nav-link" href="{{ ROUTE('admin.gerente.partials.empleado.empleado-oficio') }}"><i class="fas fa-cogs"></i>Expediente Laboral</a>
  </li>
</ul>