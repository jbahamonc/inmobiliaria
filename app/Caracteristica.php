<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Caracteristica extends Model
{

    public function especificaciones()
    {
        return $this->belongsToMany('App\Inmueble', 'App\Caracteristica_inmueble');
    }
}
