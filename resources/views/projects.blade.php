@extends('layouts.app')

@section('title', 'Proyectos | SOMALI ')

@section('body-class', 'profile-page')

@section('content')
   <div class="page-header header-filter" data-parallax="true" style="background-image: url('{{asset('img/indexCut.png')}}');"></div>
  <div class="main main-raised">
    <div class="profile-content">
      <div class="container">
        <div class="row">
          <div class="col-md-6 ml-auto mr-auto">
            <div class="profile">
              
              <div class="name my-5">
                <h3 class="title">Proyectos realizados</h3>
                
                <a href="#pablo" class="btn btn-just-icon btn-link btn-dribbble"><i class="fa fa-dribbble"></i></a>
                <a href="#pablo" class="btn btn-just-icon btn-link btn-twitter"><i class="fa fa-twitter"></i></a>
                <a href="#pablo" class="btn btn-just-icon btn-link btn-pinterest"><i class="fa fa-pinterest"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="description text-center">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat.  </p>
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
            <h3 class="title">LAND MARK <br>Andares</h3>
            
              
            
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
            <a href="https://www.creative-tim.com">
              Creative Tim
            </a>
          </li>
          <li>
            <a href="https://creative-tim.com/presentation">
              About Us
            </a>
          </li>
          <li>
            <a href="http://blog.creative-tim.com">
              Blog
            </a>
          </li>
          <li>
            <a href="https://www.creative-tim.com/license">
              Licenses
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
