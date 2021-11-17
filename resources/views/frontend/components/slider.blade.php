<div id="rev_slider_72_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="doctor_slider_1" data-source="gallery" style="margin:0px auto;background:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
      <div id="rev_slider_72_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.4.1">
        <ul>
          @foreach ($banners as $key => $banner)
          {{-- @if ($key == 0)
            @include('frontend.components.tipos_slider.slide1')
          @elseif($key == 1)
            @include('frontend.components.tipos_slider.slide2')
          @else
            @include('frontend.components.tipos_slider.slide3')
          @endif --}}
          @include('frontend.components.tipos_slider.slide1')
          @endforeach          
        </ul>
        <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
      </div>
    </div>