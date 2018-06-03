<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class diagnostico extends Model
{
    protected $table = "diagnosticos";

    protected $fillable =['nombre','descripcion'];
}
