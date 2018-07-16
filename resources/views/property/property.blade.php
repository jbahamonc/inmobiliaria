@extends('layout.app')

@section('title')
{{ ucfirst($title) }} - Inmobiliaria Purpura
@endsection

@section('landing')
    @if (!$no_landing)
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
		<div class="title-property">
			<div class="info-property">
				<h1 class="title-primary">{{ ucfirst($property->nombre) }}</h1>
				<p class="text-muted no-margin">{{ $property->ubicacion }}</p>
                <span class="text-muted">Tipo de Inmueble: {{ $property->tipo_inmueble->descripcion }}</span>
			</div>
			<div class="price">
                <h4>{{ $property->tipo_servicio->descripcion }}</h4>
                <span>$ {{ number_format($property->valor) }}</span>
            </div>
		</div>
        @if (!$property->imagenes->isEmpty())
    		<div class="slider slider-mini">
    		    <ul class="slides">
                    @foreach ($property->imagenes as $img)
    		      	<li>
    		        	<img src="{{ asset('storage/'. $img->nombre) }}">
    		      	</li>
                    @endforeach
    		    </ul>
    		</div>
        @endif
		<div class="row content-property">
			<div class="col s12 m7 l8" >
				<ul class="collection with-header shadow" style="border: 0;">
			        <li class="collection-header inline">
			        	<div>
				        	<h4 class="truncate">
				        		<a href="" class="title-primary">{{ ucfirst($property->nombre) }}</a>
				        	</h4>
				        	<p class="text-muted no-margin">{{ $property->ubicacion }}</p>
				        </div>
			        	<div class="shared hide">
			        		<div class="fixed-action-btn direction-left click-to-toggle" >
							    <a class="btn-floating">
							      <i class="material-icons">share</i>
							    </a>
							    <ul>
							        <li>
                                        <a href="http://www.facebook.com/sharer.php?u={{ url()->current() }}" class="btn-floating center">
                                           <img src="{{ asset('images/facebook.png') }}" alt="">
                                        </a>
                                    </li>
							    </ul>
							</div>
			        	</div>
			        </li>
			        <li class="collection-item no-border">
						<div class="desc">
                            @foreach ($property->caracteristicas as $c)
                            <div class="desc__box-icon">
                                <h4>{{ $c->nombre }}</h4>
                                <div>
                                   <img src="{{ asset('images/'.$c->icono) }}" alt="">
                                   <span>{{ $c->pivot->cantidad }} {{ ($c->nombre == 'Area')? 'Mts':'' }}</span>
                                </div>
                            </div>
                            @endforeach
		                </div>
			        </li>
			        <li class="collection-item no-border">
			        	<h4 class="title-secundary"><b>Descripcion</b></h4>
						<p class="text-muted">{{ ($property->descripcion != '')? $property->descripcion:'' }}</p>
			        </li>
					<li class="collection-item no-border">
			        	<h4 class="title-secundary"><b>Detalle Adicionales</b></h4>
						<ul class="features">
                            @if ($property->detalle_adicionales->count() > 0)
                                @foreach ($property->detalle_adicionales as $da)
    							<li>
    								<i class="material-icons title-secundary">check</i>
    								<span class="text-muted">{{ ucfirst($da->descripcion) }}</span>
    							</li>
                                @endforeach
                            @else
                                <li>
                                    <span class="text-muted">No hay detalles adicionales</span>
                                </li>
                            @endif
						</ul>
			        </li>
					<li class="collection-item no-border">
						<h4 class="title-secundary"><b>Imagenes del Inmueble</b></h4>
                            @if (!$property->imagenes->isEmpty())
                                <div class="row gallery">
            							@foreach ($property->imagenes as $img)
            							<div class="col s3">
            								<div class="material-placeholder">
            									<img class="materialboxed responsive-img" width="250" src="{{ asset('storage/'. $img->nombre) }}">
            								</div>
            							</div>
                                        @endforeach
        						</div>
                            @else
                                <span class="text-muted">No hay imagenes</span>
                            @endif
					</li>
			    </ul>
				<section>
					<h5 style="margin: 2rem 0 2rem;">Otros Inmuebles</h5>
					<div class="row">
						@foreach ($other_property as $op)
							<div class="col s12 l6">
						      	<div class="card hoverable">
                                    @if ($op->oferta == 1)
    								<span class="badge">OFERTA</span>
                                    @endif
						        	<div class="card-image">
						          		<img src="{{ ($op->imagen == 'default.jpg')? asset('storage/propertys/'. $op->imagen) : asset('storage/'. $op->imagen) }}">
						          		<a href="/property/{{ $op->id }}" class="btn-floating pulse halfway-fab waves-effect waves-light red">
											<i class="material-icons">arrow_forward</i>
										</a>
						        	</div>
						        	<div class="card-content">
						        		<a href="/property/{{ $op->id }}"><span class="card-title title-primary">
                                            <b>{{ ucfirst($op->nombre) }}</b></span>
                                        </a>
						          		<p class="text-muted">{{ $op->descripcion }}</p>
						          		<div class="desc">
                                            @for ($j=0; $j<3; $j++)
            			                    <div class="desc__box-icon">
            			                        <h4>{{ $op->caracteristicas[$j]->nombre }}</h4>
            			                        <div>
            			                           <img src="{{ asset('images/'.$op->caracteristicas[$j]->icono) }}" alt="">
            			                           <span>{{ $op->caracteristicas[$j]->pivot->cantidad }} {{ ($op->caracteristicas[$j]->nombre == 'Area')? 'Mts':'' }}</span>
            			                        </div>
            			                    </div>
                                            @endfor
						                </div>
						                <div class="price">
                                            <h4>Para {{ $op->tipo_servicio->descripcion}}</h4>
    										<span>$ {{ number_format($op->valor) }}</span>
						                </div>
						        	</div>
						      	</div>
						    </div>
						@endforeach
					</div>
				</section>
			</div>
			<div class="col s12 m5 l4" >
				<div class="card" style="margin-top: 0;">
					<div class="card-content">
						<div class="center icon-contact"><i class="material-icons">contact_phone</i></div>
						<h6 class="title-primary center">Información de Contacto</h6>
						<ul class="collection contact">
							<li class="collection-item">
								<div>Correo<span class="secondary-content">contacto@inmobiliariapurpura.com</span></div>
							</li>
							<li class="collection-item">
								<div>Oficina<span class="secondary-content">333-333-333</span></div>
							</li>
							<li class="collection-item">
								<div>Whatsapp<span class="secondary-content">333-333-333</span></div>
							</li>
						</ul>
					</div>
					<button data-target="modal1" class="btn btn-block btn-large no-shadow modal-trigger">contactar asesor</button>
				</div>
				<h5 style="margin: 2rem 0 2rem;">Inmuebles Similares</h5>
				<div class="row">
					@foreach ($similar as $sm)
						<div class="col s12">
							<div class="card hoverable">
                                @if ($sm->oferta == 1)
								<span class="badge">OFERTA</span>
                                @endif
								<div class="card-image">
									<img src="{{ ($sm->imagen == 'default.jpg')? asset('storage/propertys/'. $sm->imagen) : asset('storage/'. $sm->imagen) }}">
									<a href="/property/{{ $sm->id }}" class="btn-floating pulse halfway-fab waves-effect waves-light red">
										<i class="material-icons">arrow_forward</i>
									</a>
								</div>
								<div class="card-content">
									<a href="property/{{ $sm->id }}"><span class="card-title title-primary">
                                        <b>{{ ucfirst($sm->nombre) }}</b></span></a>
									<p class="text-muted">{{ $sm->descripcion }}</p>
									<div class="desc">
                                        @for ($j=0; $j<3; $j++)
        			                    <div class="desc__box-icon">
        			                        <h4>{{ $sm->caracteristicas[$j]->nombre }}</h4>
        			                        <div>
        			                           <img src="{{ asset('images/'.$sm->caracteristicas[$j]->icono) }}" alt="">
        			                           <span>{{ $sm->caracteristicas[$j]->pivot->cantidad }} {{ ($sm->caracteristicas[$j]->nombre == 'Area')? 'Mts':'' }}</span>
        			                        </div>
        			                    </div>
                                        @endfor
									</div>
									<div class="price">
										<h4>Para {{ $sm->tipo_servicio->descripcion}}</h4>
										<span>$ {{ number_format($sm->valor) }}</span>
									</div>
								</div>
							</div>
						</div>
					@endforeach
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</section>
<!-- Modal Request -->
<div id="modal1" class="modal modal-fixed-footer">
    <form id="frm_request">
        <div class="modal-content">
            <h4>Información de Contacto</h4>
            <p><b>Nota: </b>Al término de unos días, un asesor se contactara con usted.</p>
            <p>Campos obligatorios <span style="color: red">*</span></p>
            <div class="row" style="margin-bottom: 0">
                <input type="hidden" name="property_id" value="{{ $property->id }}">
                <div class="row" style="margin-bottom: 0">
                    <div class="input-field col s12 m6">
                        <input id="first_name" name="name_user" type="text" class="validate" required>
                        <label for="first_name" class="active">Nombres y Apellidos <span style="color: red">*</span></label>
                        <span class="helper-text" data-error="Información requerida" data-success="ok"></span>
                    </div>
                    <div class="input-field col s12 m6">
                        <input id="phone" type="number" name="phone" class="validate" required>
                        <label for="phone" class="active">Teléfono <span style="color: red">*</span></label>
                        <span class="helper-text" data-error="Información requerida" data-success="ok"></span>
                    </div>
                    <div class="input-field col s12">
                        <input id="address" type="text" name="address" class="validate" required>
                        <label for="address" class="active">Dirección de Residencia <span style="color: red">*</span></label>
                        <span class="helper-text" data-error="Información requerida" data-success="ok"></span>
                    </div>
                    <div class="input-field col s12">
                        <textarea id="textarea1" name="mensaje" class="materialize-textarea"></textarea>
                        <label for="textarea1">Información adicional</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <div class="preloader-content hide">
                <div class="preloader-wrapper small active">
                    <div class="spinner-layer spinner-green-only">
                        <div class="circle-clipper left">
                            <div class="circle"></div>
                        </div>
                        <div class="gap-patch">
                            <div class="circle"></div>
                        </div>
                        <div class="circle-clipper right">
                            <div class="circle"></div>
                        </div>
                    </div>
                </div>
                <span>Enviado Información...</span>
            </div>
            <button type="button" id="btn_request" class="waves-effect btn-flat">enviar información</button>
        </div>
    </form>
</div>
@endsection
