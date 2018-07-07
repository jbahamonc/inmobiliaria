@extends('layout.app')

@section('title', 'Acerca de Nosotros - Inmobiliaria Purpura')

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
            <h1 class=" title-secundary center">Acerca de Nosotros</h1>
            <div class="row">
                <h3 class="center title-secundary">Misión</h3>
                <p class="center">Proporcionar un servicio inmobiliario íntegro y profesional <br> orientado a la construcción de buenas relaciones <br> con nuestros clientes, beneficiando mutuamente <br> cada uno de los intereses, superando siempre las expectativas, <br> brindando calidad, seguridad y conformidad.</p>
            </div>
            <div class="row">
                <h3 class="center title-secundary">Visión</h3>
                <p class="center">Ser una empresa competitiva y reconocida en el ámbito <br> inmobiliario en nuestra región y a su vez ofrecer el mejor servicio de acompañamiento <br> y asesoría durante todo el proceso requerido para su propiedad.</p>
            </div>
            <div class="row">
                <h3 class="center title-secundary">Valores</h3>
                <p class="center">
                    <b>TRABAJO EN EQUIPO</b><br> Compartir información, conocimientos y colaboración efectiva <br> alineada con un objetivo común. <br><br>
                    <b>CONDUCTA ÉTICA</b><br> Ser profesionales íntegros, respetando siempre a nuestro compañero <br> y cliente por encima de cualquier situación. <br><br>
                    <b>RESPETO</b><br> Valorar las acciones de cada personal tal cual como son. <br><br>
                    <b>EMPATÍA</b><br> Comprender los sentimientos y emisiones de cada individuo, <br> brindando asi una mejor convivencia.

                </p>
            </div>
        </div>
    </section>
@endsection
