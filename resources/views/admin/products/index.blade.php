@extends('layouts.app')

@section('title', 'Listado de Productos | SOMALI ')

@section('body-class', 'profile-page')

@section('content')
   <div class="page-header header-filter" data-parallax="true" style="background-image: url('{{asset('img/indexCut.png')}}');"></div>
  <div class="main main-raised">
    <div class="profile-content">
      <div class="container">
        <div class="section text-center">
         <div class="profile">
              
              <div class="name my-5">
                <h3 class="title">Listado de Productos</h3>
              </div>
          </div>
       
        <div class="team ">
          <div class="row justify-content-center">
            <a href="{{ url('/admin/products/create') }}" class="btn btn-success btn-round">Nuevo producto</a>
            
            <table class="table">
            <thead>
                <tr>
                    <th class="text-center">#</th>
                    <th class="text-center">Nombre</th>
                    <th class="text-center">Descripción</th>
                    <th class="text-center">Categoría</th>
                    <th class="text-right">Precio</th>
                    <th class="text-right">Acciones</th>
                </tr>
            </thead>
            <tbody>
              @foreach ($products as $product)
                <tr>
                    <td class="text-center">{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->description }}</td>
                    <td>{{ $product->category ? $product->category->name : 'General' }}</td>
                    <td class="text-right">&dollar; {{ $product->price }}</td>
                    <td class="td-actions text-right">
                        <form method="post" action="{{ url('/admin/products/'.$product->id) }}">
                          <!-- Acciones de método post requieren el siguiente token-->
                          {{ csrf_field() }}
                          {{ method_field('DELETE') }}
                          <a href="#" rel="tooltip" title="Ver producto" class="btn btn-info btn-simple btn-xs">
                            <i class="fa fa-info"></i>
                          </a>
                          <a href="{{ url('/admin/products/'.$product->id.'/edit') }}" rel="tooltip" title="Editar producto" class="btn btn-success btn-simple btn-xs">
                              <i class="fa fa-edit"></i>
                          </a>
                          <a href="{{ url('/admin/products/'.$product->id.'/images') }}" rel="tooltip" title="Editar producto" class="btn btn-warning btn-simple btn-xs">
                              <i class="fa fa-image"></i>
                          </a>

                          <button type="submit" rel="tooltip" title="Eliminar producto" class="btn btn-danger btn-simple btn-xs">
                            <i class="fa fa-times"></i>
                          </button>
                        </form>
                    </td>
                </tr>
              @endforeach
            </tbody>
        </table>
        {{ $products->links() }}
          </div>
        </div>
      </div>
            
          
          
          
          
        </div>
      </div>
    </div>
    <br>
  </div>
   @include('includes.footer')
    
@endsection
