<!doctype html>
<html lang="{{ app()->getLocale() }}">
   <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!-- Styles App -->
        <link rel="stylesheet" href="/css/app.css">
   </head>
   <body>
    @if (!isset($no_landing))
        @component('components.landing')
            no salio
        @endcomponent
    @else
        @component('components.landing-mini')
            no salio
        @endcomponent
    @endif
    <main class="{{ !isset($no_landing)? 'full' : '' }}">
        @if (isset($search) && $search)
            <section class="search">
                <div class="container">
                   <form action="/property/search" class="search__form" method="post">
                       {{ csrf_field() }}
                      <div class="search__fields">
                         <div class="search__fields__option">
                            <label for="">Main Location</label>
                            <div class="input-field no-m-t">
                               <select>
                                  <option value="" disabled selected>Any</option>
                                  <option value="1">Option 1</option>
                                  <option value="2">Option 2</option>
                                  <option value="3">Option 3</option>
                               </select>
                            </div>
                         </div>
                         <div class="search__fields__option">
                            <label for="">Main Location</label>
                            <div class="input-field no-m-t">
                               <select>
                                  <option value="" disabled selected>Any</option>
                                  <option value="1">Option 1</option>
                                  <option value="2">Option 2</option>
                                  <option value="3">Option 3</option>
                               </select>
                            </div>
                         </div>
                         <div class="search__fields__option">
                            <label for="">Main Location</label>
                            <div class="input-field no-m-t">
                               <select>
                                  <option value="" disabled selected>Any</option>
                                  <option value="1">Option 1</option>
                                  <option value="2">Option 2</option>
                                  <option value="3">Option 3</option>
                               </select>
                            </div>
                         </div>
                      </div>
                      <div class="search__fields">
                         <div class="search__fields__option">
                            <label for="">Main Location</label>
                            <div class="input-field no-m-t">
                               <select>
                                  <option value="" disabled selected>Any</option>
                                  <option value="1">Option 1</option>
                                  <option value="2">Option 2</option>
                                  <option value="3">Option 3</option>
                               </select>
                            </div>
                         </div>
                         <div class="search__fields__option">
                            <label for="">Main Location</label>
                            <div class="input-field no-m-t">
                               <select>
                                  <option value="" disabled selected>Any</option>
                                  <option value="1">Option 1</option>
                                  <option value="2">Option 2</option>
                                  <option value="3">Option 3</option>
                               </select>
                            </div>
                         </div>
                         <div class="search__fields__option">
                            <label for="">Main Location</label>
                            <div class="input-field no-m-t">
                               <select>
                                  <option value="" disabled selected>Any</option>
                                  <option value="1">Option 1</option>
                                  <option value="2">Option 2</option>
                                  <option value="3">Option 3</option>
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
                  <img src="{{ asset('images/logo.png') }}" alt="">
                  <h5 class="white-text">Lorem Ipsum</h5>
                  <p class="grey-text text-lighten-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum autem, ad, quis ratione voluptatem perspiciatis. Reprehenderit voluptates explicabo velit quia. Laborum ratione fuga incidunt nihil. Molestiae beatae quae earum, voluptatem!</p>
               </div>
               <div class="col l4 offset-l2 s12">
                  <h5 class="white-text">Lorem</h5>
                  <ul>
                     <li><a class="white-text" href="#!">Link 1</a></li>
                     <li><a class="white-text" href="#!">Link 2</a></li>
                     <li><a class="white-text" href="#!">Link 3</a></li>
                     <li><a class="white-text" href="#!">Link 4</a></li>
                  </ul>
               </div>
            </div>
         </div>
         <div class="footer-copyright">
            <div class="container">
               © 2014 Copyright Text
               <div class="social-icon right">
                  <a href="" class="btn btn-floating waves-effect waves-light"><img src="{{ asset('images/facebook.png') }}" alt=""></a>
                  <a href="" class="btn btn-floating waves-effect waves-light"><img src="{{ asset('images/instagram.png') }}" alt=""></a>
                  <a href="" class="btn btn-floating waves-effect waves-light"><img src="{{ asset('images/youtube.png') }}" alt=""></a>
               </div>
            </div>
         </div>
      </footer>
      <script src="{{asset('/js/app.js')}}"></script>
   </body>
</html>
