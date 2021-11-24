@extends('layouts.frontend')

@section('contenido')

<div id="breadcrumb">
			<div class="container">
				<ul>
					<li><a href="/">CCVLAB</a></li>
					<li>Sobre Nosotros</li>
				</ul>
			</div>
		</div>
		<!-- /breadcrumb -->

		<div class="bg_color_1">
			<div class="container margin_120_95">
				<div class="main_title">
					<h1>CCV LAB</h1>
					<p> Sobre Nosotros</p>
				</div>
				<div class="row justify-content-between">
					<div class="col-lg-6">
						<figure class="add_bottom_30">
							<img src="{{asset('frontend/img/logo-ccvlab-800x500.png')}}" class="img-fluid" alt="">
						</figure>
					</div>
					<div class="col-lg-5">
						<h4>Misión</h4>
						<p>Brindar un diagnóstico integral eficiente a nuestros pacientes, a través de nuestros servicios con personal altamente especializado y capacitado de mano con la tecnología e innovación de vanguardia, utilizando las herramientas óptimas para la tranquilidad de nuestros pacientes.</p>

						<br>
						<h4>Visión</h4>
						<p>Convertirnos en el mejor centro de diagnóstico en el país, contando con la tecnología y excelencia en nuestros servicios y creando consciencia preventiva hacia nuestros pacientes y a la comunidad.</p>

						
					</div>
				</div>
				<!--/row-->
			</div>
			<!--/container-->
		</div>
		<!--/bg_color_1-->
		
		
		
		<div class="">
			<div class="container margin_120_95">
				<div class="main_title">
					<h2>Testimonios</h2>
					<p>Lo que alguno de nuestros clientes comenta sobre nosotros.</p>
				</div>
				<div class="row">
			    <div class="col-md-4">
			        <div class="about-review">
                   
	                    <p class="text-center">"Desde el primer momento, me ayudaron con todos los mínimos detalles explicándome sobre los análisis clínicos que me realizaría. Estuvieron siempre disponibles y con el mismo entusiasmo desde el principio. Por eso no me queda más que agradecerles. Recomiendo sus servicios al 100%"</p>
					<div class="user_review text-center pl-0">
                    		<h4>Wilberto Aparicio Delgado</h4>
					</div>
			        </div>
			    </div>
			    <div class="col-md-4">
			        <div class="about-review">
                   
	                    <p class="text-center">"El servicio brindado por Ccvlab es realmente veloz y efectivo, la asesoría por el personal calificado brinda una gran satisfacción a todas nuestras interrogantes respecto a los exámenes de laboratorio, el portal web brinda un servicio integral de resultados en Línea, tanto informativo como interactivo"</p>
					<div class="user_review text-center pl-0">
                    		<h4>Susan Slone</h4>
					</div>
			        </div>
			    </div>
			  
			</div>
			
			</div>
			<!--/container-->
		</div>
		<!--/bg_color_1-->
		
	
@endsection