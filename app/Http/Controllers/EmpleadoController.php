<?php

namespace App\Http\Controllers;

use App\Models\Cargo;
use App\Models\Departamento;
use App\Models\Sucursal;
use App\Models\TabuladorSalarial;
use Illuminate\Http\Request;
use App\Models\Profesion;
use Illuminate\Support\Facades\Storage;

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
}
