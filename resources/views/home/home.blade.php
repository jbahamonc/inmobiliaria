@extends('layout.app')

@section('title', 'Inmobiliaria Purpura - Home')

@section('landing')
    @if (!$no_landing)
        @component('components.landing', [
            'inmuebles' => $inmuebles,
            'servicios_menu' => $servicios_menu,
            'promo' => $promo])

            no salio
        @endcomponent
    @else
        @component('components.landing-mini', ['servicios_menu' => $servicios_menu])
            no salio
        @endcomponent
    @endif
@endsection

@section('content')
    <section class="inmuebles section">
    	<div class="container">
    		<div class="row">
    			<p class="center no-margin title-secundary">Ultimas</p>
    			<h3 class="center no-margin">Propiedades</h3>
    			<p class="center text-muted">Ven, conoce nuestras ultimas propiedades que tenemos para ofrecerte</p>
    		</div>
    		<div class="row">
                @foreach ($inmuebles as $key => $i)
    			    <div class="col s12 m6 l4">
    			      	<div class="card hoverable">
                            @if ($i->oferta == 1)
    			      		<span class="badge">Oferta</span>
                            @endif
    			        	<div class="card-image">
    			          		<img src="{{ ($i->imagen == 'default.jpg')? asset('images/'. $i->imagen) : asset('storage/'. $i->imagen) }}">
    			          		<a href="property/{{ $i->id }}" class="btn-floating pulse btn-large halfway-fab waves-effect waves-light red"><i class="material-icons">near_me</i></a>
    			        	</div>
    			        	<div class="card-content">
    			        		<a href="property/{{ $i->id }}">
                                    <span class="card-title title-primary truncate">
                                        <b>{{ ucfirst($i->nombre) }}</b>
                                    </span>
                                </a>
    			          		<p class="text-muted">{{ $i->descripcion }}</p>
                                @if ( $i->caracteristicas->count() > 0 )
        			          		<div class="desc">
                                        @for ($j=0; $j < 3; $j++)
            			                    <div class="desc__box-icon">
            			                        <h4>{{ $i->caracteristicas[$j]->nombre }}</h4>
            			                        <div>
            			                           <img src="{{ asset('images/'.$i->caracteristicas[$j]->icono) }}" alt="">
            			                           <span>{{ $i->caracteristicas[$j]->pivot->cantidad }} {{ ($i->caracteristicas[$j]->nombre == 'Area')? 'Mts':'' }}</span>
            			                        </div>
            			                    </div>
                                        @endfor
        			                </div>
                                @endif
    			                <div class="price">
    			                    <h4>Para {{ $i->tipo_servicio->descripcion }}</h4>
    			                    <span>$ {{ number_format($i->valor) }}</span>
    			                </div>
    			        	</div>
    			      	</div>
    			    </div>
                @endforeach
		  	</div>
            <div class="row center">
                {{ $inmuebles->links() }}
            </div>
    	</div>
    </section>
    <section class="contact section">
    	<div class="container">
    		<div class="row">
    			<p class="center flow-text white-text"><b>CONTACTANOS</b></p>
    			<h3 class="center no-margin white-text">Y hagamos realidad su proyecto.</h3>
    		</div>
			<div class="row center">
				<a href="/contacto" class="waves-effect waves-light btn-large"><i class="material-icons right">contact_mail</i>contactanos</a>
			</div>
    	</div>
    </section>
@endsection
