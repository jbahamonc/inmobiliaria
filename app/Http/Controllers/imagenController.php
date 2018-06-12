<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class imagenController extends Controller
{
    public function delete(Request $req)
    {
        $id = $req->input('id');
        $img = \App\Imagen::find($id);
        $img->delete();
        Storage::disk('public')->delete($img->nombre);
        echo true;
    }
}
