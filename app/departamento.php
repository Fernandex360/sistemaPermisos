<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class departamento extends Model
{
    protected $table ="departamentos";

    protected $fillable =['nombre','descripcion'];
}
