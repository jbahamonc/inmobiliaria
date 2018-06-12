<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Solicitud extends Model
{


    public function inmueble()
    {
        return $this->belongsTo('App\Inmueble');
    }

    public function cliente()
    {
        return $this->belongsTo('App\Cliente');
    }
}
