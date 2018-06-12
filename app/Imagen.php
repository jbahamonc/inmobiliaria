<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Imagen extends Model
{

    public function inmueble()
    {
        return $this->belongsTo('App\Inmueble');
    }
}
