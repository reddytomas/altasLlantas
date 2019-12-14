<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Fuentes y nuestro stylesheet -->
    <link href="https://fonts.googleapis.com/css?family=Ceviche+One|Sedgwick+Ave|Sedgwick+Ave+Display&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Playfair+Display|Raleway|Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css">
    <!-- Scripts -->
    <<script type="module" src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule="" src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons/ionicons.js"></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="css/index.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav d-flex justify-content-around">
                          <a href="/home"  class="text-dark mr-3" id="_altasllantasfooter">Altas Llantas</a>
                          <a class="nav-item nav-link " href="/home">Home <span class="sr-only">(current)</span></a>
                          <a class="nav-item nav-link" href="/items">Productos</a>
                          <a class="nav-item nav-link" href="/faq">FAQ</a>
                          <a class="nav-item nav-link" href="/contacto">Contacto</a>


                        </div>

                    </ul>

                    <!-- Right Side Of Navbar -->

                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Cerrar Sesión') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            <ul class="_perfilList">
                              <a class="nav-item nav-link"href="/perfil/{{auth()->user()->id}}" id="iniciar"><li><i class="fas fa-user-circle fa-2x"></i></li></a>
                              <a class="btn btn-primary btn-lg" href="/carritodecompras" role="button"><li><i class="fas fa-shopping-cart"></i></li></a>


                            </ul>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
  <script src="{{asset('js/master.js')}}"></script>
</body>
<footer class="bg-light w-100">
  <p class="text-center" id="_altasllantasfooter">Altas Llantas</p>
  <ul class="list-unstyled list-group-horizontal d-flex justify-content-around ">
    <li><a href=""><i class="fab fa-instagram fa-2x "></i></a></li>
    <li><a href=""><i class="fab fa-facebook-square fa-2x"></i></a></li>
    <li><a href=""><i class="fab fa-twitter-square fa-2x"></i></a></li>
  </ul>
  <div id="volverArriba"class="text-center text-dark"><a href="#" class="">Volver arriba</a></div>

</footer>
</html>
