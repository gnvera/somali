@extends('layouts.app')

@section('title', 'Imágenes de Productos | SOMALI ')

@section('body-class', 'profile-page')

@section('content')
   <div class="page-header header-filter" data-parallax="true" style="background-image: url('{{asset('img/indexCut.png')}}');"></div>
  <div class="main main-raised">
    <div class="profile-content">
      <div class="container">
        <div class="section text-center">
         <div class="profile">
              
              <div class="name my-5">
                <h2 class="title mb-5">Imágenes del Producto "{{ $product->name }}"</h2>
                
                          <form method="post" action="" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <input type="file" name="photo" class="mb-3" required><br>
                            <button type="submit" class="btn btn-success btn-round">Subir nueva imagen</button>
                            <a href="{{ url('/admin/products') }}" class="btn btn-default btn-round">Volver al listado de productos</a>
                          </form>
                        <hr>
                
                 
                 
              </div>

          </div>
          <div class="row">
                   @foreach ($images as $image)
                    <div class="col-md-4">
                      <div class="card">
                        <div class="card-body">
                          <img src="{{ $image->url }}" width="250">
                          <form method="post" action="">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <input type="hidden" name="image_id" value="{{ $image->id }}">
                            <button type="submit" class="btn btn-outline-danger btn-round"><i class="fa fa-times"></i>&nbsp;Eliminar</button>
                            @if($image->featured)
                            <button type="button" class="btn btn-info btn-fab btn-fab-mini btn-round" rel="tooltip" title="Imagen destacada actualmente">
                                <i class="material-icons">star</i>
                            </button>
                            @else
                              <a href="{{ url('/admin/products/'.$product->id.'/images/select/'.$image->id) }}" class="btn btn-warning btn-fab btn-fab-mini btn-round">
                                <i class="material-icons">star</i>
                              </a>
                          @endif
                          </form>
                          
                        </div>
                      </div>
                      
                    </div>
                    @endforeach
                 </div>
       
      </div>
            
          
          
          
          
        </div>
      </div>
    </div>
    <br>
  </div>
  @include('includes.footer')
    
@endsection
