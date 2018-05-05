<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use stdClass;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class NominaController extends Controller
{
    //
    public function generarnomina() {

		$empleados =  array();
		$empleado = new stdClass();
		//$cb=Carbon::parse("00:12:00");
		//dd($cb->toDateTimeString());
		$empleado->id=123; 
		$empleado->fecha_ingreso= "1990-10-01"; 

		$empleado->horas_extr_diur = 10;
		$empleado->horas_falt_diur = 3;
		$empleado->horas_extr_noct = 6;
		$empleado->horas_falt_noct = 2;

		$empleado->horas_extr_fer_diur = 4;
		$empleado->horas_falt_fer_diur = 3;
		$empleado->horas_extr_fer_noct = 1;
		$empleado->horas_falt_fer_noct = 0;

		$empleado->horas_diur = 90;
		$empleado->horas_noct = 70;
		$empleado->horas_fer_diur = 8;
		$empleado->horas_fer_noct = 4;
		array_push($empleados, $empleado);
    	
    	//logica de calculo

		//calculo antiguedad
		
		$fecha_actual = Carbon::today();
		
//$Cantiguedad = DB::table('conceptos')->where('tipo_concepto',103)->get();
//consulta para antiguedad

		//consulta para sueldo_base
		
		$sueldo_base =1000;

		$Cantiguedad = new stdClass();
		
        $Cantiguedad->tipo_concepto  = 103;
        $Cantiguedad->descripcion       = "Prima por antigüedad";
        $Cantiguedad->porcentaje        = 2;
        $Cantiguedad->valor_fijo        = null;
        $Cantiguedad->valor_variable    = null;
        $Cantiguedad->bono_vacacional   = 'si';
        $Cantiguedad->utilidades        = 'si';
        $Cantiguedad->prestaciones      = 'si';
        $Cantiguedad->isl               = 'si';
		

//dd($Cantiguedad);

		foreach ($empleados as $empleado) {
			
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

			dd($asignacion);









		}


    }
}
