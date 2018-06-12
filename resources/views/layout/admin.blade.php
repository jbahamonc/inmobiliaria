<!doctype html>
<html lang="{{ app()->getLocale() }}">
   <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>@yield('title')</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!-- Styles App -->
        <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
   </head>
   <body class="admin">
        <header class="admin-panel">
            <nav>
                <div class="nav-wrapper">
                    <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
                    <ul class="right">
                        <li>
                            <form action="/logout" method="post">
                                {{ csrf_field() }}
                                <button class="btn-flat" style="height: 100%; display: block; color: rgb(255, 255, 255);"><i class="material-icons">exit_to_app</i></button>
                            </form>
                        </li>
                    </ul>
                </div>
            </nav>
            <ul id="slide-out" class="sidenav fixed" style="transform: translateX(0px);">
                <li>
                    <div class="user-view">
                        <div class="background">
                            <img src="{{ asset('images/bg_admin.jpg') }}" class="responsive-img">
                        </div>
                        <a><img src="{{ asset('images/logo.png') }}" class="circle"></a>
                        <a><span class="white-text name"></span></a>
                        <a><span class="white-text email">Panel de Administracion</span></a>
                    </div>
                </li>
                <li>
                    <a href="/admin/inmuebles"><i class="material-icons">store</i>Inmuebles</a>
                </li>
                <li>
                    <a href="/admin/configuracion"><i class="material-icons">perm_data_setting</i>Configuración</a>
                </li>
                <li>
                    <a href="/admin/solicitudes"><i class="material-icons">mail_outline</i>Solicitudes</a>
                </li>
            </ul>
        </header>
        <main>
            @yield('section')
        </main>
       <script src="{{asset('/js/admin.js')}}"></script>
   </body>
</html>
