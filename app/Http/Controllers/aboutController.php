<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class aboutController extends Controller
{
    public function index()
    {
    	$services = \App\Tipo_servicio::all();
    	return view('about.about', [
    		'servicios_menu' => $services,
    		'no_landing' => true,
    		'search' => false,
    	]);
    }
}
