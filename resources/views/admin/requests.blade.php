@extends('layout.admin')

@section('section')
<div class="page-container">
    @if ( isset($solicitudes) && !$solicitudes->isEmpty() )
        <div class="row">
            <h5>Listado Solicitudes Registradas</h5>
            <table class="responsive-table highlight">
                <thead>
                    <tr>
                      <th>#</th>
                      <th>Cliente</th>
                      <th>Dirección</th>
                      <th>Teléfono</th>
                      <th>Fecha de Solicitud</th>
                      <th>Mensaje</th>
                      <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($solicitudes as $key => $s)
                        <tr>
                            <td>{{ $key + 1}}</td>
                            <td>{{ $s->cliente->nombre_completo }}</td>
                            <td>{{ $s->cliente->direccion }}</td>
                            <td>{{ $s->cliente->telefono }}</td>
                            <td>{{ $s->fecha }}</td>
                            <td>{{ $s->mensaje }}</td>
                            <td>
                                <button title="Informacón del Inmueble" data-target="modal_aditional-{{ $key }}" class="btn-floating waves-effect modal-trigger"><i class="material-icons">remove_red_eye</i></button>
                            </td>
                            <!-- Modal Info Aditional -->
                            <div id="modal_aditional-{{ $key }}" class="modal">
                                <div class="modal-content">
                                    <h4>Información del Inmueble</h4>
                                    <p>Nombre: {{ $s->inmueble->nombre }}</p>
                                    <p>Descripción: {{ $s->inmueble->descripcion }}</p>
                                    <p>Ubicación: {{ $s->inmueble->zona }}</p>
                                    <p>Precio: ${{ number_format($s->inmueble->valor) }}</p>
                                    <p>En Oferta: {{ ($s->inmueble->oferta == 1)? 'SI':'NO' }}</p>
                                    <p>En Promoción: {{ ($s->inmueble->promocionar == 1)? 'SI':'NO' }}</p>
                                    <p>Tipo: {{ $s->inmueble->tipo_inmueble->descripcion }}</p>
                                    <p>Gestión: {{ $s->inmueble->tipo_servicio->descripcion }}</p>
                                </div>
                            </div>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @else
        <div class="center">
            <i class="material-icons icon-empty">sentiment_very_dissatisfied</i>
            <h5><b>No hay solicitudes registradas</b></h5>
        </div>
    @endif
</div>
@endsection
