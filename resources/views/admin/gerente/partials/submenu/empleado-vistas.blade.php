
<div class="container justify-content-center" style="background-color: #F5F9FF; font-size: .800rem">
 <!-- <H3>Empleado a consultar</H3>-->
  


      <div class="row">
        <div class="form-inline"> 
          
          <div class="col-sm-2 align-self-start">
             <img src="\images\foto2.jpg" class="img-fluid" style= "width:105px">
          </div>            <!-- <div class="input-group">-->
          

          <div class="col-sm">
              <div class="form-inline form-group"> 
                  <label class="col-sm-1">Nombre:</label>
                  <span class="col-sm-3">Luis E. Gutierrez J.</span>
                  <label class="col-sm-1">C.I.:</label>
                  <span class="col-sm-3">V 11654963</span>
                  <label class="col-sm-2">Fecha Ingreso:</label>
                  <span class="col-sm-2">20/10/2017</span> 

                  </div>
                  

                  <div class="row">
                    
                  
              <div class="form-inline form-group"> 
        
                   <label class="col-sm-1">Sucursal:</label>
                   <span  class="col-sm-4"> Antonio José de Sucre</span>
                              
              

                   <label class="col-sm-2">Departamento:</label>
                   <span class="col-sm-4">Dirección de logística</span>
                </div>
             
              </div>
<div class="row">

              <div class="form-inline form-group"> 
                <label for="" class="col-sm-1">Cargo:</label>
                <input type="text" readonly class="form-control-plaintext col-sm" id="staticcargo" style="font-style: bold;" value="Asistente de dirección de logística">
                   <label for="" class="col-sm-3">Condición laboral:</label>
                <input type="text" readonly class="form-control-plaintext col-sm-2" id="staticcargo" style="font-style: bold;" value="Fijo">  
            
            </div>
              </div>

          </div>
          
          </div>
          
      </div>
        
  </div>

<!-------------------------menu de empleado-->

<ul class="nav nav-tabs justify-content-center" style="background-color: #EAF2C8;">  
  <li class="nav-item">
    <a class="nav-link" href="{{ROUTE('admin.gerente.partials.empleadovistas.empleado-actualizarperfil2') }}"><i class="fas fa-cogs"></i> Actualizar perfil</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{ ROUTE('admin.gerente.partials.empleadovistas.empleado-nomina2') }}"><i class="fas fa-sync"></i> Voucher de pago</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{ ROUTE('admin.gerente.partials.empleadovistas.empleado-cargafamiliar2') }}"><i class="fas fa-cogs"></i>Carga Familiarv</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{ ROUTE('admin.gerente.partials.empleadovistas.empleado-oficio2') }}"><i class="fas fa-cogs"></i> Ver Expediente Laboral</a>
  </li>
</ul>