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
        <title>Inicio de Sesión</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!-- Styles App -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col m6 offset-m3">
                        <div class="card">
                            <div class="card-content">
                                <span class="card-title center">Inicio de Sesión</span>
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input id="user" type="text" name="user" class="validate {{ $errors->has('user') ? 'invalid' : '' }}"  value="{{ old('user') }}" required>
                                            <label for="user">Usuario o Correo</label>
                                            @if ($errors->has('user'))
                                                <span class="helper-text" data-error="{{ $errors->first('user') }}" data-success="ok"></span>
                                            @else
                                                <span class="helper-text" data-error="El campo es requerido" data-success="ok"></span>
                                            @endif
                                        </div>
                                        <div class="input-field col s12">
                                            <input id="password" type="password" name="password" class="validate {{ $errors->has('password') ? 'invalid' : '' }}"  value="{{ old('password') }}" required>
                                            <label for="password">Contraseña</label>
                                            @if ($errors->has('password'))
                                                <span class="helper-text" data-error="{{ $errors->first('password') }}" data-success="ok"></span>
                                            @else
                                                <span class="helper-text" data-error="El campo es requerido" data-success="ok"></span>
                                            @endif
                                        </div>
                                        <div class="input-field col s12">
                                            <div class="col-md-8 offset-md-4">
                                                <button type="submit" class="btn btn-block">
                                                    Iniciar Sesión
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
