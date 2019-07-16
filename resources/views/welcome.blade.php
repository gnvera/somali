@extends('layouts.app')

@section('body-class', 'landing-page')

@section('content')
    <div class="page-header header-filter" data-parallax="true" style="background-image: url('{{ asset('/img/indexWoLogo.png') }}')">
    <div class="container">
      <div class="row">
        <div class="container text-center">
          <img src="{{asset('/img/logoBlanco.png')}}" width="800" height="350" class="d-inline-block align-top img-fluid" alt="">
          <h3>Si lo puedes imaginar... Nosotros lo materializamos</h3>
          <br>
          <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" target="_blank" class="btn btn-danger btn-raised btn-lg">
            <i class="fa fa-play"></i> Reproducir video
          </a>
        </div>
      </div>
    </div>
  </div>
  <div class="main main-raised">
    <div class="container">
      <div class="section text-center">
        <div class="row">
          <div class="col-md-8 ml-auto mr-auto">
            <h2 class="title">¿Quiénes somos?</h2>
            <h5 class="description">Somos una empresa comprometida en comercializar y dar soluciones con productos
            relacionados con la construcción liviana, de marcas reconocidas por su calidad.
            Contamos con mas de 5 años de experiencia en el mercado, dando servicio a diferentes
            constructoras del estado de Jalisco.</h5>
          </div>
        </div>

        <div class="features my-3">
            <div class="row">
  <div class="col-md-6">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title">Misión</h4>
      </div>
      <div class="card-body">
        <br>
        Comercializar e instalar marcas lideres en el mercado mexicano, dando soluciones con productos de excelente relación calidad y precio.
        <br>&nbsp;
      </div>
    </div>
  </div>

  <div class="col-md-6">
    <div class="card">
        <div class="card-header card-header-success">
            <h4 class="card-title">Visión</h4>
        </div>
        <div class="card-body">
              A través de crear alianzas comerciales y profesionales generando productividad y satisfacción al cliente. Nos dirigimos a ser lideres en el ramo de la construcción creando vínculos con nuestros clientes, optimizando recursos y dando excelente servicio.
        </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-6">
      <div class="card">
          <div class="card-header card-header-icon card-header-success">
            <div class="card-icon">
              <h4 class="card-title">Nuestro enfoque</h4>
            </div>
          </div>
          <div class="card-body">
                  Cubrir las necesidades de los clientes y constructores al dar soluciones integrales. Es decir, que en SOMALI puedan encontrar los materiales principales y también sus complementos o derivados.
                  <br>&nbsp;
          </div>
      </div>
  </div>

  <div class="col-md-6">
      <div class="card">
          <div class="card-header ">
            <div class="card-text">
              <h4 class="card-title">Valores</h4>
            </div>
          </div>
          <div class="card-body">
              Liderazgo<br>Honestidad<br>
              Justicia<br>Solidaridad
          </div>
      </div>
  </div>
