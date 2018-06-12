<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class mailController extends Controller
{

    public function send(Request $request)
    {
        // $validate = $request->validate([
        //     'name_contact' => 'required',
        //     'email_contact' => 'required|email',
        //     'phone' => 'required|numeric'
        // ]);

        Mail::to('sandres9011@gmail.com')->send(new \App\Mail\RuequestContact($request->all()));
        Session::flash('email-info', 'Su mensaje ha sido enviado');
        $services = \App\Tipo_servicio::all();
        return redirect()->action('contactoController@showForm', ['ok' => 1]);
    }
}
