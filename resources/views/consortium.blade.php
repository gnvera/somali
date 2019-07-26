@extends('layouts.app')

@section('body-class', 'landing-page')

@section('content')

  <!--SLIDER-->
    
    <!--SLIDER-->
    
    <!--SECCION 1-->
    <section class="container mt-5">
      <br><br>
        <h1 class="display-4 text-center title"><strong>Consorcios</strong></h1>
        <hr>
        <p class="lead text-justify my-4">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p> 
      </div>
    </section>

    <div class="container mb-5">
      <div class="row justify-content-center">
        <div class="col-md-6">
          <div class="card" >
  <img class="card-img-top" src="{{asset('img/ampereLogo.png')}}" alt="Card image cap">
  <div class="card-body">
    <p class="card-text lead text-center">AMPERE Construcciones S.A. de C.V.</p>
  </div>
</div>
        </div>
        <div class="col-md-6">
          <div class="card" >
  <img class="card-img-top" src="{{asset('img/ampereLogo.png')}}" alt="Card image cap">
  <div class="card-body">
    <p class="card-text lead text-center">Rosso Ingeniería</p>
  </div>
</div>
        </div>
      </div>
    </div>
        
    <!--SECTION 1-->

    <!--FOOTER-->
    <section class="footer">
      <div class="bg-success text-white">
                <div class="container">
                    <div class="row py-4 d-flex align-items-center">
                        <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
                            <h5 class="mb-0 text-uppercase">Síguenos en nuestras redes sociales</h5>
                        </div>
                        <div class="col-md-6 col-lg-7 text-center text-md-right">
                            <a class="fb-ic">
                                <i class="fa fa-facebook-square fa-3x" aria-hidden="true"></i>
                            </a>
                            <a class="tw-ic">
                                <i class="fa fa-twitter-square fa-3x" aria-hidden="true"></i>
                            </a>
                            <a class="gplus-ic">
                                <i class="fa fa-google-plus-square fa-3x" aria-hidden="true"></i>
                            </a>
                            <a class="li-ic">
                                <i class="fa fa-linkedin fa-3x" aria-hidden="true"></i>
                            </a>
                            <a class="ins-ic">
                                <i class="fa fa-instagram fa-3x" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="page-footer font-small blue-grey lighten-5 bg-dark text-muted">

              
           
            <div class="container text-center text-white text-md-left mt-5 bg-dark">
                <div class="row mt-3 white-text">
                    <div class="col-md-3 col-lg-4 col-xl-3 mb-4">
                        <h5 class="text-uppercase font-weight-bold">SOMALI</h5>
                        <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                        <img src="img/logoBlanco.png" class="img-fluid" alt="somalimx">
                        <br><br>
                        <p class="dark-grey-text">Si lo puedes imaginar... </p>
                        <p class="text-bold font-italic"><strong>Nosotros lo materializamos</strong></p>
                    </div>
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                            <h5 class="text-uppercase font-weight-bold">Certificaciones</h5>
                    </div>
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                            <h5 class="text-uppercase font-weight-bold">Contacto</h5>
                            <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                            <p>
                              <i class="fa fa-location-arrow" aria-hidden="true"></i>&nbsp;Xóchitl 4313, El Zapote, 45040. Zapopan, Jalisco</p>
                            <p>
                              <i class="fa fa-envelope-o" aria-hidden="true"></i>&nbsp;somaliventas@gmail.com</p>
                            <p>
                              <i class="fa fa-phone" aria-hidden="true"></i> + 01 234 567 88</p>
                            <p>
                              <i class="fa fa-mobile" aria-hidden="true"></i> + 01 234 567 89</p>
                    </div>
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <h5 class="text-uppercase font-weight-bold">Ubicación</h5>
                        <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3733.3594068668276!2d-103.41674918559875!3d20.65495200581113!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8428ac28cc27ded7%3A0xd00d8f4e5bf759d1!2sSOMALI!5e0!3m2!1ses-419!2smx!4v1563994038049!5m2!1ses-419!2smx" width="300" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </footer>
        <div class="footer-copyright text-center py-3 text-muted">
           &copy;
           <script>
            document.write(new Date().getFullYear())
          </script>
          <a class="dark-grey-text" href="">SOMALI</a>
        </div>
       
@endsection