</div>
        </div>

        <div class="features jumbotron mt-5">
            <h2 class="title">Comercializamos</h2>
          <div class="row">

            <div class="col-md-4">
              <div class="info">
                <div class="icon icon-info">
                  <i class="material-icons">business</i>
                </div>
                <h4 class="info-title">Suministros</h4>
                <p>Abastecimientos industriales y productos relacionados a la adecuación de bienes inmuebles.</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="info">
                <div class="icon icon-success">
                  <i class="material-icons">build</i>
                </div>
                <h4 class="info-title">Herramientas</h4>
                <p>Manuales, mecánicas y eléctricas.</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="info">
                <div class="icon icon-danger">
                  <i class="material-icons">highlight</i>
                </div>
                <h4 class="info-title">Insumos</h4>
                <p>Artículos electrónicos, maquinaria ligera, ferretería y eléctrica.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="section text-center">
        <h2 class="title">Afiliaciones</h2>
        <h5 class="description">Somos una empresa afiliada y con participación a CMIC Jalisco, Cámara de Comercio y COPARMEX.</h5>
        <div class="team">
          <div class="row">
            <div class="col-md-4">
              <div class="team-player">
                <div class="card card-plain">
                  <div class="col-md-6 ml-auto mr-auto">
                    <img src="{{ asset('/img/afiliacion2.png') }}" alt="Thumbnail Image" class="img-raised rounded-circle img-fluid">
                  </div>
                  <h4 class="card-title">CMIC Jalisco
                    <br>
                    <small class="card-description text-muted">Cámara Mexicana de la Industria de la Construcción</small>
                  </h4>
                  <div class="card-body">
                    <br>
                    <p class="card-description">Institución pública, autónoma, con personalidad jurídica propia y jurisdicción en todo el territorio de la República Mexicana</p>
                  </div>
                  <div class="card-footer justify-content-center">
                    <a href="#pablo" class="btn btn-link btn-just-icon"><i class="fa fa-twitter"></i></a>
                    <a href="#pablo" class="btn btn-link btn-just-icon"><i class="fa fa-instagram"></i></a>
                    <a href="#pablo" class="btn btn-link btn-just-icon"><i class="fa fa-facebook-square"></i></a>
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
                  <h4 class="card-title">Cámara de comercio
                    <br>
                    <small class="card-description text-muted">Cámara Nacional de Comercio, Industria, Agricultura y Minería de Guadalajara</small>
                  </h4>
                  <div class="card-body">
                    <p class="card-description">Organización sin fines de lucro que tiene como objetivo agrupar, representar y defender a las empresas y a los comerciantes de una determinada zona o región. </p>
                  </div>
                  <div class="card-footer justify-content-center">
                    <a href="#pablo" class="btn btn-link btn-just-icon"><i class="fa fa-twitter"></i></a>
                    <a href="#pablo" class="btn btn-link btn-just-icon"><i class="fa fa-instagram"></i></a>
                    <a href="#pablo" class="btn btn-link btn-just-icon"><i class="fa fa-facebook-square"></i></a>
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
                  <h4 class="card-title">COPARMEX
                    <br>
                    <small class="card-description text-muted">Confederación Patronal de la República Mexicana</small>
                  </h4>
                  <div class="card-body">
                    <p class="card-description">Sindicato patronal independiente, apartidista y de afiliación voluntaria que reúne a empresarios de todos tamaños y sectores, unidos por un profundo compromiso con México</p>
                  </div>
                  <div class="card-footer justify-content-center">
                    <a href="#pablo" class="btn btn-link btn-just-icon"><i class="fa fa-twitter"></i></a>
                    <a href="#pablo" class="btn btn-link btn-just-icon"><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="section section-contacts">
        <div class="row">
          <div class="col-md-8 ml-auto mr-auto">
            
            
            <div id="carouselComments" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselComments" data-slide-to="0" class="active bg-secondary"></li>
            <li data-target="#carouselComments" data-slide-to="1" class="bg-secondary"></li>
            <li data-target="#carouselComments" data-slide-to="2" class="bg-secondary"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active mb-5 text-center">
                <h2 class="text-center title">Testimonios</h2>
                <h4 class="text-center description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, laudantium!</h4>
            </div>
            <div class="carousel-item mb-5 text-center">
                <h2 class="text-center title">Testimonios</h2>
                <h4 class="text-center description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, laudantium!</h4>
            </div>
            <div class="carousel-item mb-5 text-center">
                <h2 class="text-center title">Testimonios</h2>
                <h4 class="text-center description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, laudantium!</h4>
            </div>
        </div>
    </div>


          </div>
        </div>
      </div>
    </div>
  </div>
  <footer class="footer footer-default">
    <div class="container">
      <nav class="float-left">
        <ul>
          <li>
            <a href="/">
              <img src="{{asset('/img/logo.png')}}" width="200" height="50" class="img-fluid" alt="">
            </a>
          </li>
          <li>
            <a href="https://creative-tim.com/presentation">
              Contacto
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="https://twitter.com/CreativeTim" target="_blank" data-original-title="Follow us on Twitter">
              <i class="fa fa-twitter fa-2x"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="https://www.facebook.com/CreativeTim" target="_blank" data-original-title="Like us on Facebook">
              <i class="fa fa-facebook-square fa-2x"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="https://www.instagram.com/CreativeTimOfficial" target="_blank" data-original-title="Follow us on Instagram">
              <i class="fa fa-instagram fa-2x"></i>
            </a>
          </li>
          
        </ul>
      </nav>
      <div class="copyright float-right">

        &copy;
        <script>
          document.write(new Date().getFullYear())
        </script>, made with <i class="material-icons">favorite</i> by
        <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a> for a better web.
      </div>
    </div>
  </footer>
@endsection
