@extends('layouts.app')

@section('title', 'Proyectos | SOMALI ')

@section('body-class', 'profile-page')

@section('content')
   <div class="page-header header-filter" data-parallax="true" style="background-image: url('{{asset('img/indexCut.png')}}');"></div>
  <div class="main main-raised">
    <div class="profile-content">
      <div class="container text-center">
        <div class="row">
          <div class="col-md-8 ml-auto mr-auto">
            <h2 class="title mb-5">Proyectos Realizados</h2>
            <h5 class="">Distintos clientes nos han brindado la oportunidad de colaborar en sus proyectos de construcción, brindándoles la mejor atención e insumos de alta calidad. Soluciones con Materiales Livianos S.A. de C.V. tiene el privilegio de trabajar en sector comercial, residencial, industrial, educativo y en el sector médico.</h5>
          </div>
        </div>
           
        <div class="row">
          <div class="col-md-12 ml-auto mr-auto">
            <div class="profile-tabs">
              <ul class="nav nav-pills nav-pills-icons justify-content-center" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" href="#comercial" role="tab" data-toggle="tab">
                    <i class="material-icons">store</i> Sector comercial
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#residencial" role="tab" data-toggle="tab">
                    <i class="material-icons">location_city</i> Sector residencial
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#medico" role="tab" data-toggle="tab">
                    <i class="material-icons">favorite</i> Consultorios médicos
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#industrial" role="tab" data-toggle="tab">
                    <i class="material-icons">business</i> Sector industrial
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#educativo" role="tab" data-toggle="tab">
                    <i class="material-icons">school</i> Sector educativo
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="tab-content tab-space">
          <div class="tab-pane active text-center gallery" id="comercial">
            <h5 class=" mb-5">LAND MARK Andares. Zapopan, Jalisco.</h5>
            
              
            
            <div class="row">
              <div class="col-md-6 ml-auto">
                <img src="{{ asset('img/projects/comercial1.png') }}" class="rounded">
                <img src="{{ asset('img/projects/comercial2.png') }}" class="rounded">
              </div>
              <div class="col-md-6 mr-auto">
                <img src="{{ asset('img/projects/comercial3.png') }}" class="rounded">
                <img src="{{ asset('img/projects/comercial4.png') }}" class="rounded">
              </div>
            </div>
          </div>
          <div class="tab-pane text-center gallery" id="residencial">
            <div class="row">
              <div class="col-md-6 ml-auto">
                <img src="{{ asset('img/projects/residencial1.png') }}" class="rounded">
              </div>
              <div class="col-md-6 mr-auto">
                <img src="{{ asset('img/projects/residencial2.png') }}" class="rounded">
              </div>
            </div>
          </div>
          <div class="tab-pane text-center gallery" id="medico">
            <div class="row">
              <div class="col-md-6 ml-auto">
                <img src="{{ asset('img/projects/medico1.png') }}" class="rounded">
              </div>
              <div class="col-md-6 mr-auto">
                <img src="{{ asset('img/projects/medico2.png') }}" class="rounded">
              </div>
            </div>
          </div>
          <div class="tab-pane text-center gallery" id="industrial">
            <div class="row">
              <div class="col-md-6 ml-auto">
                <img src="{{ asset('img/projects/industrial1.png') }}" class="rounded">
              </div>
              <div class="col-md-6 mr-auto">
                <img src="{{ asset('img/projects/industrial2.png') }}" class="rounded">
              </div>
            </div>
          </div>
          <div class="tab-pane text-center gallery" id="educativo">
            <div class="row">
              <div class="col-md-12 ml-auto">
                <img src="{{ asset('img/projects/educativo1.png') }}" class="rounded">
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
        <a href="#" target="_blank">SOMALI</a>.
      </div>
    </div>
  </footer>
    
@endsection
