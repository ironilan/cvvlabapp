@extends('layouts.frontend')

@section('contenido')

@include('frontend.components.slider')

<div class="container margin_120_95">
      <div class="main_title">
        <h2>Resultado <strong>Online</strong></h2>
        <p>Te brindamos una serie de análisis detallados, en tiempos optimizados y con total seguridad.</p>
      </div>
      <div class="row add_bottom_30">
        <div class="col-lg-4">
          <div class="box_feat" id="icon_1">
            <span></span>
            <h3>EMPRESAS</h3>
            <p>Acceder a ver los resultados de sus colaboradores y conoce nuestros paquetes especializados</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="box_feat" id="icon_2">
            <span></span>
            <h3>Médicos</h3>
            <p>Revisa el resultados de tus pacientes en tiempo real, para un seguimiento oportuno</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="box_feat" id="icon_3">
            <span></span>
            <h3>Pacientes</h3>
            <p>Desde aquí podras acceder de manera rápida y segura a tus resultados.</p>
          </div>
        </div>
      </div>
      <!-- /row -->
      <p class="text-center">Valoramos tu tiempo, por ello habilitamos las citas en línea, para que puedas agendar tus pruebas, desde donde estés.      </p>
      <p class="text-center"><a href="{{ url('examenes') }}" class="btn_1 medium">RESERVA TU CITA</a></p>

    </div>
    <!-- /container -->

    <div class="bg_color_1">
      <div class="container margin_120_95">
        <div class="main_title">
          <h2>Promociones</h2>
          <p>Conoce nuestros paquetes promocionales</p>
        </div>
        <div id="reccomended" class="owl-carousel owl-theme">
          @foreach ($promociones as $prom)
          <div class="item">
            <a href="#">
              <div class="views"><i class="icon-money"></i>{{$prom->price}}</div>
              <img src="{{Storage::url($prom->image)}}" alt="">
            </a>
          </div>
          @endforeach
          
        </div>
        <!-- /carousel -->
      </div>
      <!-- /container -->
    </div>
    <!-- /white_bg -->

    <div class="container margin_120_95">
      <div class="main_title">
        <h2>Destacados</h2>
        <p>Ofrecemos un servicio integral, abarcando desde los análisis clínicos más básicos de rutina hasta los más sofisticados de genética molecular.</p>
      </div>
      <div class="row justify-content-center">
        <div class="col-xl-4 col-lg-5 col-md-6">
          <div class="list_home">
            <div class="list_title">
              <i class="icon_pin_alt"></i>
              <h3>COVID 19</h3>
            </div>
            <ul>
              <li><a href="#0"><strong>S/ 23</strong>Prueba Molecular Rapida</a></li>
              <li><a href="#0"><strong>23</strong>Prueba Rapida Antigena</a></li>
              <li><a href="#0"><strong>23</strong>Prueba de Elisa</a></li>
              <li><a href="#0"><strong>23</strong>Prueba Rapida de Anticuerpo</a></li>
              <li><a href="#0"><strong>23</strong>Prueba Nolecular PCR</a></li>
              <li><a href="#0"><strong>23</strong>Prueba Rapida de Antigenos</a></li>
              <li><a href="#0"><strong>23</strong>Prueba Molecular</a></li>
              <li><a href="#0"><strong>23</strong>Prueba Rapida</a></li>
              <li><a href="#0">Ver mas...</a></li>
            </ul>
          </div>
        </div>
        <div class="col-xl-4 col-lg-5 col-md-6">
          <div class="list_home">
            <div class="list_title">
              <i class="icon_archive_alt"></i>
              <h3>IMUNOBIOLOGOS</h3>
            </div>
            <ul>
              <li><a href="#0"><strong>23</strong>Allergist</a></li>
              <li><a href="#0"><strong>23</strong>Cardiologist</a></li>
              <li><a href="#0"><strong>23</strong>Chiropractor</a></li>
              <li><a href="#0"><strong>23</strong>Dentist</a></li>
              <li><a href="#0"><strong>23</strong>Dermatologist</a></li>
              <li><a href="#0"><strong>23</strong>Gastroenterologist</a></li>
              <li><a href="#0"><strong>23</strong>Ophthalmologist</a></li>
              <li><a href="#0"><strong>23</strong>Optometrist</a></li>
              <li><a href="#0"><strong>23</strong>Pediatrician</a></li>
              <li><a href="#0">More....</a></li>
            </ul>
          </div>
        </div>
      </div>
      <!-- /row -->
    </div>
    <!-- /container -->

    <div id="app_section">
      <div class="container">
        <div class="row justify-content-around">
          <div class="col-md-5">
            <p><img src="{{asset('frontend/img/app_img.svg')}}" alt="" class="img-fluid" width="500" height="433"></p>
          </div>
          <div class="col-md-6">
            <small>ONLINE</small>
            <h3>Rerva <strong>TU CITA</strong> ahora!</h3>
            <p class="lead">Valoramos tu tiempo, por ello habilitamos las citas en línea, para que puedas agendar tus pruebas, desde donde estés..</p>
            <div class="app_buttons wow" data-wow-offset="100">
              <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 43.1 85.9" style="enable-background:new 0 0 43.1 85.9;" xml:space="preserve">
              <path stroke-linecap="round" stroke-linejoin="round" class="st0 draw-arrow" d="M11.3,2.5c-5.8,5-8.7,12.7-9,20.3s2,15.1,5.3,22c6.7,14,18,25.8,31.7,33.1" />
              <path stroke-linecap="round" stroke-linejoin="round" class="draw-arrow tail-1" d="M40.6,78.1C39,71.3,37.2,64.6,35.2,58" />
              <path stroke-linecap="round" stroke-linejoin="round" class="draw-arrow tail-2" d="M39.8,78.5c-7.2,1.7-14.3,3.3-21.5,4.9" />
            </svg>
            <a href="{{ url('examenes') }}" class="btn_1 medium">RESERVA TU CITA</a>
            </div>
          </div>
        </div>
        <!-- /row -->
      </div>
      <!-- /container -->
    </div>
    
    {{-- <div class="cta_subscribe">
      <div class="container-fluid h-100">
        <div class="row h-100 justify-content-center align-items-center">
          <div class="col-md-6 p-0">
            <div class="block_1">
              <figure><img src="{{asset('frontend/img/doctors_icon.svg')}}" alt=""></figure>
              <h3>Are you a Doctor?</h3>
              <p>The service allows you to get maximum visibility online and to manage appointments and contacts coming from the site, in a simple and fast way.</p>
              <a href="register-doctor.html" class="btn_1">Read more</a>
            </div>
          </div>
          <div class="col-md-6 p-0">
            <div class="block_2">
              <figure><img src="{{asset('frontend/img/patient_icon.svg')}}" alt=""></figure>
              <h3>Are you a patient?</h3>
              <p>Choosing a specialist has never been so fast! You can filter search results by location and medical specialization, and book medical examination online.</p>
              <a href="register.html" class="btn_1">Read more</a>
            </div>
          </div>
        </div>
        <!-- /row -->
      </div>
      <!-- /container -->
    </div> --}}
@endsection

@section('scripts')
{{-- <script>
    (function () {
        var options = {
            //facebook: "151106194904360", // Facebook page ID
            whatsapp: "+{{setting()->whatsapp}}", // WhatsApp number
            call_to_action: "Envíanos un mensaje", // Call to action
            button_color: "#129BF4", // Color of button
            position: "left", // Position may be 'right' or 'left'
            order: "whatsapp,facebook", // Order of buttons
        };
        var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
</script> --}}

@endsection