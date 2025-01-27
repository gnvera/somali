@extends('layouts.app')

@section('body-class', 'signup-page')

@section('content')
    <div class="page-header header-filter" style="background-image: url('{{ asset('/img/index.png') }}'); background-size: cover; background-position: top center;">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6 ml-auto mr-auto">
          <div class="card card-login">
            <form class="form" method="POST" action="{{ route('login') }}">
              {{ csrf_field() }}
              <div class="card-header card-header-success text-center">
                <h4 class="card-title">Ingresar</h4>
                
              </div>
              <p class="description text-center">Ingrese sus credenciales</p>
              <div class="card-body">
                
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

                <div class="form-check">
                    <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}/>
                        Recordar sesión
                        <span class="form-check-sign">
                            <span class="check"></span>
                        </span>
                    </label>
                </div>

              </div>
              <div class="footer text-center">
                <button type="submit" class="btn btn-success btn-link btn-wd btn-lg">Ingresar
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    @include('includes.short-footer')
@endsection