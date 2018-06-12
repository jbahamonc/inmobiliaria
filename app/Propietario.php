<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Propietario extends Model
{
    public function inmubles()
    {
        return $this->hasMany('App\Inmueble');
    }
}
