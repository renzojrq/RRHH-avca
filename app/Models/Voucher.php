<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Voucher extends Model
{
    //
         protected $table = "voucher";

    protected $fillable = ['empleado_id','concepto_id','nomina_id','monto','fecha'];

    public function empleado (){
    	return $this->belongsTo('App\Models\Empleado');
    }

    public function nomina (){
    	return $this->belongsTo('App\Models\Nomina');
    }

    public function concepto (){
    	return $this->belongsTo('App\Models\Concepto');
    }


    



    


}
