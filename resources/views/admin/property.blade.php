@extends('layout.admin')

@section('section')
<div class="page-container">
    <form action="/admin/save/{{ $inmueble->id }}" method="post" enctype="multipart/form-data" id="frm_update_property">
        {{ csrf_field() }}
        <div class="row">
            <div class="col s12 m4">
                <div class="card">
                    <div class="card-image">
                        <img id="view_img_property" src="{{ ($inmueble->imagen == 'default.jpg')? asset('images/' . $inmueble->imagen) : asset('storage/' . $inmueble->imagen) }}">
                        <button type="button" class="btn-floating btn_file halfway-fab waves-effect waves-light"><i class="material-icons">attachment</i>
                            <label for="img_property"></label>
                            <input id="img_property" type="file" name="file_property" class="hide">
                        </button>
                    </div>
                    <div class="card-content">
                        <div class="input-field">
                           <input id="titulo" name="titulo" type="text" value="{{ $inmueble->nombre }}" required>
                           <label for="titulo"> Título del Inmueble</label>
                        </div>
                        <div class="input-field">
                           <textarea id="textarea2" name="info" class="materialize-textarea" required>{{ $inmueble->descripcion }}</textarea>
                           <label for="textarea1">Descripción del Inmueble</label>
                        </div>
                        <div class="input-field">
                           <input id="ubicacion" name="ubicacion" type="text" value="{{ $inmueble->ubicacion }}" required>
                           <label for="ubicacion"> Dirección del Inmueble</label>
                        </div>
                        <div class="input-field">
                            <input id="valor" name="valor" type="number" value="{{ $inmueble->valor }}" required>
                            <label for="valor"> Valor del Inmueble</label>
                        </div>
                        <div class="input-field">
                            <select name="zona" required>
                                <option value="0" disabled selected>Seleccione</option>
                                <option value="Oriente" {{ ($inmueble->zona == 'Oriente')? 'selected':'' }}>Oriente</option>
                                <option value="Occidente" {{ ($inmueble->zona == 'Occidente')? 'selected':'' }}>Occidente</option>
                                <option value="Norte" {{ ($inmueble->zona == 'Norte')? 'selected':'' }}>Norte</option>
                                <option value="Sur" {{ ($inmueble->zona == 'Sur')? 'selected':'' }}>Sur</option>
                                <option value="Centro" {{ ($inmueble->zona == 'Centro')? 'selected':'' }}>Centro</option>
                                <option value="Suroccidente" {{ ($inmueble->zona == 'Suroccidente')? 'selected':'' }}>Suroccidente</option>
                                <option value="Suroriente" {{ ($inmueble->zona == 'Suroriente')? 'selected':'' }}>Suroriente</option>
                                <option value="Noroccidente" {{ ($inmueble->zona == 'Noroccidente')? 'selected':'' }}>Noroccidente</option>
                                <option value="Nororiente" {{ ($inmueble->zona == 'Nororiente')? 'selected':'' }}>Nororiente</option>
                            </select>
                            <label>Ubicación del Inmueble</label>
                        </div>
                        <div class="input-field">
                            <select name="servicio" required>
                                <option value="0" disabled selected>Seleccione</option>
                                @foreach ($servicios as $s)
                                    <option value="{{ $s->id }}" {{ ($s->id == $inmueble->tipo_servicio_id)? 'selected':'' }} > {{ ucfirst($s->descripcion) }}</option>
                                @endforeach
                            </select>
                            <label>Servicio</label>
                        </div>
                        <div class="input-field">
                            <select name="tipo" required>
                                <option value="0" disabled selected>Seleccione</option>
                                @foreach ($tipo as $t)
                                    <option value="{{ $t->id }}" {{ ($t->id == $inmueble->tipo_inmueble_id)? 'selected':'' }} >{{ ucfirst($t->descripcion) }}</option>
                                @endforeach
                            </select>
                            <label>Tipo de Inmueble</label>
                        </div>
                        <div class="input-field">
                            <span>Promocionar </span>
                            <div class="switch right" style="display:inline-block">
                                <label>
                                  <input type="checkbox" name="promo" {{ ($inmueble->promocionar == 1)? 'checked':'' }}>
                                  <span class="lever" style="margin:0"></span>
                                </label>
                            </div>
                        </div>
                        <div class="input-field">
                            <span>Ofertar </span>
                            <div class="switch right" style="display:inline-block">
                                <label>
                                  <input type="checkbox" name="oferta" {{ ($inmueble->oferta == 1)? 'checked':'' }}>
                                  <span class="lever" style="margin:0"></span>
                                </label>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="col s12 m8">
                <div class="card">
                    <div class="card-content">
                        <h5>Información Adicional</h5>
                    </div>
                    <div class="card-tabs">
                        <ul class="tabs tabs-fixed-width">
                            <li class="tab"><a class="active" href="#test4">caracteristicas</a></li>
                            <li class="tab"><a href="#test5">detalles</a></li>
                            <li class="tab"><a href="#test6">imagenes</a></li>
                        </ul>
                    </div>
                    <div class="card-content">
                        <div id="test4">
                            @if (!$inmueble->caracteristicas->isEmpty())
                                <input type="hidden" name="opt" value="1">
                                @foreach ($inmueble->caracteristicas as $ct)
                                    <input type="hidden" name="id_ctrs[]" value="{{ $ct->id }}">
                                    <div class="input-field">
                                       <input id="{{ $ct->nombre }}" name="c_ctrs[]" type="number" value="{{ $ct->pivot->cantidad }}" required>
                                       <label for="{{ $ct->nombre }}">{{ $ct->nombre }}</label>
                                    </div>
                                @endforeach
                            @else
                                <input type="hidden" name="opt" value="0">
                                @foreach ($ctrs as $c)
                                    <input type="hidden" name="id_ctrs[]" value="{{ $c->id }}">
                                    <div class="input-field">
                                       <input id="{{ $c->nombre }}" name="c_ctrs[]" type="number" value="0" required>
                                       <label for="{{ $c->nombre }}">{{ $c->nombre }}</label>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                        <div id="test5">
                            <div class="content-details" id="content-details">
                            @if (!$inmueble->detalle_adicionales->isEmpty())
                                @foreach ($inmueble->detalle_adicionales as $dt)
                                    <div class="input-field">
                                        <input type="hidden" name="ids_dt[]" value="{{ $dt->id }}">
                                       <input id="" name="details[]" type="text" value="{{ $dt->descripcion }}" required>
                                       <label for="" class="active">Descripción</label>
                                       <button class="btn btn-floating delete-detail" data-id="{{ $dt->id }}" type="button">
                                           <i class="large material-icons">delete</i>
                                       </button>
                                    </div>
                                @endforeach
                                <div class="input-field add">
                                   <input id="text-detail" type="text">
                                   <label for="">Descripción</label>
                                   <button class="btn btn-floating" type="button" id="add_detail">
                                       <i class="large material-icons">add</i>
                                   </button>
                                </div>
                            @else
                                <div class="input-field add">
                                   <input id="text-detail" type="text">
                                   <label for="">Descripción</label>
                                   <button class="btn btn-floating" type="button" id="add_detail">
                                       <i class="large material-icons">add</i>
                                   </button>
                                </div>
                            @endif
                            </div>
                        </div>
                        <div id="test6">
                            <div class="content-images" id="content-images">
                                @if ($inmueble->imagenes->count() > 0)
                                    @foreach ($inmueble->imagenes as $img)
                                        <div class="row-image">
                                            <div class="file-field input-field">
                                                <img class="left materialboxed" width="80" src="{{ asset('storage/'. $img->nombre) }}" alt="">
                                                <div class="content_img">
                                                    <div class="btn" style="position: relative;">
                                                        <span>imagen</span>
                                                        <input type="file" class="file" name="images[]">
                                                    </div>
                                                    <div class="file-path-wrapper">
                                                        <input type="hidden" name="ids_img[]" value="{{ $img->id }}">
                                                        <input class="validate truncate" name="titles[]" value="{{ $img->titulo }}" type="text" placeholder="Nombre de la imagen" required>
                                                    </div>
                                                    <button class="btn btn-floating delete-img" data-id="{{ $img->id }}" type="button">
                                                        <i class="large material-icons">delete</i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                    <div class="row-image">
                                        <div class="file-field input-field">
                                            <div>
                                                <img class="left" width="80" src="{{ asset('images/default.jpg') }}" alt="">
                                            </div>
                                            <div class="content_img">
                                                <div class="btn" style="position: relative;">
                                                    <span>imagen</span>
                                                    <input type="file" class="file">
                                                </div>
                                                <div class="file-path-wrapper">
                                                    <input class="truncate" type="text" placeholder="Nombre de la imagen">
                                                </div>
                                                <button class="btn btn-floating add-image" type="button">
                                                    <i class="large material-icons">add</i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                @else
                                    <div class="row-image">
                                        <div class="file-field input-field">
                                            <div>
                                                <img class="left" width="80" src="{{ asset('images/default.jpg') }}" alt="">
                                            </div>
                                            <div class="content_img">
                                                <div class="btn" style="position: relative;">
                                                    <span>imagen</span>
                                                    <input type="file" class="file">
                                                </div>
                                                <div class="file-path-wrapper">
                                                    <input class="truncate" type="text" placeholder="Nombre de la imagen">
                                                </div>
                                                <button class="btn btn-floating add-image" type="button">
                                                    <i class="large material-icons">add</i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="fixed-action-btn">
                <button type="submit" class="btn-floating btn-large waves-effect">
                    <i class="large material-icons">save</i>
                </button>
            </div>
            <div class="clearfix"></div>
        </div>
    </form>
</div>
@endsection
