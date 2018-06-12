<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class solicitudesController extends Controller
{
    public function index()
    {
        $sol = \App\Solicitud::all();
        foreach ($sol as $s) {
            $s->inmueble->tipo_inmueble;
            $s->inmueble->tipo_servicio; 
            $s->cliente;
        }
        return view('admin.requests', [
            'solicitudes' => $sol
        ]);
    }
}
