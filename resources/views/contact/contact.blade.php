@extends('layout.app')

@section('title')
{{ $title }} - Inmobiliaria Purpura
@endsection

@section('landing')
    @if (!isset($no_landing))
        @component('components.landing', ['inmuebles' => $inmuebles])
            no salio
        @endcomponent
    @else
        @component('components.landing-mini', ['servicios_menu' => $servicios_menu])
            no salio
        @endcomponent
    @endif
@endsection

@section('content')
    <section class="contact-us section">
    	<div class="container">
            <h1 class=" title-secundary">Contacta con nosotros</h1>
            <div class="row">
                <div class="col s12 m6">
                    <h6>
                        <p class="no-margin" style="margin-bottom:10px !important;">¿Quieres llevar a cabo un proyecto de inmueble?</p>
                        <p style="margin-top: 0">Contáctanos y hagamos de ello, una realidad.</p>
                    </h6>
                    <p class="text-muted">Campos obligatorios <span style="color:red">*</span></p>
                    <form action="{{ url('send_email') }}" method="post">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="input-field col s12">
                                <input  id="first_name" type="text" name="name_contact" class="validate" required>
                                <label for="first_name">Nombres y Apellidos <span style="color:red">*</span></label>
                                @if ($errors->has('name_contact'))
                                    <span class="helper-text" data-error="{{ $errors->firts('name_contact') }}" data-success="ok"></span>
                                @else
                                    <span class="helper-text" data-error="El campo es requerido" data-success="ok"></span>
                                @endif
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12 l6">
                                <input id="email" type="email" name="email_contact" class="validate" required>
                                <label for="email">Correo <span style="color:red">*</span></label>
                                <span class="helper-text" data-error="Debe ingresar un correo válido" data-success="ok"></span>
                            </div>
                            <div class="input-field col s12 l6">
                                <input id="tel" type="number" name="phone" class="validate" required>
                                <label for="tel">Teléfono <span style="color:red">*</span></label>
                                @if ($errors->has('phone'))
                                    <span class="helper-text" data-error="{{ $errors->firts('phone') }}" data-success="ok"></span>
                                @else
                                    <span class="helper-text" data-error="Debe ingresar un teléfono válido" data-success="ok"></span>
                                @endif
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <textarea id="textarea1" name="msg_contact" class="materialize-textarea validate" required></textarea>
                                <label for="textarea1">Mensaje <span style="color:red">*</span></label>
                                @if ($errors->has('msg_contact'))
                                    <span class="helper-text" data-error="{{ $errors->firts('msg_contact') }}" data-success="ok"></span>
                                @else
                                    <span class="helper-text" data-error="El campo es requerido" data-success="ok"></span>
                                @endif
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <button class="btn waves-effect waves-light btn-block" type="submit" name="action">enviar mensaje
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col s12 m6">
                    <div class="box-info-contact">
                        <div class="icon title-secundary left">
                            <i class="material-icons">pin_drop</i>
                        </div>
                        <div class="description">
                            <h5 class="info-title">Oficina Principal</h5>
                            <p class="text-muted"> Av. 5 # 13 - 82.
                                <br>Edf. Quinta Avenida, Oficina 306.
                                <br> Centro - Cúcuta.
                            </p>
                        </div>
                    </div>
                    <div class="box-info-contact">
                        <div class="icon title-secundary left">
                            <i class="material-icons">phone</i>
                        </div>
                        <div class="description">
                            <h5 class="info-title">Contactos</h5>
                            <p class="text-muted" style="word-wrap: break-word;">
                                contacto@inmobiliariapurpura.com
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
