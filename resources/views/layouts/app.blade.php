
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <!--<link rel="icon" type="image/png" href="../assets/img/favicon.png">-->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    @yield('title', 'SOMALI | Soluciones con Materiales Livianos S.A. de C.V.')
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="{{ asset ('/css/material-kit.css?v=2.0.5') }}" rel="stylesheet"/>
  
</head>

<body class="@yield('body-class')">
  <nav class="navbar bg-light navbar-color-on-scroll fixed-top navbar-expand-lg scrolling-navbar" color-on-scroll="100" id="sectionsNav">
    <div class="container">
      <div class="navbar-translate">
        <a class="navbar-brand" href="/">
          <img src="{{asset('/img/logo.png')}}" width="200" height="50" class="d-inline-block align-top img-fluid" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="sr-only">Toggle navigation</span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse">
        <ul class="navbar-nav ml-auto">
          
          @guest
          <li class="nav-item">
            <a class="nav-link">
              SOMALI
            </a>
          </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('catalogs') }}">{{ __('Catálogo') }}</a>
            </li>
            
            <li class="dropdown nav-item">
              <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                Proyectos
              </a>
              <div class="dropdown-menu dropdown-with-icons">
                <a class="nav-link" href="#">Comisión Federal de Electricidad</a>
                <a class="nav-link" href="#">Sector Comercial</a>
                <a class="nav-link" href="#">Sector Residencial</a>
              </div>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="{{ route('consortium') }}">
                {{ __('Consorcios') }}
              </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('contact') }}">{{ __('Contacto') }}</a>
            </li>

            <li class="dropdown nav-item">
              <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                <i class="material-icons">account_box</i>
              </a>
              <div class="dropdown-menu dropdown-with-icons">
                <a class="nav-link" href="{{ route('login') }}">{{ __('Ingresar') }}</a>
                <a class="nav-link" href="{{ route('register') }}">{{ __('Registro') }}</a>
              </div>
            </li>

          <li class="nav-item">
            <button class="btn btn-success btn-round" type="button">
              <i class="fa fa-phone"></i>&nbsp;33 31050693
            </button>
          </li> 


          @else
          <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
              {{ Auth::user()->name }} <span class="caret"></span>
            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                  {{ __('Cerrar sesión') }}
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
              </form>
            </div>
          </li>
          @endguest
        </ul>
      </div>
    </div>
  </nav>

  <div class="wrapper">
    @yield('content')
  </div>


</body>
    <!-- Pluggins -->
    <!--   Core JS Files   -->
    <script src="{{ asset ('/js/jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset ('/js/bootstrap.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset ('/js/material.min.js') }}"></script>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

    <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <script src="{{ asset ('/js/nouislider.min.js') }}" type="text/javascript"></script>

    <!--  Plugin for the Datepicker, full documentation here: http://www.eyecon.ro/bootstrap-datepicker/ -->
    <script src="{{ asset ('/js/bootstrap-datepicker.js') }}" type="text/javascript"></script>

    <!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
    <script src="{{ asset ('/js/material-kit.js') }}" type="text/javascript"></script>

            <!--   Core JS Files   -->
    <script src="{{ asset('/js/core/jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('/js/core/popper.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('/js/core/bootstrap-material-design.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('/js/plugins/moment.min.js') }}"></script>
    <!--  Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
    <script src="{{ asset('/js/plugins/bootstrap-datetimepicker.js') }}" type="text/javascript"></script>
    <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <script src="{{ asset('/js/plugins/nouislider.min.js') }}" type="text/javascript"></script>
    <!--  Google Maps Plugin    -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    <!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
    <script src="{{ asset('/js/material-kit.js?v=2.0.5') }}" type="text/javascript"></script>
</html>
