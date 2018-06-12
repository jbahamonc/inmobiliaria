<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class servicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($type)
    {
        $tipo_servicio = \App\Tipo_servicio::where('descripcion', ucfirst($type))->get();
        $inmuebles = \App\Inmueble::where('tipo_servicio_id', $tipo_servicio[0]->id)->paginate(12);
        foreach ($inmuebles as $in) {
            $in->caracteristicas;
        }

        $other = \App\Inmueble::where('tipo_servicio_id', '<>', $tipo_servicio[0]->id)
                                ->take(3)
                                ->get();
        foreach ($other as $ot) {
            $ot->caracteristicas;
        }

        $services = \App\Tipo_servicio::all();
        $allTypes = \App\Tipo_inmueble::all();
        return view('services.general',
                    ['title' => ucfirst($type),
                    'no_landing' => true,
                    'search' => true,
                    'servicio' => $inmuebles,
                    'other' => $other,
                    'servicios_menu' => $services,
                    'tiposIn' => $allTypes,
                    'm_tipo' => $allTypes]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $service = $request->input('services');
        $ser = new \App\Tipo_servicio();
        $ser->descripcion = $service;
        $ser->save();

        return redirect('/admin/configuracion');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ser = \App\Tipo_servicio::find($id);
        $ser->delete();
        echo 'El servicio se ha eliminado';
    }
}
