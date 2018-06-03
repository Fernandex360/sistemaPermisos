<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class permiso extends Model
{
    protected $table = "permisos";

    protected $fillable = ['codigo','salida','regreso','ndias','id_centro','id_diagnostico'];
}
