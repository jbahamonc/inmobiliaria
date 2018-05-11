<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contactoController extends Controller
{
    public function showForm()
    {
        return view('contact.contact', ['title' => "Resultado de la busqueda", 'no_landing' => false, 'search' => false]);
    }
}
