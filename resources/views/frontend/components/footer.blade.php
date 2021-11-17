<footer>
    <div class="container margin_60_35">
      <div class="row">
        <div class="col-lg-3 col-md-12">
          <p>
            <a href="{{url('/')}}" title="Findoctor">
              <img src="{{Storage::url('web/'.setting()->logo)}}" data-retina="true" alt="" class="img-fluid">
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
              @if (setting()->facebook)
              <li><a href="{{setting()->facebook}}"><i class="social_facebook"></i></a></li>
              @endif
              @if (setting()->twitter)
              <li><a href="{{setting()->twitter}}"><i class="social_twitter"></i></a></li>
              @endif
              @if (setting()->linkedin)
              <li><a href="{{setting()->linkedin}}"><i class="social_linkedin"></i></a></li>
              @endif
              @if (setting()->instagram)
              <li><a href="{{setting()->instagram}}"><i class="social_instagram"></i></a></li>
              @endif
              @if (setting()->youtube)
              <li><a href="{{setting()->youtube}}"><i class="social_youtube"></i></a></li>
              @endif
            </ul>
          </div>
        </div>
      </div>
      <!--/row-->
      <hr>
      <div class="row">
        <div class="col-md-8">
          <ul id="additional_links">
            <li><a href="#0">Terminos y condiciones</a></li>
            
          </ul>
        </div>
        <div class="col-md-4">
          <div id="copy">© {{Date('Y')}} {{setting()->title}}</div>
        </div>
      </div>
    </div>
  </footer>


  <div class="whatsapp_chat_support wcs_fixed_right" id="example_1">
            <div class="wcs_button_label">
                ¿Tienes alguna duda?
            </div>  
            <div class="wcs_button wcs_button_circle">
                <span class="fab fa-whatsapp" style="font-size: 40px; padding-top: 4px;"></span>
            </div>  

            <div class="wcs_popup">
                <div class="wcs_popup_close">
                    <span class="fa fa-close"></span>
                </div>
                <div class="wcs_popup_content">
                    <div class="wcs_popup_header">
                        <strong>Escríbenos aquí</strong>
                        <br>
                        <div class="wcs_popup_header_description">Click en alguna de las siguientes burbujas</div>
                    </div>  
                    <div class="wcs_popup_person_container">
                        @foreach (whatsapp() as $wp)
                        <div class="wcs_popup_person" data-number="{{$wp->numero}}" data-default-msg="{{$wp->mensaje}}">
                            <div class="wcs_popup_person_img"><img src="{{Storage::url($wp->imagen)}}" alt=""></div>
                            <div class="wcs_popup_person_content">
                                <div class="wcs_popup_person_name">{{$wp->nombre}}</div>
                                <div class="wcs_popup_person_description">{{$wp->area}}</div>
                                <div class="wcs_popup_person_status">Estoy en línea</div>
                            </div>  
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>  