<header>
    <nav>
        <div class="container">
            <div class="nav-wrapper">
                <a href="/" class="brand-logo"><img width="150" src="{{ asset('images/logo.png') }}" alt=""></a>
                <a href="#" data-activates="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="/">Inicio</a></li>
                    <li><a href="/acerca">Acerca</a></li>
                    @if (isset($servicios_menu))
                    <li>
                        <a class="dropdown-button" href="#!" data-activates="dropdown1">Servicios
                            <i class="material-icons right">arrow_drop_down</i>
                        </a>
                    </li>
                    @endif
                    <li><a href="/contacto">Contáctenos</a></li>
                </ul>
            </div>
      </div>
    </nav>
    <ul class="sidenav sidenav-fixed" id="slide-out" style="transform: translateX(-100%);">
        <li><a href="/">Inicio</a></li>
        <li><a href="/acerca">Acerca</a></li>
        @if (isset($servicios_menu))
        <li>
            <ul class="collapsible collapsible-accordion">
                <li class="bold">
                    <a class="collapsible-header waves-effect" tabindex="0">Servicios</a>
                    <div class="collapsible-body">
                        <ul>
                             @foreach ($servicios_menu as $s)
                                <li><a href="{{ ($s->descripcion != 'Proyecto')? '/servicios/'.strtolower($s->descripcion) : '#'}}">{{ ucfirst($s->descripcion) }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </li>
            </ul>
        </li>
        @endif
        <li><a href="/contacto">Contáctenos</a></li>
    </ul>
    <!-- Dropdown Structure -->
    @if (isset($servicios_menu))
    <ul id="dropdown1" class="dropdown-content">
        @foreach ($servicios_menu as $s)
            <li><a href="{{ ($s->descripcion != 'Proyecto')? '/servicios/'.strtolower($s->descripcion) : '#'}}">{{ ucfirst($s->descripcion) }}</a></li>
        @endforeach
    </ul>
    @endif
</header>
