<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipo_inmueble extends Model
{
    protected $guarded = [];

    public function inmuebles()
    {
        return $this->hasMany('App\Inmueble');
    }
}
