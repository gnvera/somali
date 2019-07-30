@extends('layouts.app')

@section('title', 'Catálogo | SOMALI ')

@section('body-class', 'profile-page')

@section('content')
   <div class="page-header header-filter" data-parallax="true" style="background-image: url('{{asset('img/indexCut.png')}}');"></div>
  <div class="main main-raised">
    <div class="profile-content">
      <div class="container">
        <div class="section ">
         <div class="profile">
              
              <div class="name my-5">
                <h3 class="title text-center">Editar producto seleccionado</h3>
                 @if ($errors->any())
                  <div class="alert alert-danger">
                    <ul>
                      @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                      @endforeach
                    </ul>
                  </div>
                @endif
              </div>
          </div>
          <form method="post" action="{{ url('/admin/products/'.$product->id.'/edit') }}">
            {{ csrf_field() }}
            <div class="row">
            <div class="col-sm-6">
              <div class="form-group label-floating">
                <label class="control-label">Nombre del producto</label>
                <input type="text" class="form-control" name="name" value="{{ old('name', $product->name) }}" />
              </div>
            </div>

            <div class="col-sm-6">
              <div class="form-group label-floating">
                <label class="control-label">Precio del producto</label>
                <input type="number" step="0.01" class="form-control" name="price" value="{{ old('price', $product->price) }}"/>
              </div>
            </div>
            </div>

              <div class="form-group label-floating">
                <label class="control-label">Descripción corta</label>
                <input type="text" class="form-control" name="description" value="{{ old('description', $product->description) }}"/>
              </div>

              <textarea class="form-control" placeholder="Descripción extensa del producto" rows="5" name="long_description" >{{ old('long_description', $product->long_description) }}</textarea>
              <div class="row justify-content-center">
                <button class="btn btn-success">Guardar cambios</button>
                <a href="{{ url('/admin/products') }}" class="btn btn-outline-success ml-3">Cancelar</a>

              </div>
              
            

          </form>
      </div>
            
          
          
          
          
        </div>
      </div>
    </div>
    <br>
  </div>
   @include('includes.footer')
    
@endsection
