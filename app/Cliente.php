<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{

    public function solicitudes()
    {
        return $this->hasMany('App\Solicitud');
    }
}
