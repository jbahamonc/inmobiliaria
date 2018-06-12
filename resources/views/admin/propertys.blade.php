@extends('layout.admin')

@section('section')
<div class="page-container">
    @if ( isset($props) && !$props->isEmpty() )
    <h4>Listado de Inmuebles Registrados</h4>
    <table class="responsive-table highlight">
        <thead>
            <tr>
                <th width="250">Nombre</th>
                <th width="250">Dirección</th>
                <th>En promoción</th>
                <th>En oferta</th>
                <th>Zona</th>
                <th>Precio</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($props as $p)
            <tr>
                <td onclick="redirect({{ $p->id }})">{{ $p->nombre }}</td>
                <td onclick="redirect({{ $p->id }})">{{ $p->descripcion }}</td>
                <td onclick="redirect({{ $p->id }})">{{ ($p->promocionar == 1)? 'SI':'NO' }}</td>
                <td onclick="redirect({{ $p->id }})">{{ ($p->oferta == 1)? 'SI':'NO' }}</td>
                <td onclick="redirect({{ $p->id }})">{{ $p->zona }}</td>
                <td onclick="redirect({{ $p->id }})">$ {{ number_format($p->valor) }}</td>
                <td>
                    <button data-id="{{ $p->id }}" class="btn btn-floating delete_property"><i class="material-icons">delete</i></button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="fixed-action-btn">
        <a class="btn-floating btn-large waves-effect modal-trigger" data-target="modal_register_property">
            <i class="large material-icons">mode_edit</i>
        </a>
    </div>
    @else
        <div class="center">
            <i class="material-icons icon-empty">sentiment_very_dissatisfied</i>
            <h5><b>Registra su primer inmueble</b></h5>
            <p>Da click en el boton<br>para registrar su primer inmueble </p>
            <button data-target="modal_register_property" class="btn waves-effect modal-trigger"> crear inmueble</button>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
    @endif
</div>
<!-- Modal Request -->
<div id="modal_register_property" class="modal modal-large modal-fixed-footer">
    <form action="/admin/register_property" method="post">
        {{ csrf_field() }}
        <div class="modal-content">
            <h5 class="no-margin">Registro de Inmuebles</h5>
            <p>Campos obligatorios <span style="color: red">*</span></p>
            <div class="row">
                <div class="input-field col s12">
                    <input id="titulo" name="titulo" type="text" class="validate" required>
                    <label for="titulo" class="active" required> Titulo del Inmueble <span style="color: red">*</span></label>
                    <span class="helper-text" data-error="Información requerida" data-success=""></span>
                </div>
                <div class="input-field col s12">
                    <textarea id="textarea1" name="info" class="materialize-textarea validate" required></textarea>
                    <label for="textarea1">Descripción del Inmueble <span style="color: red">*</span></label>
                    <span class="helper-text" data-error="Información requerida" data-success=""></span>
                </div>
                <div class="input-field col s12">
                    <input id="ubicacion" name="ubicacion" type="text" class="validate" required>
                    <label for="ubicacion" class="active" required> Ubicación del Inmueble <span style="color: red">*</span></label>
                    <span class="helper-text" data-error="Información requerida" data-success=""></span>
                </div>
                <div class="input-field col s12 m6">
                    <select name="zona" required>
                        <option value="0" disabled selected>Seleccione</option>
                        <option value="Oriente">Oriente</option>
                        <option value="Occidente">Occidente</option>
                        <option value="Norte">Norte</option>
                        <option value="Sur">Sur</option>
                        <option value="Centro">Centro</option>
                        <option value="Suroccidente">Suroccidente</option>
                        <option value="Suroriente">Suroriente</option>
                        <option value="Noroccidente">Noroccidente</option>
                        <option value="Nororiente">Nororiente</option>
                    </select>
                    <label>Ubicación del Inmueble <span style="color: red">*</span></label>
                </div>
                <div class="input-field col s12 m6">
                    <select name="servicio" required>
                        <option value="0" disabled selected>Seleccione</option>
                        @foreach ($servicios as $s)
                            <option value="{{ $s->id }}">{{ $s->descripcion }}</option>
                        @endforeach
                    </select>
                    <label>Servicio <span style="color: red">*</span></label>
                </div>
                <div class="input-field col s12 m6">
                    <input id="valor" name="valor" type="number" class="validate" required>
                    <label for="valor" class="active" required> Valor del Inmueble <span style="color: red">*</span></label>
                    <span class="helper-text" data-error="Información requerida" data-success=""></span>
                </div>
                <div class="input-field col s12 m6">
                    <select name="tipo" required>
                        <option value="0" disabled selected>Seleccione</option>
                        @foreach ($tipo as $t)
                            <option value="{{ $t->id }}">{{ $t->descripcion }}</option>
                        @endforeach
                    </select>
                    <label>Tipo de Inmueble <span style="color: red">*</span></label>
                </div>
                <div class="clearfix"></div>
                <div class="row">
                    <div class="col s12 m3">
                        <label>Promocionar </label>
                        <div class="switch">
                            <label>
                              <input type="checkbox" name="promo">
                              <span class="lever"></span>
                            </label>
                        </div>
                    </div>
                    <div class="col s12 m3">
                        <label>Ofertar </label>
                        <div class="switch">
                            <label>
                              <input type="checkbox" name="oferta">
                              <span class="lever"></span>
                            </label>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="submit" class="waves-effect btn-flat">guardar información</button>
        </div>
    </form>
</div>
<script>
function redirect(id) {
    document.location.href = `/admin/inmuebles/${id}`
}
</script>
@endsection
