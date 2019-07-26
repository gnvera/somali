@extends('layouts.app')

@section('title', 'Nuevo Producto | SOMALI ')

@section('body-class', 'profile-page')

@section('content')
   <div class="page-header header-filter" data-parallax="true" style="background-image: url('{{asset('img/indexCut.png')}}');"></div>
  <div class="main main-raised">
    <div class="profile-content">
      <div class="container">
        <div class="section ">
         <div class="profile">
              
              <div class="name my-5">
                <h3 class="title text-center">Registrar nuevo producto</h3>
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
          <form method="post" action="{{ url('/admin/products') }}">
            {{ csrf_field() }}
            <div class="row">
            <div class="col-sm-6">
              <div class="form-group label-floating">
                <label class="control-label">Nombre del producto</label>
                <input type="text" class="form-control" name="name" value="{{ old('name') }}" />
              </div>
            </div>

            <div class="col-sm-6">
              <div class="form-group label-floating">
                <label class="control-label">Precio del producto</label>
                <input type="number" step="0.01" class="form-control" name="price" value="{{ old('price') }}" />
              </div>
            </div>
            </div>


              <div class="form-group label-floating">
                <label class="control-label">Descripción corta</label>
                <input type="text" class="form-control" name="description" value="{{ old('description') }}"/>
              </div>

              <textarea class="form-control" placeholder="Descripción extensa del producto" rows="5" name="long_description">{{ old('long_description') }}</textarea>
              <div class="row justify-content-center">
                <button class="btn btn-success">Registrar producto</button>
                <a href="{{ url('/admin/products') }}" class="btn btn-outline-success ml-3">Cancelar</a>

              </div>
              
            

          </form>
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
        </script>
        <a href="#" target="_blank">SOMALI</a> 
      </div>
    </div>
  </footer>
    
@endsection
