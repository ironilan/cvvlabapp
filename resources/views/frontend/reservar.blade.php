@extends('layouts.frontend')

@section('contenido')
<div id="breadcrumb">
	<div class="container">
		<ul>
			<li><a href="#">Home</a></li>
			<li><a href="#">Examen</a></li>
			<li>Reservar</li>
		</ul>
	</div>
</div>
		<!-- /breadcrumb -->
		
<div class="container margin_60">
	<div class="row">
		<aside class="col-xl-4 col-lg-4" id="sidebar">
			@include('frontend.components.cotizador')
		</aside>
		<!-- /asdide -->
		
		<div class="col-xl-8 col-lg-8">
			
			<div class="box_general_2 add_bottom_45">
				<div class="main_title_4">
					<h3><i class="icon_circle-slelected"></i>SELECCIONA LA FECHA Y HORA</h3>
				</div>
				
				@include('frontend.components.calendar')
				<!-- /row -->

				<hr>
				<div class="text-center">
					@if (!Auth::guest())
					<form action="{{ route('crear.pedido') }}" method="post">
						@csrf
						<button type="submit" class="btn_1 medium btn_disabled btn_ir" disabled="true">CREAR PEDIDO</button>
					</form>
					@else
					<button type="button" class="btn_1 medium btn_disabled btn_ir btn_open_modal" disabled="true" data-toggle="modal" data-target="#exampleModal">CREAR PEDIDO</button>
					@endif
				</div>
				
			</div>
			<!-- /box_general -->
			
			<div class="tabs_styled_2">
				<ul class="nav nav-tabs" role="tablist">
					<li class="nav-item">
						<a class="nav-link active" id="general-tab" data-toggle="tab" href="#general" role="tab" aria-controls="general" aria-expanded="true">INDICACIÓNES</a>
					</li>
				</ul>
				<!--/nav-tabs -->

				<div class="tab-content">
					<div class="tab-pane fade show active" id="general" role="tabpanel" aria-labelledby="general-tab">
						
						<p class="lead add_bottom_30">Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
						<div class="indent_title_in">
							<i class="pe-7s-user"></i>
							<h3>Professional statement</h3>
							<p>Mussum ipsum cacilds, vidis litro abertis.</p>
						</div>
						<div class="wrapper_indent">
							<p>Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Nullam mollis. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapi.</p>
							<h6>Specializations</h6>
							<div class="row">
								<div class="col-lg-6">
									<ul class="bullets">
										<li>Abdominal Radiology</li>
										<li>Addiction Psychiatry</li>
										<li>Adolescent Medicine</li>
										<li>Cardiothoracic Radiology </li>
									</ul>
								</div>
								<div class="col-lg-6">
									<ul class="bullets">
										<li>Abdominal Radiology</li>
										<li>Addiction Psychiatry</li>
										<li>Adolescent Medicine</li>
										<li>Cardiothoracic Radiology </li>
									</ul>
								</div>
							</div>
							<!-- /row-->
						</div>
						<!-- /wrapper indent -->
					</div>
					<!-- /tab_2 -->

					
				</div>
				<!-- /tab-content -->
			</div>
			<!-- /tabs_styled -->
		</div>
		<!-- /col -->
	</div>
	<!-- /row -->
</div>

@endsection

@section('modal')
<div class="app_modal" id="modalAuth" >
	<div class="app_content_modal">
		<div class="app_close">
			<span class="btn_close_modal">Cerrar</span>
		</div>
		<div class="app_login">
			<div class="app_modal_logo">
				<img src="{{ asset('frontend/img/logo-ccvlab.png') }}" alt="">
				<h6>Login</h6>
			</div>
			<div class="app_card_modal">
				<form id="formLogin">
					<div class="form-group">
						<label for="email">Email</label>
						<input type="text" class="form-control criterio" placeholder="Email">
					</div>
					<div class="form-group">
						<label for="password">Password</label>
						<input type="password" class="form-control criterio" placeholder="********">
					</div>
					<div class="form-group ">
						<div class="row">
							<div class="col app_reg_">
								<a href="javascript:void(0)" class="font-weight-bold app_link_reg">¿Aún no tienes una cuenta?</a>
							</div>
							<div class="col text-right">
								<button class="btn_1 medium  btn_ir ">Login</button>
							</div>
						</div>
						
					</div>
				</form>
			</div>
		</div>
		<div class="app_register">
			<h4>Crear cuenta</h4>
			<div class="app_card_modal">
				<form id="formRegister">
					<div class="form-group">
						<label for="email">Nombre</label>
						<input type="text" class="form-control criterio" placeholder="Nombre">
					</div>
					<div class="form-group">
						<label for="email">Email</label>
						<input type="text" class="form-control criterio" placeholder="Email">
					</div>
					<div class="form-group">
						<label for="password">Password</label>
						<input type="password" class="form-control criterio" placeholder="********">
					</div>
					<div class="form-group ">
						<div class="row">
							<div class="col app_reg_">
								<a href="javascript:void(0)" class="font-weight-bold app_link_log">¿Ya tienes una cuenta?</a>
							</div>
							<div class="col text-right">
								<button class="btn_1 medium  btn_ir">Crear cuenta</button>
							</div>
						</div>
						
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection

@section('estilos')
<link href="{{ asset('frontend/css/date_picker.css') }}" rel="stylesheet">

@endsection

@section('scripts')
	<script src="{{ asset('frontend/js/bootstrap-datepicker.js') }}"></script>
	@php
		$fecha = Session::get('fecha');
	@endphp
    <script>
	$('#calendar').datepicker({
	    todayHighlight: true,
		daysOfWeekDisabled: [0],
		weekStart: 1,
	    format: "yyyy-mm-dd",
	    startDate: '+1d',
		datesDisabled: ["2017/10/20", "2017/11/21","2017/12/21", "2018/01/21","2018/02/21","2018/03/21"],
		
	}).datepicker("setDate", new Date());		
	</script>




	<script>

		//console.log(new Date());
		
		$('#calendar').on('changeDate', function(event) {
		    let fecha = event.format();

		    //ajax para carrito
		    let url = `{{ url('selectFecha') }}?fecha=${fecha}`;
		    //console.log(fecha);
		    $.get(url, res => {
		    	

		    });
		});


		$('input[name=radio_time]').click(() => {
			let hora = $('input[name=radio_time]:checked').val();
			//console.log(hora);

			//ajax para carrito
		    let url = `{{ url('selectHora') }}?hora=${hora}`;
		   
		    $.get(url, res => {
		    	
		    	if (res) {
		    		$('.btn_ir').removeClass('btn_disabled').attr('disabled', false);
		    	}else{
		    		$('.btn_ir').addClass('btn_disabled').attr('disabled', true);
		    	}

		    });
		});


		$('.app_link_reg').click(function(event) {
			$('.app_register').show();
			$('.app_login').hide();
		});

		$('.app_link_log').click(function(event) {
			$('.app_login').show();
			$('.app_register').hide();			
		});

		$('.btn_open_modal').click(() => {
			$('#modalAuth').show();
		});

		$('.btn_close_modal').click(() => {
			$('#modalAuth').hide();
		});
		
	</script>
@endsection