@extends('layouts.app')

@section('body-class', 'landing-page')

@section('content')

  <!-- SECTION CONSORTIUM-->
  <section class="container mt-5">
    <br><br>
    <h1 class="display-4 text-center title"><strong>Consorcios/Alianzas Comerciales</strong></h1>
    <hr>
    <p class="lead text-justify my-4">
      Somos la unión de empresas donde las habilidades y conocimientos 
      de cada una de nosotras dan partitura a la participación de 
      proyectos y obras de suma importancia social, donde, de la misma manera, nos integran como una competencia en el mercado. 
    </p> 
  </section>
  <!-- CONSORTIUM PICTURES -->
  <div class="container mb-5">
    <div class="row justify-content-center">
      <!--Ampere Construcciones Section-->
      <div class="col-md-6">
        <div class="card" data-toggle="modal" data-target="#modalAmpere" >
          <img class="card-img-top" src="{{asset('img/ampereLogo.png')}}" alt="Card image cap">
          <div class="card-body">
            <p class="card-text lead text-center">
              <strong>AMPERE Construcciones S.A. de C.V.</strong>
            </p>
          </div>
        </div>
      </div>

      <!-- ROSSO INGENIERIA-->
      <div class="col-md-6">
        <div class="card" data-toggle="modal" data-target="#modalRosso" >
          <img class="card-img-top" src="{{asset('img/ampereLogo.png')}}" alt="Card image cap">
          <div class="card-body">
            <p class="card-text lead text-center"><strong>Rosso Ingeniería</strong></p>
          </div>
        </div>
      </div>

    </div>
  </div>
        
  <!-- MODAL -->
  <!-- AMPERE CONSTRUCCIONES-->
  <div class="modal fade" id="modalAmpere" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">AMPERE Construcciones
        S.A. de C.V.</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success" data-dismiss="modal">Cerrar</button> 
        </div>
      </div>
    </div>
  </div>

  <!-- ROSSO-->
  <div class="modal fade" id="modalRosso" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Rosso Ingeniería</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>


  @include('includes.footer')       
@endsection
