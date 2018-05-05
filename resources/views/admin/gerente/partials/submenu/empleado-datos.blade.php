
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
          
          <div class="col-md-3 align-self-start ">
             <img src="\images\logo-avca.png" class="img-fluid" style= "width:125px">
          </div>            <!-- <div class="input-group">-->
          

          <div class="col-md">

                  <div class="form-inline form-group"> 
                      <label for="">Nombre:
                      <input type="text" readonly class="form-control-plaintext col-md-7" id="staticnombre" style="font-style: italic;" value="Palomino Vergara de la Trinidad">

                      <label for="" class="col-md-5">C.I.:
                      <input type="text" readonly class="form-control-plaintext col-md" id="staticci" style="font-style: bold;" value="V. 205557777"></label></label>
           

                                                </div> 

          <div class="form-inline form-group">
                      <label for="staticdept" class="col-md-5 col-form-label" style="text-align: end"> Departamento:                           
                     
                                    <input type="text" readonly class="form-control-plaintext" id="staticdept" style="font-style: bold;" value="Dirección de logística">
                    </label>


                 
                                  <label for="staticcargo" class="col-form-label">Cargo:
                            
                     <div class="col-md">                                   <input type="text" readonly class="form-control-plaintext" id="staticcargo" style="font-style: bold;" value="Asistente de dirección de logística"></label>
                     </div>
</div>
                  </div>
        </div>
          </div>
      
         

  </label>
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
<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#"><i class="fas fa-cogs"></i> Expediente Laboral</a>
      <div class="dropdown-menu">
      <a class="dropdown-item" href="{{ ROUTE('admin.gerente.partials.empleado.empleado-oficio') }}">Visualizar</a>
      <a class="dropdown-item" href="#">Ingresar nuevo oficio</a>
    </div>
  </li>
</ul>