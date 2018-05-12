<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use stdClass;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use App\Models\Empleado;
use App\Models\Nomina;
use App\Models\Concepto;
use App\Models\Voucher;

class NominaController extends Controller
{
    //
    public function generarnomina() {

		$empleados =  array();
		
		$Mempleado= Empleado::orderBy('nombre')->get();
		
		foreach ($Mempleado as $empleado) {

			$objempleado = new stdClass();
			//$cb=Carbon::parse("00:12:00");
			//dd($cb->toDateTimeString());
			$objempleado->id=$empleado->id;
			$objempleado->cargas=$empleado->cargasfamiliares;
			$objempleado->conceptos=$empleado->conceptos; 
			$objempleado->fecha_ingreso= "1990-10-01"; 

			$objempleado->horas_extr_diur = 10;
			$objempleado->horas_falt_diur = 3;
			$objempleado->horas_extr_noct = 6;
			$objempleado->horas_falt_noct = 2;

			$objempleado->horas_extr_fer_diur = 4;
			$objempleado->horas_falt_fer_diur = 3;
			$objempleado->horas_extr_fer_noct = 1;
			$objempleado->horas_falt_fer_noct = 0;

			$objempleado->horas_diur = 90;
			$objempleado->horas_noct = 70;
			$objempleado->horas_fer_diur = 8;
			$objempleado->horas_fer_noct = 4;
			array_push($empleados, $objempleado);
	    	
		}

    	//logica de calculo

		//calculo antiguedad
		
		$fecha_actual = Carbon::today();
		
//$Cantiguedad = DB::table('conceptos')->where('tipo_concepto',103)->get();
//consulta para antiguedad

		//consulta para sueldo_base
		
		$sueldo_base =1000;

		$Cantiguedad = Concepto::buscarCod('103')->first();
		

        $nomina = Nomina::tipo('regular')->first();
        
		foreach ($empleados as $empleado) {
// dd($empleado);
			
			$aux = Carbon::parse($empleado->fecha_ingreso);
			$antiguedadmonth = $fecha_actual->diffInMonths($aux); 
			$antiguedad = intval(round($antiguedadmonth/12));
			$prima_antiguedad = $antiguedad * ($Cantiguedad->porcentaje/100) * $sueldo_base;
		
			//indices de calculo
			$indice = new stdClass();

			$indice->sueldo_basico = $sueldo_base + $prima_antiguedad;
			$indice->horasd   =  ($indice->sueldo_basico/30)/8; //horas 
			$indice->horasEXd   =  $indice->horasd * 1.50;
			$indice->horasNoc    =  $indice->horasd * 1.30;
			$indice->horasEXtraNoc    =  $indice->horasNoc * 1.50;
			$indice->horasdferdu    =  $indice->horasd * 1.30;
			$indice->horasEXdferdu    =  $indice->horasdferdu * 1.50; 
			$indice->horasferNoc	  =  $indice->horasdferdu * 1.30;
			$indice->horasferEXtraNoc    =  $indice->horasferNoc * 1.50;

				
				//deducciones por faltas
			$deduccion = new stdClass();
		
			$deduccion->horasd   =  $indice->horasd * $empleado->horas_falt_diur;  //horas 
			$deduccion->horasNoc    =  $indice->horasNoc * $empleado->horas_falt_noct ;
			$deduccion->horasdferdu    =  $indice->horasdferdu * $empleado->horas_falt_fer_diur;
			$deduccion->horasferNoc	  =  $indice->horasferNoc * $empleado->horas_falt_fer_noct;
			

			

				//asignaciones
			$asignacion = new stdClass();

			$asignacion->horasEXd   =  $indice->horasEXd * $empleado->horas_extr_diur;
			$asignacion->horasEXtraNoc    =  $indice->horasEXtraNoc * $empleado->horas_extr_noct;
			$asignacion->horasEXdferdu    =  $indice->horasEXdferdu * $empleado->horas_extr_fer_diur; 
			$asignacion->horasferEXtraNoc    = $indice->horasferEXtraNoc * $empleado->horas_extr_fer_noct;


			foreach ($empleado->conceptos as $concepto) {
						
				if($concepto->verificar($concepto->id,$nomina->id))
				{ 	

					$result=$this->calculoConcepto($concepto,$empleado->cargas,$fecha_actual,$indice);

					
					if($result!=null){

					$voucher = new Voucher();
					$voucher->empleado_id = $empleado->id;
					$voucher->nomina_id = $nomina->id;
					$voucher->concepto_id = $concepto->id;
					$voucher->monto = $result->monto;
					$voucher->fecha=$fecha_actual;
					$voucher->save();
										}
	
				}

				
			}



		}


    }

