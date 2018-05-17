
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
          


          <div class="margin-center col-md-8">
                <div class="table-responsive" >
                    <table class="table-hover table-sm table-bordered col" style="clear: both;">
                                <thead class="thead-light thead-label-sm">
                                    <tr>
                                        <th class="col-md-1">Fecha</th>
                                        <th class="col-md-5">Reconocimiento</th>
                                        <th class="col-md-2">...</th>
                                        <th class="col-md-2">...</th>
                                        
                                    </tr>
                                </thead>

                                <tbody class="tbody-label-sm">
                                    <tr>
                                        <td class="align-middle">Nombre: Renzo José Rojas Quezada</td>
                                        <td class="align-middle">C.I. 20156987</td>
                                        <td>Sucursal: Caribean Riber</td>
                                        <td>Cargo: Backend nivel aprendiz</td>
                                    </tr>
                                    <tr>
                                        <td class="align-middle">Fecha de Ingreso: 10/10/2017</td>
                                        <td class="align-middle">Condicón Laboral: Suplente</td>
                                        <td>Departamento: Temeinformática</td>
                                        <td>...</td>
                                    </tr>
                                    <tr>
                                        <td class="align-middle">20/12/2017</td>
                                        <td class="align-middle">empleado del mes</td>
                                        <td>...</td>
                                        <td>...</td>
                                    </tr>

                                </tbody>
                    </table>
                </div>
            </div>








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
    <a class="nav-link" href="{{ROUTE('admin.gerente.partials.empleado.empleado-actualizarperfil') }}"><i class="fas fa-cogs"></i> Datos Personales</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{ ROUTE('admin.gerente.partials.empleado.empleado-nomina') }}"><i class="fas fa-sync"></i> Ingresos-Deducciones</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{ ROUTE('admin.gerente.partials.empleado.empleado-cargafamiliar') }}"><i class="fas fa-cogs"></i> Carga Familiar</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{ ROUTE('admin.gerente.partials.empleado.empleado-oficio') }}"><i class="fas fa-cogs"></i> Expediente Laboral</a>
  </li>
</ul>