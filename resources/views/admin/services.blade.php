@extends('layout.admin')

@section('section')
<div class="page-container">
    @if ( isset($services) && !$services->isEmpty() )
    <h5>Configuración de Inmuebles</h5>
    <div class="row">
        <div class="card">
              <div class="card-tabs">
                <ul class="tabs tabs-fixed-width">
                    <li class="tab"><a class="active" href="#test4">tipo de servicios</a></li>
                    <li class="tab"><a href="#test5">tipo de inmuebles</a></li>
                </ul>
              </div>
              <div class="card-content">
                <div id="test4">
                    <div class="row">
                        <table>
                            <thead>
                                <tr>
                                  <th>#</th>
                                  <th>Servicio</th>
                                  <th>Fecha de Creación</th>
                                  <th>Fecha de Actualización</th>
                                  <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($services as $key => $s)
                                    <tr>
                                        <td>{{ $key + 1}}</td>
                                        <td>{{ $s->descripcion }}</td>
                                        <td>{{ $s->created_at }}</td>
                                        <td>{{ $s->updated_at }}</td>
                                        <td>
                                            <button data-id="{{ $s->id }}" class="btn-floating waves-effect delete_service"><i class="material-icons">delete</i></button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <button data-target="modal_services" type="button" class="btn btn-large modal-trigger">nuevo servicios</button>
                    </div>
                </div>
                <div id="test5">
                    <div class="row">
                        <table>
                            <thead>
                                <tr>
                                  <th>#</th>
                                  <th>Tipo de Inmueble</th>
                                  <th>Fecha de Creación</th>
                                  <th>Fecha de Actualización</th>
                                  <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($tipo_inmueble as $key => $t)
                                    <tr>
                                        <td>{{ $key + 1}}</td>
                                        <td>{{ $t->descripcion }}</td>
                                        <td>{{ $t->created_at }}</td>
                                        <td>{{ $t->updated_at }}</td>
                                        <td>
                                            <button data-id="{{ $t->id }}" class="btn-floating waves-effect delete_tinmueble"><i class="material-icons">delete</i></button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <button data-target="modal_tipo_inmueble" type="button" class="btn btn-large modal-trigger">
                            registrar tipo
                        </button>
                    </div>
                </div>
              </div>
        </div>
    </div>
    @else
        knknkjnjknjk
    @endif
</div>
<!-- Modal Register Services -->
<div id="modal_services" class="modal">
    <form action="{{ route('save_service') }}" method="post">
        {{ csrf_field() }}
        <div class="modal-content">
            <h4>Registro de Servicios</h4>
            <p>Campos obligatorios <span style="color: red">*</span></p>
            <div class="row" style="margin-bottom: 0">
                <div class="input-field col s12">
                    <input id="service" name="services" type="text" class="validate" required>
                    <label for="service" class="active">Nombre del Servicio <span style="color: red">*</span></label>
                    <span class="helper-text" data-error="Información requerida" data-success="ok"></span>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="submit" class="waves-effect btn-flat">registrar</button>
        </div>
    </form>
</div>
<!-- Modal Register Type Property -->
<div id="modal_tipo_inmueble" class="modal">
    <form action="{{ url('/admin/tipo') }}" method="post">
        {{ csrf_field() }}
        <div class="modal-content">
            <h4>Registro de Tipos de Inmueble</h4>
            <p>Campos obligatorios <span style="color: red">*</span></p>
            <div class="row" style="margin-bottom: 0">
                <div class="input-field col s12">
                    <input id="tipo" name="tipo" type="text" class="validate" required>
                    <label for="tipo" class="active">Nombre <span style="color: red">*</span></label>
                    <span class="helper-text" data-error="Información requerida" data-success="ok"></span>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="submit" class="waves-effect btn-flat">registrar</button>
        </div>
    </form>
</div>
@endsection
