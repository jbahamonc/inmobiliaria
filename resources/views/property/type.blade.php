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
<section class="property section">
    <div class="container">
        <div class="row">
            <div class="col s12 m4 push-m8">
                <h5 style="margin: 0 0 2rem;">Tipo de Inmueble</h5>
                <ul>
                    @foreach ($tiposIn as $ti)
                    <li>
                        <a class="text-muted" href="/property/type/{{ strtolower($ti->descripcion) }}">
                            {{ ucfirst($ti->descripcion) }}
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>
            <div class="col s12 m8 pull-m4">
                <div class="row">
                    <h1 class="title-type" style="margin-top:0;">{{ $title }}</h1>
                        @if (!$inmuebles->isEmpty())
                            @foreach ($inmuebles as $i)
                            <div class="col s12">
                                <div class="card horizontal inline hoverable">
                                    @if ($i->oferta == 1)
                                    <span class="badge">Oferta</span>
                                    @endif
                                    <div class="card-image">
                                        <img src="{{ ($i->imagen == 'default.jpg')? asset('storage/propertys/'. $i->imagen) : asset('storage/'. $i->imagen) }}">
                                    </div>
                                    <div class="card-stacked">
                                        <div class="card-content">
                                            <div class="desc_property">
                                                <a href="/property/{{ $i->id }}">
                                                    <span class="card-title title-primary truncate">
                                                        <b>{{ ucfirst($i->nombre) }}</b>
                                                    </span>
                                                </a>
                                                <div class="desc no-margin">
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
                                            </div>
                                            <div class="price_property hide-on-med-and-down">
                                                <div class="price">
                    			                    <h4>Para {{ $i->tipo_servicio->descripcion }}</h4>
                    			                    <span>$ {{ number_format($i->valor) }}</span>
                    			                </div>
                                            </div>
                                        </div>
                                        <div class="card-action">
                                            <a href="/property/{{ $i->id }}">mas información</a>
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
                    {{ $inmuebles->links() }}
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
