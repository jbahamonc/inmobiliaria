<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipo_servicio extends Model
{

    public function inmuebles()
    {
        return $this->hasMany('App\Inmueble');
    }
}
