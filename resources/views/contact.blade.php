
@extends('layouts.app')

@section('title', 'Contacto | SOMALI ')

@section('body-class', 'profile-page')

@section('content')
<style>
.map-container-6{
overflow:hidden;
padding-bottom:56.25%;
position:relative;
height:0;
}
.map-container-6 iframe{
left:0;
top:0;
height:100%;
width:100%;
position:absolute;
}
</style>

   <div class="page-header header-filter" data-parallax="true" style="background-image: url('{{asset('img/indexCut.png')}}');"></div>
  <div class="main main-raised">
    <div class="profile-content">
      <div class="container text-center">
        
  <!--Section heading-->
  <div class="row">
          <div class="col-md-8 ml-auto mr-auto">
            <h2 class="title">Contacto</h2>
            <h5 class="">¿Necesitas consultoría especializada para tu futuro proyecto? Comunícate con nosotros. Visítanos en nuestra sucursal.</h5>
          </div>
        </div>

  <div class="row">

    <!--Grid column-->
    <div class="col-lg-5 mb-4">

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

      <!--Google map-->
      <div id="map-container-google-11" class="z-depth-1-half map-container-6" style="height: 400px">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3733.3594068668276!2d-103.41674918559876!3d20.65495200581113!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8428ac28cc27ded7%3A0xd00d8f4e5bf759d1!2sSOMALI!5e0!3m2!1ses-419!2smx!4v1562799280539!5m2!1ses-419!2smx"
          frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>

      <br>
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

<!--Section: Contact v.1-->

  
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
        <a href="#" target="_blank">SOMALI</a>.
      </div>
    </div>
  </footer>
    
@endsection
