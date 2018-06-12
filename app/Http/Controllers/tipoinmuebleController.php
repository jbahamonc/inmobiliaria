<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tipoinmuebleController extends Controller
{
    public function store(Request $req)
    {
        $tipo = $req->input('tipo');
        $t = new \App\Tipo_inmueble();
        $t->descripcion = $tipo;
        $t->save();

        return redirect('/admin/configuracion');
    }

    public function destroy($id)
    {
        $t = \App\Tipo_inmueble::find($id);
        $t->delete();
        echo 'El tipo de inmueble se ha eliminado';
    }
}
