@extends('layouts.app')

@section('body-class', 'signup-page')

@section('content')
<div class="page-header header-filter" style="background-image: url('{{ asset('/img/index.png') }}'); background-size: cover; background-position: top center;">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6 ml-auto mr-auto">
          <div class="card card-login">
            <form class="form" method="POST" action="{{ route('register') }}">
              {{ csrf_field() }}
              <div class="card-header card-header-success text-center">
                <h4 class="card-title">Registro</h4>
                
              </div>
              <p class="description text-center">Complete sus datos</p>
              <div class="card-body">
                
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">face</i>
                    </span>
                  </div>
                  <input id="name" type="text" class="form-control" placeholder="Nombre" name="name" value="{{ old('name') }}" required autofocus />
                </div>

                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">mail</i>
                    </span>
                  </div>
                  <input id="email" type="email" placeholder="Correo electrónico"  class="form-control" name="email" value="{{ old('email') }}" required autofocus/>
                </div>

                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">lock_outline</i>
                    </span>
                  </div>
                  <input id="password" type="password" placeholder="Contraseña" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="current-password" required autofocus />
                </div>

                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">lock_outline</i>
                    </span>
                  </div>
                  <input id="password-confirm" type="password" placeholder="Confirmar contraseña" class="form-control @error('password') is-invalid @enderror" name="password_confirmation" required autocomplete="current-password"/>
                </div>

                

              </div>
              <div class="footer text-center">
                <button type="submit" class="btn btn-success btn-link btn-wd btn-lg">Confirmar registro
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <footer class="footer">
      <div class="container">
        <nav class="float-left">
          <ul>
           <li>
            <a href="/">
              <img src="{{asset('/img/logoBlanco.png')}}" width="200" height="50" class="img-fluid" alt="">
            </a>
          </li>
          <li>
            <a>
              <i class="fa fa-map-marker"></i>&nbsp;Xóchitl 4313. El Zapote, 45040. Zapopan, Jalisco
            </a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="" target="_blank" data-original-title="Like us on Facebook">
              <i class="fa fa-facebook-square fa-2x"></i>
            </a>
          </li>
          </ul>
        </nav>
        <div class="copyright float-right">
          &copy;
          <script>
            document.write(new Date().getFullYear())
          </script>
          <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a>.
        </div>
      </div>
    </footer>
  </div>
@endsection

