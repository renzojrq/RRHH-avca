
<div class="container justify-content-center" style="background-color: #F5F9FF;">
 <!-- <H3>Empleado a consultar</H3>-->
  

      <div class="input-group align-items-start margin-center col-md-4">
        <input type="text" class="form-control">
        <span class="input-group-addon"><i class="fa fa-search"></i></span>
      </div>


   <!--
 <span class="input-group-text col-md-2" style="font-weight: bold;" id="basic-addon1">Empleado</span>
      <input type="text" class="form-control col-md-3" aria-label="Username" aria-describedby="basic-addon1">
  </div>-->   
     

      <div class="row">
        <div class="form-inline"> 
          
          <div class="col-md-2 align-self-start">
             <img src="\images\foto2.jpg" class="img-fluid" style= "width:125px">
          </div>            <!-- <div class="input-group">-->
          

          <div class="col-md">
              <div class="form-inline form-group"> 
                  <label class="col-md-1" style="font-style: bold">Nombre:</label>
                  <input type="text" readonly class="form-control-plaintext col-md-4" style="font-style: italic;" value="Palomino Vergara de la Trinidad">

                  <label class="col-md-1">C.I.:</label>
                  <input type="text" readonly class="form-control-plaintext col-md-2" style="font-style: bold;" value="V.-20555779">

                  <label class="col-md-2">Fecha Ingreso:</label>
                  <input type="text" readonly class="form-control-plaintext col-md-2" style="font-style: bold;" value="20/05/2011">
        
                   <label class="col-md-1">Sucursal:</label>
                  <input type="text" readonly class="form-control-plaintext col-md-4" id="staticdept" value="Antonio José de Sucre">
                              
              

                <label class="col-md-2">Departamento:</label>
                  <input type="text" readonly class="form-control-plaintext col-md-5" id="staticdept" value="Dirección de logística">
                
             
              
                <label for="" class="col-md-1">Cargo:</label>
                <input type="text" readonly class="form-control-plaintext col-md-4" id="staticcargo" style="font-style: bold;" value="Asistente de dirección de logística">
                   <label for="" class="col-md-3">Condición laboral:</label>
                <input type="text" readonly class="form-control-plaintext col-md-1" id="staticcargo" style="font-style: bold;" value="Fijo">  
            
              </div>
          </div>
          
          </div>
          
      
        
  </div>
</div>

<!-------------------------menu de empleado-->

<ul class="nav nav-tabs justify-content-center" style="background-color: #EAF2C8;">  
  <li class="nav-item">
    <a class="nav-link" href="{{ROUTE('admin.gerente.partials.empleadovistas.empleado-actualizarperfil2') }}"><i class="fas fa-cogs"></i> Actualizar datos de personal</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{ ROUTE('admin.gerente.partials.empleadovistas.empleado-nomina2') }}"><i class="fas fa-sync"></i> Voucher de pago</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{ ROUTE('admin.gerente.partials.empleadovistas.empleado-cargafamiliar2') }}"><i class="fas fa-cogs"></i> Carga Familiarv</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{ ROUTE('admin.gerente.partials.empleadovistas.empleado-oficio2') }}"><i class="fas fa-cogs"></i> Expediente Laboralv</a>
  </li>
</ul>