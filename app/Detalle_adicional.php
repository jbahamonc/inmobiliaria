<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detalle_adicional extends Model
{

    public function inmueble()
    {
        return $this->belongsTo('App\Inmueble');
    }
}
