@extends('layout.app')

@section('title')
{{ $title }} - Name company
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
<section class="property section">
    <div class="container">
        <div class="row">
            <div class="col s12 m8">
                <h1 style="margin-top:0;">Para {{ $title }}</h1>
                <div class="row">
                    @if (!$servicio->isEmpty())
                        @foreach($servicio as $i)
                            <div class="col s12 col m6">
                                <div class="card hoverable">
                                    <div class="card-image">
                                        <img src="{{ ($i->imagen == 'default.jpg')? asset('storage/propertys/'. $i->imagen) : asset('storage/'. $i->imagen) }}">
                                        <a href="/property/{{ $i->id }}" class="btn-floating btn-large pulse halfway-fab waves-effect waves-light red">
                                            <i class="material-icons">near_me</i>
                                        </a>
                                    </div>
                                    <div class="card-content">
                                        <a href="/property/{{ $i->id }}"><span class="card-title title-primary">
                                            <b>{{ ucfirst($i->nombre) }}</b></span></a>
                                        <p class="text-muted">{{ $i->descripcion }}</p>
                                        <div class="desc">
                                            @for ($j=0; $j<3; $j++)
            			                    <div class="desc__box-icon">
            			                        <h4>{{ $i->caracteristicas[$j]->nombre }}</h4>
            			                        <div>
            			                           <img src="{{ asset('images/'.$i->caracteristicas[$j]->icono) }}" alt="">
            			                           <span>{{ $i->caracteristicas[$j]->pivot->cantidad }} {{ ($i->caracteristicas[$j]->nombre == 'Area')? 'Mts':'' }}</span>
            			                        </div>
            			                    </div>
                                            @endfor
                                        </div>
                                        <div class="price">
                                            <h4>Para {{ $i->tipo_servicio->descripcion }}</h4>
                                            <span>$ {{ number_format($i->valor) }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <h6 class="text-muted">No hay resultados...</h6>
                    @endif
                </div>
                <div class="row center">
                    {{ $servicio->links() }}
                </div>
            </div>
            <div class="col s12 m4">
                <h5 style="margin: 0 0 2rem;">Tipo de Inmueble</h5>
                <ul>
                    @foreach ($tiposIn as $ti)
                    <li><a class="text-muted" href="/property/type/{{ strtolower($ti->descripcion) }}">{{ $ti->descripcion }}</a></li>
                    @endforeach
                </ul>
                <h5 style="margin: 2rem 0 2rem;">Otros Inmuebles</h5>
                @if (!$other->isEmpty())
                    @foreach ($other as $ot)
                        <div class="card hoverable">
                            @if ($ot->oferta == 1)
                            <span class="badge">OFERTA</span>
                            @endif
                            <div class="card-image">
                                <img src="{{ ($ot->imagen == 'default.jpg')? asset('storage/propertys/'. $ot->imagen) : asset('storage/'. $ot->imagen) }}">
                                <a href="/property/{{ $ot->id }}" class="btn-floating pulse halfway-fab waves-effect waves-light red">
                                    <i class="material-icons">near_me</i>
                                </a>
                            </div>
                            <div class="card-content">
                                <a href="/property/{{ $ot->id }}">
                                    <span class="card-title title-primary"><b>{{ ucfirst($ot->nombre) }}</b></span></a>
                                <p class="text-muted">{{ ucfirst($ot->descripcion)}}</p>
                                <div class="desc">
                                    @for ($j=0; $j<3; $j++)
                                    <div class="desc__box-icon">
                                        <h4>{{ $ot->caracteristicas[$j]->nombre }}</h4>
                                        <div>
                                           <img src="{{ asset('images/'.$ot->caracteristicas[$j]->icono) }}" alt="">
                                           <span>{{ $ot->caracteristicas[$j]->pivot->cantidad }} {{ ($ot->caracteristicas[$j]->nombre == 'Area')? 'Mts':'' }}</span>
                                        </div>
                                    </div>
                                    @endfor
                                </div>
                                <div class="price">
                                    <h4>Para {{ $ot->tipo_servicio->descripcion }}</h4>
                                    <span>$ {{ number_format($ot->valor) }}</span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <h6 class="text-muted">No hay resultados...</h6>
                @endif

            </div>
        </div>
    </div>
</section>
@endsection
