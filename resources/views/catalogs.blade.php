@extends('layouts.app')

@section('title', 'Catálogo | SOMALI ')

@section('body-class', 'profile-page')

@section('styles')
    <style>
      .team .row .col-md-4{
        margin-bottom: 5em;
      }
      .rowCustomed {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display:         flex;
    flex-wrap: wrap;
  }
  .rowCustomed > [class*='col-'] {
    display: flex;
    flex-direction: column;
  }
    </style>
@endsection

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
                <h1 class="display-4 text-center title mb-5"><strong>Productos Disponibles</strong></h1>
                
              </div>
            </div>
          </div>
        </div>
      
      <div class="team">
       <div class="row rowCustomed">
            @foreach($products as $product)
            <div class="col-md-4">
              <div class="team-player">
                <div class="card card-plain">
                  <div class="col-md-6 ml-auto mr-auto">
                    <img src="{{ $product->featured_image_url }}" alt="Thumbnail Image" class="img-raised rounded-circle img-fluid" >
                  </div>
                  <h3 class="text-dark">
                    <a href="{{ url('/products/'.$product->id) }}">{{ $product->name }}</a>
                    <br>
                    <small class="card-description">{{ $product->category->name }}</small>
                  </h3>
                  <h4 class=""> 
                    &dollar; {{ $product->price }} 
                  </h4>
                  <div class="card-body">
                    <br>
                    <p class="card-description">
                      {{ $product->description }}
                    </p>
                  </div>
                  <!--<div class="card-footer justify-content-center">
                    <a href="#pablo" class="btn btn-link btn-just-icon"><i class="fa fa-twitter"></i></a>
                    <a href="#pablo" class="btn btn-link btn-just-icon"><i class="fa fa-instagram"></i></a>
                    <a href="#pablo" class="btn btn-link btn-just-icon"><i class="fa fa-facebook-square"></i></a>
                  </div>-->
                </div>
              </div>
            </div>
            @endforeach
          </div>
          <div class="row justify-content-center"> 
            {{ $products->links() }}
          </div>
          </div>
      
          
         
        </div>
      </div>
    </div>
    <br>
  </div>



  @include('includes.footer')
@endsection
