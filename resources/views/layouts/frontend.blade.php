<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="{{setting()->description}}">
  <meta name="keywords" content="{{setting()->keywords}}">
  <meta name="author" content="Alexis Valdez">

  <meta name="lang" content="es_ES" />
  <meta name="copyright" content="©{{Date('Y')}}. Todos los derechos reservados.">
  <!-- Twitter START -->
  <meta name="twitter:card" content="summary">
  <meta name="twitter:site" content="@virgintelco">
  <meta name="twitter:creator" content="@virgintelco">
  <meta name="twitter:title" content="{{setting()->title}}">
  <meta name="twitter:description" content="{{setting()->description}}">
  <meta name="twitter:image" content="{{Storage::url('web/'.setting()->logo)}}">
  <!-- Twitter END -->
  <!-- Facebook START -->
  <meta name="facebook-domain-verification" content="m7j5tmpi1n69bogqmsm29xy4dcg7sk" />
  <meta property="og:locale" content="es_ES">
  <meta property="og:type" content="website">
  <meta property="og:image" content="website">
  <meta property="og:site_name" content="{{setting()->title}}">
  <meta property="og:title" content="{{setting()->title}}">
  <meta property="og:description" content="{{setting()->description}}">
  <meta property="og:url" content="{{Storage::url('web/'.setting()->logo)}}">
  <!-- Facebook END -->
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
  <link rel="canonical" href="{{ url('/') }}">
  <!-- Favicons -->
  <link rel="apple-touch-icon" sizes="180x180" href="{{Storage::url('web/'.setting()->favicon)}}">
  <link rel="icon" type="image/png" sizes="192x192" href="{{Storage::url('web/'.setting()->favicon)}}">
  <link rel="icon" type="image/png" sizes="384x384" href="{{Storage::url('web/'.setting()->favicon)}}">
  <link rel="icon" type="image/png" sizes="16x16" href="{{Storage::url('web/'.setting()->favicon)}}">
  <link rel="icon" type="image/png" sizes="32x32" href="{{Storage::url('web/'.setting()->favicon)}}">
  <link rel="icon" type="image/x-icon" href="{{Storage::url('web/'.setting()->favicon)}}">
  {{-- <link rel="manifest" href="img/favicons/site.webmanifest.json"> --}}
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="{{Storage::url('web/'.setting()->favicon)}}">
  <meta name="theme-color" content="#ffffff">



  <title>{{setting()->title}}</title>

  <!-- Favicons-->
  <link rel="shortcut icon" href="{{Storage::url('web/'.setting()->favicon)}}" type="image/x-icon">
  <link rel="apple-touch-icon" type="image/x-icon" href="{{Storage::url('web/'.setting()->favicon)}}">
  <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="{{Storage::url('web/'.setting()->favicon)}}">
  <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="{{Storage::url('web/'.setting()->favicon)}}">
  <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="{{Storage::url('web/'.setting()->favicon)}}">

  <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">


 

  <!-- BASE CSS -->
  <link href="{{asset('frontend/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/css/style.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/css/menu.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/css/vendors.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/css/icon_fonts/css/all_icons_min.css')}}" rel="stylesheet">
  
  <!-- REVOLUTION STYLE SHEETS -->
  <link href="{{asset('frontend/rev-slider-files/css/settings.css')}}" rel="stylesheet">
    
  <!-- YOUR CUSTOM CSS -->
  <link href="{{asset('frontend/css/custom.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/css/estilos.css')}}" rel="stylesheet">


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />


  @yield('estilos')

  <style>
    .cr{
      color: red;
    }

    .app_menu{
      position: absolute;
      z-index: 10000;
      background: white;
      width: 130px;
      display: none;
    }


    .app_menu ul li a{
      padding: 5px 0!important;
      display: block;
    }


    .app_menu ul li a:hover{
      text-decoration: underline;
    }

    .show_menu{
      display: block!important;
    }
  </style>
  
</head>

