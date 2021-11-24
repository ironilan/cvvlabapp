@extends('layouts.frontend')

@section('contenido')

{{-- @include('frontend.components.slider') --}}

<section class="app_slider_contet" style="">
  <div class="slider_app">
    @foreach ($banners as $key => $banner)
    <div class="app_item">
      <a href="{{ url('examenes') }}?idexamen={{$banner->examen}}">
        <img src="{{Storage::url('web/'.$banner->image)}}" alt="" style="width: 100%;">
        <div class="app_texto_slide">
          <h2 class="">{{$banner->title}}</h2>
          <h4 class="">{{$banner->subtitle}}</h4>
        </div>
      </a>
    </div>
    @endforeach
  </div>
</section>


@include('frontend.components.resultados')
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
            <a href="{{url('promociones')}}?idprom={{$prom->id}}">
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
    
    
@endsection

@section('scripts')


<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<script>
  
$('.slider_app').slick({
  arrows: true,
  dots: true,
  infinite: true,
  speed: 500,
  fade: true,
  autoplay: true,
  slidesToShow: 1,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 900,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});
</script>

@endsection

@section('estilos')
<!-- Add the slick-theme.css if you want default styling -->
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<!-- Add the slick-theme.css if you want default styling -->
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>

@endsection