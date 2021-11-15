@extends('layouts.frontend')

@section('contenido')

<div id="breadcrumb">
			<div class="container">
				<ul>
					<li><a href="#">Home</a></li>
					<li>Promociones</li>
				</ul>
			</div>
		</div>
		<!-- /breadcrumb -->

		<div class="container margin_60">
			<div class="main_title">
				<h1>PROMOCIONES</h1>
				<p>NOMBRE DE LA PROMO.</p>
			</div>
			<div class="row">
				<div class="col-lg-8">
					@foreach ($promociones as $prom)
					<article class="blog wow fadeIn">
						<div class="row no-gutters">
							<div class="col-lg-4">
								<figure>
									<a href="#"><img src="{{Storage::url($prom->image)}}" alt=""><div class="preview"><span>Ver más</span></div></a>
								</figure>
							</div>
							<div class="col-lg-8">
								<div class="post_info">
									<small>NOMBRE DE PROMO</small>
									<h3><a href="#">{{$prom->title}}</a></h3>
									<p>{{$prom->description}}</p>
									<ul>
										<li>
											<a style="background: #fff;border: 2px solid #1eaccc;color: #1eaccc;padding: 5px 20px;font-weight: 500;border-radius: 30px;" href="javascript:void(0)" onclick="addCart({{$prom->id}})">AGREGAR A COTIZACIÓN</a>
										</li>
										
									</ul>
								</div>
							</div>
						</div>
					</article>
					@endforeach
					

					
					
					{{-- <nav aria-label="...">
						<ul class="pagination pagination-sm">
							<li class="page-item disabled">
								<a class="page-link" href="#" tabindex="-1">Previous</a>
							</li>
							<li class="page-item"><a class="page-link" href="#">1</a></li>
							<li class="page-item"><a class="page-link" href="#">2</a></li>
							<li class="page-item"><a class="page-link" href="#">3</a></li>
							<li class="page-item">
								<a class="page-link" href="#">Next</a>
							</li>
						</ul>
					</nav> --}}
					<!-- /pagination -->
				</div>
				<!-- /col -->
				<aside class="col-lg-4" id="sidebar">
					@include('frontend.components.cotizador')
				</aside>
				
				<!-- /aside -->
			</div>
			<!-- /row -->
		</div>
@endsection

@section('estilos')
<link href="{{ asset('frontend/css/blog.css') }}" rel="stylesheet">
@endsection


@section('scripts')
<script type="text/javascript">
	const addCart = (idexamen) => {
		let url = `{{ url('setCartExamen') }}?examen=${idexamen}`;

		$.get(url, res =>{
			$('#sidebar').html(res);
		})
	}
</script>

@endsection