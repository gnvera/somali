@extends('layouts.app')

@section('title', 'Catálogo | SOMALI ')

@section('body-class', 'profile-page')

@section('content')
<div class="page-header header-filter" data-parallax="true" style="background-image: url('{{asset('img/indexCut.png')}}');"></div>
  <div class="main main-raised">
    <div class="profile-content">
      <div class="container text-center">
        <div class="row">
          <div class="col-md-6 ml-auto mr-auto">
            <div class="profile">
              <div class="avatar">
                
                <img src="{{asset('img/shopping-cart.jpg')}}" alt="Circle Image" class="img-raised rounded-circle img-fluid">
              </div>
              <div class="name">
                <h2 class="title mb-5">Productos Disponibles</h2>
                
              </div>
            </div>
          </div>
        </div>
      
       <div class="row">
            @foreach($products as $product)
            <div class="col-md-4">
              <div class="team-player">
                <div class="card card-plain">
                  <div class="col-md-6 ml-auto mr-auto">
                    <img src="{{ $product->images()->first()->image }}" alt="Thumbnail Image" class="img-raised rounded-circle img-fluid" >
                  </div>
                  <h4 class="card-title">{{ $product->name }}
                    <br>
                    <small class="card-description text-muted">{{ $product->category->name }}</small>
                  </h4>
                  <div class="card-body">
                    <br>
                    <p class="card-description">
                      {{ $product->description }}
                    </p>
                  </div>
                  <div class="card-footer justify-content-center">
                    <a href="#pablo" class="btn btn-link btn-just-icon"><i class="fa fa-twitter"></i></a>
                    <a href="#pablo" class="btn btn-link btn-just-icon"><i class="fa fa-instagram"></i></a>
                    <a href="#pablo" class="btn btn-link btn-just-icon"><i class="fa fa-facebook-square"></i></a>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
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
        <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a>.
      </div>
    </div>
  </footer>
    
@endsection
