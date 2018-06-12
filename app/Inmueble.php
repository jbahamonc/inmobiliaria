<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inmueble extends Model
{
    protected $guarded = [];

    public function caracteristicas()
    {
        return $this->belongsToMany('App\Caracteristica')->withPivot('cantidad');
    }

    public function imagenes()
    {
        return $this->hasMany('App\Imagen');
    }

    public function solicitudes()
    {
        return $this->hasMany('App\Solicitud');
    }

    public function detalle_adicionales()
    {
        return $this->hasMany('App\Detalle_adicional');
    }

    public function tipo_inmueble()
    {
        return $this->belongsTo('App\Tipo_inmueble');
    }

    public function tipo_servicio()
    {
        return $this->belongsTo('App\Tipo_servicio');
    }
}
