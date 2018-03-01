<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
   protected $fillable = ['nombre', 'apellido','localidad','domicilio','telefono','estado_cuenta'];
}
