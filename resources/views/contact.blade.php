
@extends('layouts.app')

@section('title', 'Contacto | SOMALI ')

@section('body-class', 'profile-page')

@section('content')
<style>
  
</style>

  <!--SECCION CONTACT-->
    <section class="container mt-5">
      <br><br>
        <h1 class="display-4 text-center title"><strong>Contacto</strong></h1>
        <hr>
        <p class="lead text-justify my-4">
            ¿Necesitas consultoría personalizada? Comunícate con nosotros. Visítanos en nuestra sucursal. Si lo puedes imaginar... ¡Nosotros lo materializamos!
        </p> 
      </div>
    </section>
    <!-- SECTION CONTACT-->
    <!-- CONTACT FORM -->
    <section class="container">
      <!--Section heading-->
  

  <div class="row ">

    <!--Grid column-->
    <div class="col-lg-5 mb-4 text-center">

      <!--Form with header-->
      <div class="card">

        <div class="card-body">
          <!--Header-->
          <div class="form-header blue accent-1">
            <h3><i class="fa fa-envelope"></i> Escríbenos:</h3>
          </div>

          <p>Nos pondremos en contacto a la brevedad.</p>
          <br>

          <!--Body-->
          <div class="md-form">
            <i class="fa fa-user prefix grey-text"></i>
            <input type="text" id="form-name" class="form-control">
            <label for="form-name">Nombre completo</label>
          </div>

          <div class="md-form">
            <i class="fa fa-envelope prefix grey-text"></i>
            <input type="text" id="form-email" class="form-control">
            <label for="form-email">Correo electrónico</label>
          </div>

          <div class="md-form">
            <i class="fa fa-tag prefix grey-text"></i>
            <input type="text" id="form-Subject" class="form-control">
            <label for="form-Subject">Asunto</label>
          </div>

          <div class="md-form">
            <i class="fa fa-pencil prefix grey-text"></i>
            <textarea id="form-text" class="form-control md-textarea" rows="3"></textarea>
            <label for="form-text">Mensaje...</label>
          </div>

          <div class="text-center mt-4">
            <button class="btn btn-outline-success">Enviar mensaje</button>
          </div>

        </div>

      </div>
      <!--Form with header-->

    </div>
    <!--Grid column-->

    <!--Grid column-->
    <div class="col-lg-7 mt-5">

      <!--Buttons-->
      <div class="row text-center">
        <div class="col-md-4">
          <a class="btn-floating blue accent-1"><i class="fa fa-map-marker fa-3x text-success"></i></a>
          <p>Xóchitl 4313, El Zapote.</p>
          <p>Zapopan Jalisco.</p>
        </div>

        <div class="col-md-4">
          <a class="btn-floating blue accent-1"><i class="fa fa-phone fa-3x text-success"></i></a>
          <p>+ 01 234 567 89</p>
          <p>Lun - Vie, 8:00-18:00</p>
        </div>

        <div class="col-md-4">
          <a class="btn-floating blue accent-1"><i class="fa fa-envelope fa-3x text-success"></i></a>
          <p>somaliventas@gmail.com</p>
        </div>
      </div>

    </div>
    <!--Grid column-->
  </div>
<!--Section: Contact v.1-->
    </section>
    <!-- CONTACT FORM -->




  @include('includes.footer')
@endsection
