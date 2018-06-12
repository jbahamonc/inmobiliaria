<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('guest');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        $inmuebles = \App\Inmueble::paginate(12);
        $promo = \App\Inmueble::where('promocionar', 1)->take(5)->get();
        foreach ($inmuebles as $i) {
            $i->caracteristicas;
        }
        foreach ($promo as $p) {
            $p->caracteristicas;
        }

        $services = \App\Tipo_servicio::all();
        $tipo = \App\tipo_inmueble::all();
        return view('home.home', [
                'title' => 'Bienvenidos a Inmobiliaria Púrpura',
                'no_landing' => false,
                'search' => true,
                'servicios_menu' => $services,
                'inmuebles' => $inmuebles,
                'promo' => $promo,
                'm_tipo' => $tipo
        ]);
    }
}
