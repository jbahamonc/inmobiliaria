<header>
    <nav>
        <div class="container">
         <div class="nav-wrapper">
            <a href="/" class="brand-logo"><img src="{{ asset('images/logo.png') }}" alt=""></a>
            <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
                <li><a href="">Inicio</a></li>
                <li><a href="">Acerca</a></li>
                <li>
                    <a class="dropdown-button" href="#!" data-activates="dropdown1">Servicios
                        <i class="material-icons right">arrow_drop_down</i>
                    </a>
                </li>
                <li><a href="/contacto">Contáctenos</a></li>
            </ul>
         </div>
      </div>
    </nav>
    <!-- Dropdown Structure -->
    <ul id="dropdown1" class="dropdown-content">
       <li><a href="/servicios/arriendos">Arriendos</a></li>
       <li><a href="/servicios/ventas">Ventas</a></li>
    </ul>
    <ul class="sidenav" id="mobile-demo">
        <li><a href="sass.html">Sass</a></li>
        <li><a href="badges.html">Components</a></li>
        <li><a href="collapsible.html">Javascript</a></li>
        <li><a href="mobile.html">Mobile</a></li>
    </ul>
</header>
