<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    //
                    protected $table = "cargos";

    protected $fillable = ['nombre','perfil_pdf','tabulador_salarial_id'];
}