    public function calculoConcepto($concepto, $cargas,$fecha_actual,$indice){
			$resultado = new stdClass();
			switch ($concepto->tipo_concepto) {
				case '101':
					return null;
					break;
				case '103':
					return null;
					break;
				case '105':
					$cont=0;
					foreach ($cargas as $carga) {
						$aux = Carbon::parse($carga->fecha_nacimiento);
						$month = $fecha_actual->diffInMonths($aux); 
						$edad = intval($month/12);
						if($edad<18)
							$cont++;
					}
					if($concepto->valor_fijo!=null){
						$resultado->monto=$concepto->valor_fijo*$cont;
						$resultado->id=$concepto->id;
					}
					else{
						//calculo de Prima por hijos
						$resultado->monto=$cont*($concepto->porcentaje/100)*$indice->sueldo_basico;
						$resultado->id=$concepto->id;
					}
					break;
				case '107':

					if($concepto->valor_fijo!=null){
						$resultado->monto=$concepto->valor_fijo;
						$resultado->id=$concepto->id;
					}
 					
					else{
						$resultado->monto=($concepto->porcentaje/100)*$indice->sueldo_basico;
						$resultado->id=$concepto->id;
					}

				break;
				case '109':

					if($concepto->valor_fijo!=null){
						$resultado->monto=$concepto->valor_fijo;
						$resultado->id=$concepto->id;
					}
 					
					else{
						$resultado->monto=($concepto->porcentaje/100)*$indice->sueldo_basico;
						$resultado->id=$concepto->id;
					}
					
				break;
				case '111':

					if($concepto->valor_fijo!=null){
						$resultado->monto=$concepto->valor_fijo;
						$resultado->id=$concepto->id;
					}
 					
					else{
						$resultado->monto=($concepto->porcentaje/100)*$indice->sueldo_basico;
						$resultado->id=$concepto->id;
					}
					
				break;
				case '113':

					if($concepto->valor_fijo!=null){
						$resultado->monto=$concepto->valor_fijo;
						$resultado->id=$concepto->id;
					}
 					
					else{
						$resultado->monto=($concepto->porcentaje/100)*$indice->sueldo_basico;
						$resultado->id=$concepto->id;
					}
					
				break;
				case '115':

					if($concepto->valor_fijo!=null){
						$resultado->monto=$concepto->valor_fijo;
						$resultado->id=$concepto->id;
					}
 					
					else{
						$resultado->monto=($concepto->porcentaje/100)*$indice->sueldo_basico;
						$resultado->id=$concepto->id;
					}
					
				break;
				case '117':

					if($concepto->valor_fijo!=null){
						$resultado->monto=$concepto->valor_fijo;
						$resultado->id=$concepto->id;
					}
 					
					else{
						$resultado->monto=($concepto->porcentaje/100)*$indice->sueldo_basico;
						$resultado->id=$concepto->id;
					}
					
				break;
				case '119':

					if($concepto->valor_fijo!=null){
						$resultado->monto=$concepto->valor_fijo;
						$resultado->id=$concepto->id;
					}
 					
					else{
						$resultado->monto=($concepto->porcentaje/100)*$indice->sueldo_basico;
						$resultado->id=$concepto->id;
					}
					
				break;

				case '121':

					if($concepto->valor_fijo!=null){
						$resultado->monto=$concepto->valor_fijo;
						$resultado->id=$concepto->id;
					}
 					
					else{
						$resultado->monto=($concepto->porcentaje/100)*$indice->sueldo_basico;
						$resultado->id=$concepto->id;
					}
					
				break;
				case '123':

					if($concepto->valor_fijo!=null){
						$resultado->monto=$concepto->valor_fijo;
						$resultado->id=$concepto->id;
					}
 					
					else{
						$resultado->monto=($concepto->porcentaje/100)*$indice->sueldo_basico;
						$resultado->id=$concepto->id;
					}
					
				break;
				case '125':

					if($concepto->valor_fijo!=null){
						$resultado->monto=$concepto->valor_fijo;
						$resultado->id=$concepto->id;
					}
 					
					else{
						$resultado->monto=($concepto->porcentaje/100)*$indice->sueldo_basico;
						$resultado->id=$concepto->id;
					}
					
				break;

				case '127':

					if($concepto->valor_fijo!=null){
						$resultado->monto=$concepto->valor_fijo;
						$resultado->id=$concepto->id;
					}
 					
					else{
						$resultado->monto=($concepto->porcentaje/100)*$indice->sueldo_basico;
						$resultado->id=$concepto->id;
					}
					
				break;
				case '129':

					if($concepto->valor_fijo!=null){
						$resultado->monto=$concepto->valor_fijo;
						$resultado->id=$concepto->id;
					}
 					
					else{
						$resultado->monto=($concepto->porcentaje/100)*$indice->sueldo_basico;
						$resultado->id=$concepto->id;
					}
					
				break;
				case '502':

					if($concepto->valor_fijo!=null){
						$resultado->monto=$concepto->valor_fijo;
						$resultado->id=$concepto->id;
					}
 					
					else{
						$resultado->monto=($concepto->porcentaje/100)*$indice->sueldo_basico;
						$resultado->id=$concepto->id;
					}
				break;
				case '504':

					if($concepto->valor_fijo!=null){
						$resultado->monto=$concepto->valor_fijo;
						$resultado->id=$concepto->id;
					}
 					
					else{
						$resultado->monto=($concepto->porcentaje/100)*$indice->sueldo_basico;
						$resultado->id=$concepto->id;
					}
				break;
				case '506':

					if($concepto->valor_fijo!=null){
						$resultado->monto=$concepto->valor_fijo;
						$resultado->id=$concepto->id;
					}
 					
					else{
						$resultado->monto=($concepto->porcentaje/100)*$indice->sueldo_basico;
						$resultado->id=$concepto->id;
					}
				break;
				case '508':

					if($concepto->valor_fijo!=null){
						$resultado->monto=$concepto->valor_fijo;
						$resultado->id=$concepto->id;
					}
 					
					else{
						$resultado->monto=($concepto->porcentaje/100)*$indice->sueldo_basico;
						$resultado->id=$concepto->id;
					}
				break;

				case '510':

					if($concepto->valor_fijo!=null){
						$resultado->monto=$concepto->valor_fijo;
						$resultado->id=$concepto->id;
					}
 					
					else{
						$resultado->monto=($concepto->porcentaje/100)*$indice->sueldo_basico;
						$resultado->id=$concepto->id;
					}
					break;
					
					case '512':

					if($concepto->valor_fijo!=null){
						$resultado->monto=$concepto->valor_fijo;
						$resultado->id=$concepto->id;
					}
 					
					else{
						$resultado->monto=($concepto->porcentaje/100)*$indice->sueldo_basico;
						$resultado->id=$concepto->id;
					}
					break;

			}
    	return $resultado;
    }
}
