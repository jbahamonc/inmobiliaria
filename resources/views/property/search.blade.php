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
            <div class="title-fullwidth">
                <h1 class="no-margin title title-secundary">Resultados de la Búsqueda</h1>
                <h5 class="">{{ $data->count() }}</h5>
                <p class="no-margin">Inmuebles</p>
            </div>
            <div class="row">
                @if ($data->count() > 0)
                    @foreach ($data as $d)
                        <div class="col s12 l6">
                            <div class="card horizontal hoverable">
                                @if ($d->oferta == 1)
        			      		<span class="badge">Oferta</span>
                                @endif
                                <div class="card-image">
                                    <img src="{{ ($d->imagen == 'default.jpg')? asset('storage/propertys/'.$d->imagen) : asset('storage/'.$d->imagen) }}">
                                </div>
                                <div class="card-stacked">
                                    <div class="card-content">
                                        <a href="/property/{{ $d->id }}">
                                            <span class="card-title title-primary truncate">
                                                <b>{{ ucfirst($d->nombre) }}</b>
                                            </span>
                                        </a>
                                        <div class="desc no-margin">
                                            @for ($j=0; $j<3; $j++)
            			                    <div class="desc__box-icon">
            			                        <h4>{{ $d->caracteristicas[$j]->nombre }}</h4>
            			                        <div>
            			                           <img src="{{ asset('images/'.$d->caracteristicas[$j]->icono) }}" alt="">
            			                           <span>{{ $d->caracteristicas[$j]->pivot->cantidad }} {{ ($d->caracteristicas[$j]->nombre == 'Area')? 'Mts':'' }}</span>
            			                        </div>
            			                    </div>
                                            @endfor
            			                </div>
                                    </div>
                                    <div class="card-action">
                                        <a href="/property/{{ $d->id }}">mas información</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <h5 class="text-muted">No hay resultados para la búsqueda seleccionada...</h5>
                @endif
            </div>
        </div>
    </div>
@endsection