<body>
  
  <div id="preloader" class="Fixed">
    <div data-loader="circle-side"></div>
  </div>
  <!-- /Preload-->
  
  <div id="page">   
  

  @include('frontend.components.header')
  
  <main>
    
    <!-- /REVOLUTION SLIDER -->
    @yield('contenido')



    
  </main>
  <!-- /main content -->
  
    @include('frontend.components.footer')
  <!--/footer-->
  </div>
  <!-- page -->

  @yield('modal')

  <div id="toTop"></div>
  <!-- Back to top button -->

  <!-- COMMON SCRIPTS -->
  <script src="{{asset('frontend/js/jquery-3.5.1.min.js')}}"></script>
  <script src="{{asset('frontend/js/common_scripts.min.js')}}"></script>
  <script src="{{asset('frontend/js/functions.js')}}"></script>


  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  
  <!-- REVOLUTION SLIDER SCRIPTS -->
  <script type="text/javascript" src="{{asset('frontend/rev-slider-files/js/jquery.themepunch.tools.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('frontend/rev-slider-files/js/jquery.themepunch.revolution.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('frontend/rev-slider-files/js/extensions/revolution.extension.actions.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('frontend/rev-slider-files/js/extensions/revolution.extension.carousel.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('frontend/rev-slider-files/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('frontend/rev-slider-files/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('frontend/rev-slider-files/js/extensions/revolution.extension.migration.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('frontend/rev-slider-files/js/extensions/revolution.extension.navigation.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('frontend/rev-slider-files/js/extensions/revolution.extension.parallax.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('frontend/rev-slider-files/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('frontend/rev-slider-files/js/extensions/revolution.extension.video.min.js')}}"></script>
  <script type="text/javascript">
      var tpj=jQuery;
      var revapi72;
      tpj(document).ready(function() {
        if(tpj("#rev_slider_72_1").revolution == undefined){
          revslider_showDoubleJqueryError("#rev_slider_72_1");
        }else{
          revapi72 = tpj("#rev_slider_72_1").show().revolution({
            sliderType:"standard",
            jsFileLocation:"rev-slider-files/js/",
            sliderLayout:"auto",
            dottedOverlay:"none",
            delay:9000,
            navigation: {
              keyboardNavigation:"off",
              keyboard_direction: "horizontal",
              mouseScrollNavigation:"off",
                             mouseScrollReverse:"default",
              onHoverStop:"off",
              touch:{
                touchenabled:"on",
                touchOnDesktop:"off",
                swipe_threshold: 75,
                swipe_min_touches: 1,
                swipe_direction: "horizontal",
                drag_block_vertical: false
              }
              ,
              arrows: {
                style:"gyges",
                enable:true,
                hide_onmobile:true,
                hide_under:560,
                hide_onleave:true,
                hide_delay:200,
                hide_delay_mobile:1200,
                tmp:'',
                left: {
                  h_align:"left",
                  v_align:"center",
                  h_offset:20,
                                    v_offset:0
                },
                right: {
                  h_align:"right",
                  v_align:"center",
                  h_offset:20,
                                    v_offset:0
                }
              }
            },
            visibilityLevels:[1240,1024,778,480],
            gridwidth:1240,
            gridheight:600,
            lazyType:"none",
            shadow:0,
            spinner:"spinner0",
            stopLoop:"off",
            stopAfterLoops:-1,
            stopAtSlide:-1,
            shuffle:"off",
            autoHeight:"off",
            disableProgressBar:"on",
            hideThumbsOnMobile:"off",
            hideSliderAtLimit:0,
            hideCaptionAtLimit:0,
            hideAllCaptionAtLilmit:0,
            debugMode:false,
            fallbacks: {
              simplifyAll:"off",
              nextSlideOnWindowFocus:"off",
              disableFocusListener:false,
            }
          });
        }
      }); /*ready*/



      $('.avatar_content').click(function(){
        $('.app_menu').toggleClass('show_menu');
      });
  </script>

  @yield('scripts')

</body>

</html>