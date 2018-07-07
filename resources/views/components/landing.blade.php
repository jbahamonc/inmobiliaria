@component('components.header', ['servicios_menu' => $servicios_menu])
    <strong>Whoops!</strong> Something went wrong!
@endcomponent
<div class="slider fullscreen slider-full">
    <ul class="slides">
        @if (count($promo) > 0)
            @foreach ($promo as $p)
                <li>
                    <img src="{{ ($p->imagen == 'default.jpg')? asset('images/'. $p->imagen) : asset('storage/'. $p->imagen) }}">
                    <div class="caption">
                        @if ($p->oferta == 1)
                        <span class="badge">Oferta</span>
                        @endif
                        <h3 class="title-primary"><a href="property/{{ $p->id }}">{{ ucfirst($p->nombre) }}</a></h3>
                        <p class="truncate">{{ $p->descripcion }}</p>
                        @if ( $p->caracteristicas->count() > 0 )
                            <div class="desc">
                                @for ($j=0; $j < 3; $j++)
                                <div class="desc__box-icon">
                                    <h4>{{ $p->caracteristicas[$j]->nombre }}</h4>
                                    <div>
                                       <img src="{{ asset('images/'.$p->caracteristicas[$j]->icono) }}" alt="">
                                       <span>{{ $p->caracteristicas[$j]->pivot->cantidad }} {{ ($p->caracteristicas[$j]->nombre == 'Area')? 'Mts':'' }}</span>
                                    </div>
                                </div>
                                @endfor
                            </div>
                        @endif
                        <div class="price">
                            <h4>Para {{ $p->tipo_servicio->descripcion }}</h4>
                            <span>$ {{ number_format($p->valor) }}</span>
                           <a href="property/{{ $p->id }}" title="Mas información" class="btn-floating pulse btn-large waves-effect waves-light red right"><i class="material-icons">near_me</i></a>
                        </div>
                    </div>
                </li>
            @endforeach
        @endif
        <li>
            <img src="{{ asset('images/inmobiliaria.jpg') }}" alt="">
        </li>
    </ul>
</div>
