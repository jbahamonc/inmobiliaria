<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validate\Validate;
use Illuminate\Support\Facades\Storage;

class propertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $req)
    {
        $zona = $req->input('zona');
        $gestion = $req->input('gestion');
        $tipo_inmueble = $req->input('tipo_inmueble');
        $habitaciones = $req->input('habitaciones');
        $baños = $req->input('baños');
        $estrato = $req->input('estrato');

        $services = \App\Tipo_servicio::all();
        $tipo = \App\tipo_inmueble::all();
        $arr = [];
        if ($zona != 'Cualquiera') {
            array_push($arr, ['zona', '=', $zona]);
        }
        if ($gestion != 0) {
            array_push($arr, ['tipo_servicio_id', '=', $gestion]);
        }
        if ($tipo_inmueble != 0) {
            array_push($arr, ['tipo_inmueble_id', '=', $tipo_inmueble]);
        }

        if (!empty($arr)) {
            $data = \App\inmueble::where($arr)->get();

        } else {
            $data = \App\inmueble::all();
        }

        if ($habitaciones != 0) {
            $count = 0;
            foreach ($data as $d) {
                $result = $d->caracteristicas()
                            ->where('nombre', 'Habitaciones')
                            ->wherePivot('cantidad', '=', $habitaciones)
                            ->get();
                if ($result->isEmpty()) {
                    $data->splice($count, 1);
                    $count = $count - 1;
                }
                else {
                    $count = $count + 1;
                }
            }
        }
        if ($baños != 0) {
            $count = 0;
            foreach ($data as $key => $b) {
                $result = $b->caracteristicas()
                            ->where('nombre', 'Baños')
                            ->wherePivot('cantidad', '=', $baños)
                            ->get();
                if ($result->isEmpty()) {
                    $data->splice($count, 1);
                    $count = $count - 1;
                }
                else {
                    $count = $count + 1;
                }
            }
        }
        if ($estrato != 0) {
            $count = 0;
            foreach ($data as $key => $e) {
                $result = $e->caracteristicas()
                            ->where('nombre', 'Estrato')
                            ->wherePivot('cantidad', '=', $estrato)
                            ->get();
                if ($result->isEmpty()) {
                    $data->splice($count, 1);
                    $count = $count - 1;
                }
                else {
                    $count = $count + 1;
                }
            }
        }

        foreach ($data as $in) {
            $in->caracteristicas;
        }

        return view('property.search',
                    ['title' => "Resultado de la busqueda",
                    'no_landing' => true,
                    'search' => true,
                    'data' => $data,
                    'servicios_menu' => $services,
                    'm_tipo' => $tipo]);
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
        $validate = $request->validate([
            'titulo' => 'required',
            'info' => 'required',
            'zona' => 'required',
            'servicio' => 'required',
            'valor' => 'required',
            'tipo' => 'required'
        ]);

        $inmueble = new \App\Inmueble();
        $inmueble->nombre = $request->input('titulo');
        $inmueble->descripcion = $request->input('info');
        $inmueble->ubicacion = $request->input('ubicacion');
        $inmueble->propietario_id = 1116789304;
        $inmueble->valor = $request->input('valor');
        $inmueble->promocionar = ($request->input('promo') == 'on' ? 1 : 0);
        $inmueble->oferta = ($request->input('oferta') == 'on' ? 1 : 0);
        $inmueble->zona = $request->input('zona');
        $inmueble->tipo_servicio_id = $request->input('servicio');
        $inmueble->tipo_inmueble_id = $request->input('tipo');
        $inmueble->save();

        return redirect()->action('propertyController@showProperty', ['id' => $inmueble->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $property = \App\Inmueble::find($id);
        $property->caracteristicas;
        $property->imagenes;
        $property->detalle_adicionales;
        $property->tipo_inmueble;

        $services = \App\Tipo_servicio::all();
        $tipo = \App\tipo_inmueble::all();

        $similar_property = \App\Inmueble::where('tipo_inmueble_id', $property->tipo_inmueble_id)
                                            ->take(2)
                                            ->get();
        $other_property = \App\Inmueble::where('tipo_servicio_id', $property->tipo_servicio_id)
                                        ->take(4)
                                        ->get();
        foreach ($similar_property as $sm) {
            $sm->caracteristicas;
            $sm->tipo_servicio;
        }
        foreach ($other_property as $op) {
            $op->caracteristicas;
            $op->tipo_servicio;
        }

        return view('property.property',
                    ['title' => $property->nombre,
                    'no_landing' => true,
                    'search' => true,
                    'property' => $property,
                    'similar' => $similar_property,
                    'other_property' => $other_property,
                    'servicios_menu' => $services,
                    'm_tipo' => $tipo]);
    }

    public function showProperty($id)
    {
        $info = \App\Inmueble::find($id);
        $info->caracteristicas;
        $info->imagenes;
        $info->detalle_adicionales;
        $info->tipo_inmueble;

        $tipo_servicio = \App\Tipo_servicio::all();
        $tipo_inmueble = \App\Tipo_inmueble::all();
        $caracteristicas = \App\Caracteristica::all();

        return view('admin.property',[
            'inmueble' => $info,
            'servicios' => $tipo_servicio,
            'tipo' => $tipo_inmueble,
            'ctrs' => $caracteristicas,
            'm_tipo' => $tipo_inmueble
        ]);
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
        $in = \App\Inmueble::find($id);
        $in->nombre = $request->input('titulo');
        $in->descripcion = $request->input('info');
        $in->ubicacion = $request->input('ubicacion');
        $in->propietario_id = 1116789304;
        $in->valor = $request->input('valor');
        $in->promocionar = ($request->input('promo') == 'on' ? 1 : 0);
        $in->oferta = ($request->input('oferta') == 'on' ? 1 : 0);
        $in->zona = $request->input('zona');
        $in->tipo_servicio_id = $request->input('servicio');
        $in->tipo_inmueble_id = $request->input('tipo');
        $img_name = $request->file('file_property');
        // var_dump($img_name);
        // exit();
        if ( $img_name ) {
            $img_property = $img_name->store('propertys', 'public');
            $in->imagen = $img_property;
        }
        $in->save();

        // Id de cada una de las caracteristicas
        $ids = $request->input('id_ctrs');
        // Cantidad de cada caracteristica
        $ctrs = $request->input('c_ctrs');
        // Determina si es para guardar o actualizar la tabla intermedia
        $opt = $request->input('opt');
        if ($opt == 0) {
            for ($i = 0; $i < count($ids); $i++) {
                $in->caracteristicas()->attach($ids[$i], ['cantidad' => $ctrs[$i]]);
            }
        }else {
            for ($i = 0; $i < count($ids); $i++) {
                $in->caracteristicas()->updateExistingPivot($ids[$i], ['cantidad' => $ctrs[$i]]);
            }
        }

        $detalles = $request->input('details');
        $ids_dt = $request->input('ids_dt');
        for ($i=0; $i < count($ids_dt); $i++) {
            $dt = \App\Detalle_adicional::find($ids_dt[$i]);
            $dt->descripcion = $detalles[$i];
            $in->detalle_adicionales()->save($dt);
        }

        for ($j = count($ids_dt); $j < count($detalles); $j++) {
            $dt = new \App\Detalle_adicional();
            $dt->descripcion = $detalles[$j];
            $in->detalle_adicionales()->save($dt);
        }

        $titles = $request->input('titles');
        $imgs = $request->file('images');
        $ids_img = $request->input('ids_img');
        for ($i = 0; $i < count($ids_img); $i++) {
            $imagen = \App\Imagen::find($ids_img[$i]);
            if (isset($imgs[$i])) {
                Storage::disk('public')->delete($imagen->nombre);
                $path = $imgs[$i]->store('propertys', 'public');
                $imagen->nombre = $path;
            }
            $imagen->titulo = $titles[$i];
            $in->imagenes()->save($imagen);
        }
        for ($k = count($ids_img); $k < count($titles); $k++) {
            $path = $imgs[$k]->store('propertys', 'public');
            $imagen = new \App\Imagen();
            $imagen->titulo = $titles[$k];
            $imagen->nombre = $path;
            $in->imagenes()->save($imagen);
        }

        return redirect('/admin/inmuebles');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $p = \App\Inmueble::find($id);
        $ctrs_inmueble = \App\Caracteristica_inmueble::where('inmueble_id', $id)->get();
        foreach ($ctrs_inmueble as $c) {
            $c->delete();
        }
        foreach ($p->detalle_adicionales as $d) {
            $d->delete();
        }
        foreach ($p->solicitudes as $s) {
            $s->delete();
        }
        foreach ($p->imagenes as $i) {
            Storage::disk('public')->delete($i->nombre);
            $i->delete();
        }
        $p->delete();
        echo "El inmueble ha sido eliminado";
    }

    public function showPropertyByType($type)
    {
        $tipo = \App\Tipo_inmueble::where('descripcion', ucfirst($type))->get();
        $inmuebles = \App\Inmueble::where('tipo_inmueble_id', $tipo[0]->id)->paginate(12);
        $allTypes = \App\Tipo_inmueble::all();
        foreach ($inmuebles as $i) {
            $i->caracteristicas;
        }

        $services = \App\Tipo_servicio::all();
        return view('property.type',
                    ['title' => ucfirst($type),
                    'no_landing' => true,
                    'search' => true,
                    'inmuebles' => $inmuebles,
                    'servicios_menu' => $services,
                    'tiposIn' => $allTypes,
                    'm_tipo' => $allTypes]);
    }

    public function sendRequest(Request $req)
    {
        $cliente = new \App\Cliente();
        $cliente->nombre_completo = $req->input('name_user');
        $cliente->direccion = $req->input('address');
        $cliente->telefono = $req->input('phone');
        $cliente->save();

        $sol = new \App\Solicitud();
        $sol->fecha = date('d/m/Y');
        $sol->inmueble_id = $req->input('property_id');
        $sol->mensaje = $req->input('mensaje');

        $cliente->solicitudes()->save($sol);
        echo json_encode($sol);
    }

    public function getAllProperty()
    {
        $props = \App\Inmueble::all();
        $ser = \App\Tipo_servicio::all();
        $tinm = \App\Tipo_inmueble::all();
        return view('admin.propertys', [
            'props' => $props,
            'servicios' => $ser,
            'tipo' => $tinm
        ]);
    }
}
