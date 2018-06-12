<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class detallesController extends Controller
{
    public function delete(Request $req)
    {
        $id = $req->input('id');
        $dt = \App\Detalle_adicional::find($id);
        $dt->delete();
        echo true;
    }
}
