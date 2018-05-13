<?php

namespace App\Http\Controllers;

use App\Models\Cargo;
use App\Models\Departamento;
use App\Models\Sucursal;
use App\Models\TabuladorSalarial;
use Illuminate\Http\Request;
use App\Models\Profesion;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\db;


class EmpleadoController extends Controller
{
    public function obtenerProfesiones(Request $request)
    {
        $profesiones = Profesion::where('nivel_academico', $request->nivel_academico)->get();
        return response()->json($profesiones);
    }

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function obtenerSucursales()
    {
        $data = Sucursal::all();
        return response()->json($data);
    }

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function obtenerDepartamentos()
    {
        $data = Departamento::all();
        return response()->json($data);
    }

    public function obtenerCargos()
    {
        $cargos = Cargo::all();
        return response()->json($cargos);
    }

    public function obtenerBancos()
    {
        $bancos = Storage::get('public/json/bancos.json');
        return $bancos;
    }

    public function obtenerEstados()
    {
        $estados = Storage::get('public/json/venezuela.json');
        return $estados;
    }

    public function obtenerTabuladorSalarial(Request $request)
    {
        $tabulador = TabuladorSalarial::where('id', $request->tabulador_salarial_id)->get();
        return response()->json($tabulador);
    }



    public function consultavoucher(){


        $nomina_id = 1;
        $empleado_id =1;
        $fecha = "2018-05-13";


    $user = DB::table('voucher')->select('concepto_id','monto')->where('empleado_id', '=', $empleado_id)->get();


        $user = DB::table('voucher')
                    ->join('conceptos', 'voucher.concepto_id', '=','conceptos.id')
        ->select('conceptos.descripcion','voucher.monto','voucher.fecha')->where('empleado_id', '=', $empleado_id)->where('fecha', '=', $fecha)->get();

    dd($user);

        }

}
