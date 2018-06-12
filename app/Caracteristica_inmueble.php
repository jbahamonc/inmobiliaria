<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Caracteristica_inmueble extends Model
{
    protected $primary_key = 'inmueble_id';
    protected $table = 'caracteristica_inmueble';

    public function inmueble()
    {
        return $this->belongsToMany('App\Inmueble');
    }

    public function caracteristica()
    {
        return $this->belongsTo('App\Caracteristica');
    }
}
