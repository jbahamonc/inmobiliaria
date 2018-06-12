<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contactoController extends Controller
{
    public function showForm()
    {
        $services = \App\Tipo_servicio::all();
        return view('contact.contact',
                    ['title' => "Contacta con nosotros",
                    'no_landing' => true,
                    'search' => false,
                    'servicios_menu' => $services,
                    'ok' => (isset($ok) && $ok == 1)? 1:0]);
    }
}
