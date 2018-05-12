<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\facades\DB;

class Concepto extends Model
{
    //
    protected $table = "conceptos";

    protected $fillable = ['tipo_concepto'
    						,'descripcion'
    						,'porcentaje'
    						,'valor_fijo'
    						,'valor_variable'
    						,'bono_vacacional'
    						,'prestaciones'
    						,'isl'
    					  ];


    public function empleados(){
          return $this->belongsToMany('App\Models\Empleado');
              }

              public function nominas(){
          return $this->belongsToMany('App\Models\Nomina');
    }
    
    public function vouchers(){
          return $this->hasMany('App\Models\Voucher');
    }
           


            public function verificar($concepto,$nomina){

              $aux = DB::table('nominas_conceptos')->where('concepto_id', $concepto)->where('nomina_id', $nomina)->get();
              if(count($aux)>0)
                return true;

              return false;
            }


            public function scopebuscarCod($query,$cod){
              
              return $query->where('tipo_concepto' ,'=', $cod);
            }

}
