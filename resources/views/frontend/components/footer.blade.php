<footer>
    <div class="container margin_60_35">
      <div class="row">
        <div class="col-lg-3 col-md-12">
          <p>
            <a href="{{url('/')}}" title="Findoctor">
              <img src="{{asset('frontend/img/logo-ccvlab.png')}}" data-retina="true" alt="" width="163" height="36" class="img-fluid">
            </a>
          </p>
        </div>
        <div class="col-lg-3 col-md-4">
          <h5>Nosotros</h5>
          <ul class="links">
            <li><a href="{{ url('nosotros') }}">Sobre Nosotros</a></li>
            <li><a href="{{ url('examenes') }}">Examenes</a></li>
            <li><a href="{{ url('faq') }}">Preguntas Frecuentes</a></li>
            <li><a href="{{ url('login') }}">Login</a></li>
            <li><a href="{{ url('register') }}">Register</a></li>
          </ul>
        </div>
        <div class="col-lg-3 col-md-4">
          <h5>Intranet</h5>
          <ul class="links">
            <li><a href="#0">Doctores</a></li>
            <li><a href="#0">Empresas</a></li>
            <li><a href="#0">Pacientes</a></li>
            <li><a href="#0">Registrarme como Doctor</a></li>
            <li><a href="#0">Ver Resultados</a></li>
          </ul>
        </div>
        <div class="col-lg-3 col-md-4">
          <h5>Contactar</h5>
          <ul class="contacts">
            <li><a href="tel://{{setting()->cellphone}}"><i class="icon_mobile"></i> {{setting()->cellphone}}</a></li>
            <li><a href="mailto:{{setting()->email}}"><i class="icon_mail_alt"></i> {{setting()->email}}</a></li>
          </ul>
          <div class="follow_us">
            <h5>Síguenos</h5>
            <ul>
              <li><a href="{{setting()->facebook}}"><i class="social_facebook"></i></a></li>
              <li><a href="{{setting()->twitter}}"><i class="social_twitter"></i></a></li>
              <li><a href="{{setting()->linkedin}}"><i class="social_linkedin"></i></a></li>
              <li><a href="{{setting()->instagram}}"><i class="social_instagram"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
      <!--/row-->
      <hr>
      <div class="row">
        <div class="col-md-8">
          <ul id="additional_links">
            <li><a href="#0">Terms and conditions</a></li>
            <li><a href="#0">Privacy</a></li>
          </ul>
        </div>
        <div class="col-md-4">
          <div id="copy">© {{Date('Y')}} Findoctor</div>
        </div>
      </div>
    </div>
  </footer>