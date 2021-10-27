<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Find easily a doctor and book online an appointment">
  <meta name="author" content="Ansonika">
  <title>{{setting()->title}}</title>

  <!-- Favicons-->
  <link rel="shortcut icon" href="{{asset('frontend/img/favicon.ico')}}" type="image/x-icon">
  <link rel="apple-touch-icon" type="image/x-icon" href="{{asset('frontend/img/apple-touch-icon-57x57-precomposed.png')}}">
  <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="{{asset('frontend/img/apple-touch-icon-72x72-precomposed.png')}}">
  <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="{{asset('frontend/img/apple-touch-icon-114x114-precomposed.png')}}">
  <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="{{asset('frontend/img/apple-touch-icon-144x144-precomposed.png')}}">

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


  @yield('estilos')
  
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

  <div id="toTop"></div>
  <!-- Back to top button -->

  <!-- COMMON SCRIPTS -->
  <script src="{{asset('frontend/js/jquery-3.5.1.min.js')}}"></script>
  <script src="{{asset('frontend/js/common_scripts.min.js')}}"></script>
  <script src="{{asset('frontend/js/functions.js')}}"></script>
  
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
  </script>

  @yield('scripts')

</body>

</html>