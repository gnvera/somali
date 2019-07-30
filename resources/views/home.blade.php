@extends('layouts.app')

@section('title', 'Inicio | SOMALI ')

@section('body-class', 'profile-page')

@section('content')
<div class="page-header header-filter" data-parallax="true" style="background-image: url('{{asset('img/indexCut.png')}}');"></div>
  <div class="main main-raised">
    <div class="profile-content">
      <div class="container text-center">
        <div class="row">
          <div class="col-md-6 ml-auto mr-auto">
           
             
              <div class="name">
                <h1 class="display-4 text-center title"><strong>Bienvenido</strong></h1>
                
              </div>

          </div>

        </div>
        <ul class="nav nav-pills nav-pills-icons" role="tablist">
          <li class="nav-item">
          <a class="nav-link active" href="#dashboard-1" role="tab" data-toggle="tab">
            <i class="material-icons">dashboard</i>
            Carrito de compras
          </a>
        </li>
    <li class="nav-item">
        <a class="nav-link" href="#schedule-1" role="tab" data-toggle="tab">
            <i class="material-icons">schedule</i>
            Pedidos realizados
        </a>
    </li>
</ul>
<!--<div class="tab-content tab-space">
    <div class="tab-pane active" id="dashboard-1">
      
    </div>
    <div class="tab-pane" id="schedule-1">
      
    </div>
</div>-->
<hr>
   <p>Tu carrito de compra presenta {{ auth()->user()->cart->details->count() }} productos.</p>
    <table class="table">
            <thead>
                <tr>
                    <th class="text-center">#</th>
                    <th class="text-center">Nombre</th>
                    <th class="">Precio</th>
                    <th class="">Cantidad</th>
                    <th class="">Subtotal</th>
                    <th class="">Acciones</th>
                </tr>
            </thead>
            <tbody>
              @foreach (auth()->user()->cart->details as $detail)
             
                <tr>
                    <td class="text-center">
                      <img src=" {{ $detail->product->featured_image_url }}" height="50">
                    </td>
                    <td>
                      <a href="{{ url('/products/'.$detail->product->id) }}" target="_blank">{{ $detail->product->name }}</a>
                    </td>
                    
                    <td class="">&dollar; {{ $detail->product->price }}</td>
                    <td class="">{{ $detail->quantity }}</td>
                    <td class="">&dollar; {{ $detail->quantity * $detail->product->price }}</td>
                    <td class="td-actions">
                        <form method="post" action="{{ url('/cart') }}">
                          {{ csrf_field() }}
                          {{ method_field('DELETE') }}
                          <input type="hidden" name="cart_detail_id" value="{{ $detail->id }}">

                          <a href="{{ url('/products/'.$detail->product->id) }}" target="_blank" rel="tooltip" title="Ver producto" class="btn btn-info btn-simple btn-xs">
                            <i class="fa fa-info"></i>
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


      
       </div>
      </div>
    </div>
    <br>
  </div>



    @include('includes.footer')
@endsection
