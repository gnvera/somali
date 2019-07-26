@extends('layouts.app')

@section('body-class', 'landing-page')

@section('content')
  <style>
    .bg-jumbotron{

      background: rgba(98,125,77,1);
      background: -moz-linear-gradient(left, rgba(98,125,77,1) 0%, rgba(31,59,8,1) 100%);
      background: -webkit-gradient(left top, right top, color-stop(0%, rgba(98,125,77,1)), color-stop(100%, rgba(31,59,8,1)));
      background: -webkit-linear-gradient(left, rgba(98,125,77,1) 0%, rgba(31,59,8,1) 100%);
      background: -o-linear-gradient(left, rgba(98,125,77,1) 0%, rgba(31,59,8,1) 100%);
      background: -ms-linear-gradient(left, rgba(98,125,77,1) 0%, rgba(31,59,8,1) 100%);
      background: linear-gradient(to right, rgba(98,125,77,1) 0%, rgba(31,59,8,1) 100%);
      filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#627d4d', endColorstr='#1f3b08', GradientType=1 );

      -webkit-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
      -moz-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
      box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
    }
  </style>
  <!--SLIDER-->
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('img/index.png')}}" class="d-block w-100" alt="...">
            </div>
        </div>
    </div>
    <!--SLIDER-->
    
    <!--SECCION 1-->
    <section class="container my-5">
        <h1 class="display-4 text-center title"><strong>¿Quiénes Somos?</strong></h1>
        <p class="lead text-justify my-4">
            La empresa SOMALI S.A de C.V. Soluciones con Materiales Livianos fundada en el 24 de agosto del 2012
            por los ingenieros Rigoberto Rojas Cuevas y Rigoberto Rojas Gómez, siendo una sociedad anónima 
            de capital variable regida bajo los estatutos de la Ley General de Sociedades Mercantiles. 
            Donde nuestra filosofía como empresa nos define por ser "Altamente Productiva y Profundamente Humana",
            preocupada por el desarrollo de sus colaboradores así como su entorno ambiental, social, cultural
            y profesional de quienes conformamos SOMALI.
            <br><br>
            Somos una empresa comprometida en comercializar y dar soluciones con productos
            relacionados con la construcción liviana, de marcas reconocidas por su calidad.
            Contamos con mas de 5 años de experiencia en el mercado, dando servicio a diferentes
            constructoras del estado de Jalisco.
        </p>
        
        <div class="features mt-5">
            <div class="row">
  <div class="col-md-6">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title text-center">Misión</h3>
      </div>
      <div class="card-body">
        <br><br>
        <p class="lead text-justify">Satisfacer las necesidades de clientes y proveedores, en tiempo y forma, con ayuda de nuestros colaboradores, para crear lazos de confianza y continuidad en las partes interesadas.</p>
        <br>&nbsp;
      </div>
    </div>
  </div>

  <div class="col-md-6">
    <div class="card">
        <div class="card-header card-header-success">
            <h3 class="card-title text-center">Visión</h3>
        </div>
        <div class="card-body">
            <p class="lead text-justify">Para el 2020 consolidarnos como una Organización Socialmente Responsable, con la finalidad de ser una empresa reconocida a nivel estatal consecutiva regionalmente, maximizando nuestra competitividad en el mercado, para satisfacer y cumplir la demanda de nuestros clientes y proveedores. Sin perder de vista el cuidado y desarrollo de nuestros colaboradores así como sustentabilidad de nuestro entorno.</p>
        </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-6">
      <div class="card">
          <div class="card-header card-header-icon card-header-success">
            <div class="card-icon">
              <h3 class="card-title text-center">Nuestro Enfoque</h3>
            </div>
          </div>
          <div class="card-body">
          
                  <p class="lead">Cubrir las necesidades de los clientes y constructores al dar soluciones integrales. Es decir, que en SOMALI puedan encontrar los materiales principales y también sus complementos o derivados.</p>
                  <br>&nbsp;
          </div>
      </div>
  </div>

  <div class="col-md-6">
      <div class="card">
          <div class="card-header ">
            <div class="card-text">
              <h3 class="card-title text-center">Valores</h3>
            </div>
          </div>
          <div class="card-body">
              <p class="lead text-justify">
                <i class="fa fa-check-circle"></i>&nbsp;Honestidad<br>
                <i class="fa fa-check-circle"></i>&nbsp;Responsabilidad<br>
                <i class="fa fa-check-circle"></i>&nbsp;Compromiso<br>
                <i class="fa fa-check-circle"></i>&nbsp;Integridad<br>
              <br>&nbsp;
          </div>
      </div>
  </div>
