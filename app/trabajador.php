<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class trabajador extends Model
{
    protected $table =" trabajadores";

    protected $fillable = ['codigo','nombre','apellidos','dni','id_departamento'];

}
