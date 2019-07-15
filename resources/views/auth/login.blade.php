@extends('layouts.app')

@section('body-class', 'signup-page')

@section('content')
<div class="header header-filter" style="background-image: url('{{ asset('/img/index.png') }}'); background-size: cover; background-position: top center;">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
                <div class="card card-signup">
                    <form class="form" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
                        <div class="header header-success text-center">
                            <h4>Inicio de sesión</h4>
                        </div>
                        <p class="text-divider">Ingrese sus credenciales</p>
                        <div class="content">

                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">email</i>
                                </span>
                                <input id="email" type="email" placeholder="Correo electrónico"  class="form-control" name="email" value="{{ old('email') }}" required autofocus/>
                            </div>

                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">lock_outline</i>
                                </span>
                                <input id="password" type="password" placeholder="Contraseña" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password"/>
                            </div>

                            <!-- If you want to add a checkbox to this form, uncomment this code-->

                            <div class="checkbox">
                                <label>
                                    <input type="checkbox"  name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}/>
                                    Recordar sesión
                                </label>
                            </div> 

                        </div>
                        <div class="footer text-center">
                            <button type="submit" class="btn btn-simple btn-success btn-lg text-uppercase">Ingresar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer">
        <div class="container">
            <nav class="pull-left">
                <ul>
                    <li>
                        <a href="http://www.creative-tim.com">
                            <img src="{{ asset('/img/logoBlanco.png') }}" width="200" height="50" class="img-fluid" alt="">
                        </a>
                    </li>
                    <li>
                        <a href="http://presentation.creative-tim.com">
                           About Us
                        </a>
                    </li>
                    <li>
                        <a href="http://blog.creative-tim.com">
                           Blog
                        </a>
                    </li>
                    <li>
                        <a href="http://www.creative-tim.com/license">
                            Licenses
                        </a>
                    </li>
                </ul>
            </nav>
            <div class="copyright pull-right">
                &copy; 2016, made with <i class="fa fa-heart heart"></i> by <a href="http://www.creative-tim.com" target="_blank">Creative Tim</a>
            </div>
        </div>
    </footer>

</div>
@endsection
