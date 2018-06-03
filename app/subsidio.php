<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class subsidio extends Model
{
     protected $table = "subsidios";

    protected $fillable =['id_permiso','estado'];
}