</div>
    </section>
    <!--SECTION 1-->
    <!--VALORES-->
    <div class="jumbotron bg-jumbotron text-white">
      <h1 class="title text-center text-white">Valores</h1>
      <hr class="my-4">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <p class="text-center text-success mb-4">
              <i class="text-center fa fa-check-square-o fa-5x" aria-hidden="true"></i>
            </p>
            <h3 class="title text-center text-white">Honestidad</h3>
            <p class="mt-5 lead text-justify">Manejar la confidencialidad de nuestros proveedores y clientes para garantizar su confianza y preferencia por nuestra organización.</p>
          </div>
          <div class="col-md-3">
            <p class="text-center text-success mb-4">
              <i class="text-center fa fa-check-square-o fa-5x" aria-hidden="true"></i>
            </p>
            <h3 class="title text-center text-white">Responsabilidad</h3>
            <p class="mt-5 lead text-justify">Actuar de manera razonable en cada una de las actividades que realizamos tanto dentro como fuera de la organización que coadyuven a la mejora continua.</p>
          </div>
          <div class="col-md-3">
            <p class="text-center text-success mb-4">
              <i class="text-center fa fa-check-square-o fa-5x" aria-hidden="true"></i>
            </p>
            <h3 class="title text-center text-white">Compromiso</h3>
            <p class="mt-5 lead text-justify">Cumplir con la demanda de material en tiempo y forma así como la continuidad de clientes y proveedores.</p>
          </div>
          <div class="col-md-3">
            <p class="text-center text-success mb-4">
              <i class="text-center fa fa-check-square-o fa-5x" aria-hidden="true"></i>
            </p>
            <h3 class="title text-center text-white">Integridad</h3>
            <p class="mt-5 lead text-justify">Actuar y mantener nuestras normas éticas y sociales en cada una de las actividades realizadas dentro y fuera de la organización.</p>
          </div>
        </div>
      </div>
      
    </div>
    <!--VALORES -->

    <!--COMERCIALIZAMOS-->
    
    <!--COMERCIALIZAMOS-->
    
    <!-- AFILIACIONES-->
    <section class="mt-5">
      <div class="container text-center">
      <br> 
      <h1 class="display-4 text-center title"><strong>Afiliaciones</strong></h1>
      <p class="lead text-justify my-4 text-center">
            Somos una empresa afiliada y con participación a CMIC Jalisco, Cámara de Comercio y COPARMEX.
      </p>

      <div class="team">
        <div class="row">
          <div class="col-md-4">
            <div class="team-player">
              <div class="card card-plain">
                <div class="col-md-6 ml-auto mr-auto">
                  <img src="{{ asset('/img/afiliacion2.png') }}" alt="Thumbnail Image" class="img-raised rounded-circle img-fluid">
                </div>
                 <h3 class="card-title">CMIC Jalisco</h3><h4 class="card-title">
                    
                    <small class="card-description text-muted">Cámara Mexicana de la Industria de la Construcción</small>
                  </h4>
                
                <div class="card-body">
                  <p class="lead">
                    Institución pública, autónoma, con personalidad jurídica propia y jurisdicción en todo el territorio de la República Mexicana.
                  </p>
                </div>
                <div class="card-footer justify-content-center">
                    <a href="https://www.cmicjalisco.org/" target="_blank" class="btn btn-link btn-just-icon"><i class="fa fa-globe"></i></a>
                    <a href="https://www.facebook.com/cmicjalisco/" target="_blank" class="btn btn-link btn-just-icon"><i class="fa fa-facebook-square"></i></a>
                    <a href="https://twitter.com/cmicjalisco" target="_blank" class="btn btn-link btn-just-icon"><i class="fa fa-twitter"></i></a>
                 
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="team-player">
                <div class="card card-plain">
                  <div class="col-md-6 ml-auto mr-auto">
                    <img src="{{ asset('/img/afiliacion1.png') }}" alt="Thumbnail Image" class="img-raised rounded-circle img-fluid">
                </div>
                 <h3 class="card-title">Cámara de Comercio</h3><h4 class="card-title">
                    
                    <small class="card-description text-muted">Cámara Nacional de Comercio.</small>
                  
                  </h4>
                
                <div class="card-body">
                  <p class="lead">
                    Organización sin fines de lucro que tiene como objetivo agrupar, representar y defender a las empresas y a los comerciantes de una determinada zona o región. </p>
                 
                  </p>
                  </div>
                  <div class="card-footer justify-content-center">
                    <a href="https://www.camaradecomerciogdl.mx/#/" target="_blank" class="btn btn-link btn-just-icon"><i class="fa fa-globe"></i></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="team-player">
                <div class="card card-plain">
                  <div class="col-md-6 ml-auto mr-auto">
                    <img src="{{ asset('/img/afiliacion3.png') }}" alt="Thumbnail Image" class="img-raised rounded-circle img-fluid">
                </div>
                 <h3 class="card-title">COPARMEX</h3><h4 class="card-title">
                    
                    <small class="card-description text-muted">Confederación Patronal de la República Mexicana</small>
                  </h4>
                
                <div class="card-body">
                  <p class="lead">
                    Sindicato patronal independiente, apartidista y de afiliación voluntaria que reúne a empresarios de todos tamaños y sectores, unidos por un profundo compromiso con México.
                  
                  </p>
                  </div>
                  <div class="card-footer justify-content-center">
                    <a href="https://coparmex.org.mx/" target="_blank" class="btn btn-link btn-just-icon"><i class="fa fa-globe"></i></a>
                    <a href="https://www.facebook.com/coparmexnacional/" target="_blank" class="btn btn-link btn-just-icon"><i class="fa fa-facebook-square"></i></a>
                    <a href="https://twitter.com/Coparmex" target="_blank" class="btn btn-link btn-just-icon"><i class="fa fa-twitter"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
  
    </section>
    
    <!-- AFILIACIONES-->
    <hr>

    <!--TESTIMONIOS-->
    <div id="carouselComments" class="carousel slide mb-5" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselComments" data-slide-to="0" class="active bg-secondary"></li>
            <li data-target="#carouselComments" data-slide-to="1" class="bg-secondary"></li>
            <li data-target="#carouselComments" data-slide-to="2" class="bg-secondary"></li>
            <li data-target="#carouselComments" data-slide-to="3" class="bg-secondary"></li>
            <li data-target="#carouselComments" data-slide-to="4" class="bg-secondary"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active mb-5 text-center">
                <div class="text-danger">  
                  <i class="fa fa-exclamation-triangle fa-5x" aria-hidden="true"></i>
                </div>
                <h1 class="title text-uppercase text-bold">¡ALTO!</h1>
                <br><br>
            </div>
            <div class="carousel-item mb-5 text-center">
                <div class="text-warning">  
                  <i class="fa fa-spinner fa-5x" aria-hidden="true"></i>
                </div><br>
                <h3 class="title text-uppercase text-bold">Equipo trabajando por...</h3>
                <br><br>
            </div>
            <div class="carousel-item mb-5 text-center">
                <div>  
                  <img src="{{asset('img/logocemefi.png')}}" width="150" height="80">
                </div><br>
                <h3 class="title text-uppercase text-bold">Distintivo CEMEFI</h3>
                <br><br>
            </div>
            <div class="carousel-item mb-5 text-center">
                <div class="text-success">  
                  <i class="fa fa-envira fa-5x" aria-hidden="true"></i>
                </div>
                <br>
                <h3 class="title text-uppercase text-bold">Plan de adhesion para la separación de residuos</h3>
                <br><br>
            </div>
            <div class="carousel-item mb-5 text-center">
                <div>  
                  <img src="{{asset('img/esr.png')}}" width="80" height="80">
                </div><br>
                <h3 class="title text-uppercase text-bold">Aleación al decálogo de CEMEFI</h3>
                <br><br>
            </div>
            
        </div>
    </div>
    <!--TESTIMONIOS-->

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
