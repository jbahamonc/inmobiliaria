<header>
    <nav>
        <div class="container">
            <div class="nav-wrapper">
                <a href="/" class="brand-logo"><img src="{{ asset('images/logo.png') }}" alt=""></a>
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
    <ul class="sidenav" id="slide-out">
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
    <!-- Dropdown Structure -->
    @if (isset($servicios_menu))
    <ul id="dropdown1" class="dropdown-content">
        @foreach ($servicios_menu as $s)
            <li><a href="{{ ($s->descripcion != 'Proyecto')? '/servicios/'.strtolower($s->descripcion) : '#'}}">{{ ucfirst($s->descripcion) }}</a></li>
        @endforeach
    </ul>
    @endif
    <ul class="sidenav" id="mobile-demo">
        <li><a href="sass.html">Sass</a></li>
        <li><a href="badges.html">Components</a></li>
        <li><a href="collapsible.html">Javascript</a></li>
        <li><a href="mobile.html">Mobile</a></li>
    </ul>
</header>
