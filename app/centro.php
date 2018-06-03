<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class centro extends Model
{
    protected $table =" centros";

    protected $fillable = ['nombre','descripcion'];
}
