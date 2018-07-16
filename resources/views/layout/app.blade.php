<!doctype html>
<html lang="{{ app()->getLocale() }}">
   <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- Shared with Facebook -->
        <meta property="og:title" content="{{ isset($title)? ucfirst($title):'' }}" />
        <meta property="og:type" content="website" />
        <meta property="og:description" content="{{ isset($property->descripcion)? $property->descripcion:'' }}" />
        <meta property="og:image" content="{{ isset($property->imagen)? asset('images/'. $property->imagen) : '' }}" />
        <meta property="og:url" content="{{  url()->current() }}" />
        <title>@yield('title')</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!-- Styles App -->
        <link rel="stylesheet" href="/css/app.css">
   </head>
   <body>
    @yield('landing')
    <main class="{{ !$no_landing? 'full' : '' }}">
        @if (isset($search) && $search)
            <section class="search">
                <div class="container">
                   <form action="/property/search" class="search__form" method="post">
                       {{ csrf_field() }}
                      <div class="search__fields">
                         <div class="search__fields__option">
                            <label for="">Zona</label>
                            <div class="input-field no-m-t">
                               <select name="zona">
                                  <option value="Cualquiera" selected>Cualquiera</option>
                                  <option value="Norte">Norte</option>
                                  <option value="Sur">Sur</option>
                                  <option value="Oriente">Oriente</option>
                                  <option value="Occidente">Occidente</option>
                                  <option value="Centro">Centro</option>
                                  <option value="Centro">Nororiente</option>
                                  <option value="Centro">Noroccidente</option>
                                  <option value="Centro">Suroccidente</option>
                                  <option value="Centro">Suroriente</option>
                               </select>
                            </div>
                         </div>
                         <div class="search__fields__option">
                            <label for="">Gestión</label>
                            <div class="input-field no-m-t">
                               <select name="gestion">
                                  <option value="0" selected>Cualquiera</option>
                                  @foreach ($servicios_menu as $ms)
                                  <option value="{{ $ms->id }}">{{ ucfirst($ms->descripcion) }}</option>
                                  @endforeach
                               </select>
                            </div>
                         </div>
                         <div class="search__fields__option">
                            <label for="">Tipo Inmueble</label>
                            <div class="input-field no-m-t">
                               <select name="tipo_inmueble">
                                  <option value="0" selected>Cualquiera</option>
                                  @foreach ($m_tipo as $mt)
                                  <option value="{{ $mt->id }}">{{ ucfirst($mt->descripcion) }}</option>
                                  @endforeach
                               </select>
                            </div>
                         </div>
                      </div>
                      <div class="search__fields">
                         <div class="search__fields__option">
                            <label for="">Habitaciones</label>
                            <div class="input-field no-m-t">
                                <select name="habitaciones">
                                    <option value="0" selected>Cualquiera</option>
                                    @for ($i=1; $i <= 10; $i++)
                                        <option value="{{ $i }}">{{ $i }}</option>
                                    @endfor
                                </select>
                            </div>
                         </div>
                         <div class="search__fields__option">
                            <label for="">Baños</label>
                            <div class="input-field no-m-t">
                               <select name="baños">
                                    <option value="0" selected>Cualquiera</option>
                                    @for ($i=1; $i <= 10; $i++)
                                        <option value="{{ $i }}">{{ $i }}</option>
                                    @endfor
                                </select>
                            </div>
                         </div>
                         <div class="search__fields__option">
                            <label for="">Estrato</label>
                            <div class="input-field no-m-t">
                                <select name="estrato">
                                    <option value="0" selected>Cualquiera</option>
                                    @for ($i=1; $i <= 8; $i++)
                                        <option value="{{ $i }}">{{ $i }}</option>
                                    @endfor
                                </select>
                            </div>
                         </div>
                      </div>
                      <div class="search__fields">
                         <button type="submit" id="download-button" class="btn-large waves-effect waves-light">buscar</button>
                      </div>
                   </form>
                </div>
            </section>
        @endif
        @yield('content')
    </main>
    <footer class="page-footer section" style="padding-bottom: 0 !important;">
        <div class="container">
            <div class="row">
               <div class="col l6 s12">
                  <img width="150" src="{{ asset('images/logo.png') }}" alt="">
                  <h5 class="white-text">Inmobiliaria Púrpura</h5>
                  <p>Proporcionamos un servicio inmobiliario íntegro y profesional orientado a la construcción de buenas relaciones con nuestros clientes, beneficiando mutuamente cada uno de los intereses, superando siempre las expectativas, brindando calidad, seguridad y conformidad.</p>
               </div>
               <div class="col l4 offset-l2 s12">
                    <h5 class="white-text">Enlaces</h5>
                    <ul>
                        <li><a class="white-text" href="/">Inicio</a></li>
                        <li><a class="white-text" href="/acerca">Acerca</a></li>
                        <li><a class="white-text" href="/contacto">Contacto</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
               © 2018 Inmobiliaria Púrpura
               <div class="social-icon right">
                  <a href="https://www.facebook.com/Inmobiliaria-Purpura-608858469485980/" target="_blank" class="btn btn-floating waves-effect waves-light"><img src="{{ asset('images/facebook.png') }}" alt=""></a>
                  <a href="https://www.instagram.com/inmobiliariapurpura/" target="_blank" class="btn btn-floating waves-effect waves-light"><img src="{{ asset('images/instagram.png') }}" alt=""></a>
                  <a href="https://api.whatsapp.com/send?phone=573214849609" target="_blank" class="btn btn-floating waves-effect waves-light"><img src="{{ asset('images/whatsapp.png') }}" alt=""></a>
               </div>
            </div>
         </div>
        </footer>
        <script src="{{asset('/js/app.js')}}"></script>
        @if (session('sendmail'))
            <script>
                var session = '{{ session('sendmail') }}';
                Materialize.toast(session, 4000)
            </script>
        @endif
    </body>
</html>
