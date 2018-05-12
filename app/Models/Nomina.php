<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Nomina extends Model
{
    //
        protected $table = "nominas";

    protected $fillable = ['fecha','tipo','estatus'];
            
            public function conceptos(){
          return $this->belongsToMany('App\Models\Concepto');
    }

    public function vouchers (){
    	return $this->hasMany('App\Models\Voucher');
    }



    public  function Scopetipo ($query,$tipo){


    	return $query->where('tipo' ,'=', $tipo);


    }
}
