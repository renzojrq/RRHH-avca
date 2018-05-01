
  

<!-- <div class="dropdown show">-->
<div class="container" style="background-color: #CAD7F8">
<h3>Vacante a consultar</h3>
<div class="form-inline">
  <div class="input-group mb-3 col-md-4">
  <div class="input-group-prepend">
    <span class="input-group-text" style="font-weight: bold;" id="basic-addon2">Sucursal</span>
    </div>
    <input type="text" class="form-control" placeholder="Buscar en Sucursal" aria-label="Username" aria-describedby="basic-addon2" list="lista-sucursal"/>  
  </div>

  <div class="input-group mb-3 col-md-4">
  <div class="input-group-prepend">
    <span class="input-group-text" style="font-weight: bold;" id="basic-addon2">Área</span>
    </div>
    <input type="text" class="form-control" placeholder="Buscar en Área" aria-label="Username" aria-describedby="basic-addon2" list="lista-area"/>  
  </div>

  <div class="input-group mb-3 col-md-4">
  <div class="input-group-prepend">
    <span class="input-group-text" style="font-weight: bold;" id="basic-addon2">Cargo</span>
    </div>
    <input type="text" class="form-control" placeholder="Buscar en Cargo" aria-label="Username" aria-describedby="basic-addon2" list="lista-cargos"/>  
  </div>

<datalist id="lista-cargos">
  <option>Apoyo de asuntos Legales</option>
  <option>Técnico de Refrigeración</option>
  <option>Archivista</option>
  <option>Analísta de Nómina</option>
  <option>Secretaria Ejecutiva</option>
  <option>Administrador de Empresas</option>
  <option>Magister en RRHH</option>
  <option>Recepcionista</option>
  <option>Agente de Tráfico</option>
  <option>Supervisor de Rampa</option>
  <option>Director de Logística</option>
  <option>Director de Marketing</option>
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

  <datalist id="lista-area">
    <option>Operacional</option>
    <option>Administrativa</option>
    <option>Telemática</option>
    <option>Oficina</option>
    <option>Tripulación</option>
    <option>Logística</option>
  </datalist>
</div>
</div>
  

<ul class="nav nav-tabs justify-content-center">
  <li class="nav-item">
    <a class="nav-link" href="{{ ROUTE('admin.gerente.partials.captacion.seleccion.aspirantes-registrados') }}"><i class="fas fa-sync"></i> Registrados</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{ ROUTE('admin.gerente.partials.captacion.seleccion.aspirantes-verificados') }}"><i class="fas fa-cogs"></i> Verificados</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{ ROUTE('admin.gerente.partials.captacion.seleccion.aspirantes-convocados') }}"><i class="fas fa-cogs"></i> Convocados</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{ ROUTE('admin.gerente.partials.captacion.seleccion.aspirantes-entrevistados') }}"><i class="fas fa-cogs"></i> Entrevistados</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{ ROUTE('admin.gerente.partials.captacion.seleccion.aspirantes-seleccionables') }}"><i class="fas fa-cogs"></i> Seleccionables</a>
  </li>
</ul>
