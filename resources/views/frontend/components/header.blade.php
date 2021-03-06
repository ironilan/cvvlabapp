<header class="header_sticky">  
    <a href="#menu" class="btn_mobile">
      <div class="hamburger hamburger--spin" id="hamburger">
        <div class="hamburger-box">
          <div class="hamburger-inner"></div>
        </div>
      </div>
    </a>
    <!-- /btn_mobile-->
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-6">
          <div id="logo_home">
            <h1><a href="{{url('/')}}" title="{{setting()->title}}" style="background-image: url('{{Storage::url('web/'.setting()->logo)}}')">{{setting()->title}}</a></h1>
          </div>
        </div>
        <div class="col-lg-9 col-6">
          <ul id="top_access">
            @guest
              <li><a href="{{ url('login') }}"><i class="pe-7s-user"></i></a></li>
              <li><a href="{{ url('register') }}"><i class="pe-7s-add-user"></i></a></li>
            @else
              <li class="avatar_content"><a href="javascript:void(0)">
                <img src="https://www.gravatar.com/avatar/{{md5(Auth::user()->email)}}" />
              </a></li>
              <div class="app_menu">
                <ul>
                  <li><a href="{{ url('micuenta') }}">Mi cuenta</a></li>
                  <li>
                    <a href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                  </li>
                </ul>
              </div>
            @endguest
            
          </ul>
          <nav id="menu" class="main-menu">
            <ul>
              <li>
                <span><a href="{{url('/')}}">INICIO</a></span>
              </li>
              <li>
                <span><a href="{{url('/examenes')}}">EXAMENES</a></span>
              </li>
              <li>
                <span><a href="{{url('/promociones')}}">PROMOCIONES</a></span>
              </li>
              <li><span><a href="{{url('/resultados')}}" class="">VER RESULTADOS</a></span></li>
            </ul>
          </nav>
          <!-- /main-menu -->
        </div>
      </div>
    </div>
    <!-- /container -->
  </header>
  <!-- /header -->