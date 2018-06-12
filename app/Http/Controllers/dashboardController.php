<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashboardController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        return view('admin.dashboard');
    }

    public function getAllServices()
    {
        $ser = \App\Tipo_servicio::all();
        $tipo_inmueble = \App\Tipo_inmueble::all();
        return view('admin.services', [
            'services' => $ser,
            'tipo_inmueble' => $tipo_inmueble
        ]);
    }
}
