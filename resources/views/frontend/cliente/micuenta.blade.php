@extends('layouts.frontend')

@section('contenido')
<div id="breadcrumb">
	<div class="container">
		<ul>
			<li><a href="#">Home</a></li>
			<li>Mi cuenta</li>
		</ul>
	</div>
</div>
		
<div class="container margin_60">
	<div class="row">		
		<aside class="col-xl-3 col-lg-4" id="sidebar">
			<div class="box_profile">
				<figure>
					<img src="https://www.gravatar.com/avatar/{{md5($user->email)}}" alt="" class="img-fluid">
				</figure>
				<small>Sección clientest</small>
				<h1>{{$user->name}}</h1>
				
				
				<ul class="contacts">
					<li><h6>Dirección</h6>{{$user->address}}</li>
					<li><h6>Teléfono</h6><a href="tel://{{$user->cellphone}}">+{{$user->cellphone}}</a></li>
				</ul>
				<div class="text-center"><a href="{{setting()->link_resultados}}" target="_blank">Ver mis resultados</a></div>
			</div>
		</aside>
		
		<div class="col-xl-9 col-lg-8">

			<div class="tabs_styled_2">
				<ul class="nav nav-tabs" role="tablist">
					<li class="nav-item">
						<a class="nav-link active" id="book-tab" data-toggle="tab" href="#book" role="tab" aria-controls="book">Mi Perfil</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="general-tab" data-toggle="tab" href="#general" role="tab" aria-controls="general" aria-expanded="true">Historial de Compras</a>
					</li>
					
				</ul>

				<div class="tab-content">

					<div class="tab-pane fade show active" id="book" role="tabpanel" aria-labelledby="book-tab">
						<p class="lead add_bottom_30">Completa tus datos.</p>
						<form method="post" autocomplete="off" id="formPerfil">
							<div class="row">
							<div class="col-md-6 col-sm-6">
								<div class="form-group">
									<input type="text" class="form-control" value="{{$user->name}}" name="name" placeholder="Nombre">
									<span class="cr res_name"></span>
								</div>
							</div>
							<div class="col-md-6 col-sm-6">
								<div class="form-group">
									
									<select name="type_doc" class="form-control" >
										<option value="">Selecciona un tipo de doc...</option>
										<option value="dni" {{$user->type_doc == 'dni' ? 'selected' : ''}}>DNI</option>
										<option value="ce" {{$user->type_doc == 'ce' ? 'selected' : ''}}>Carnet de extrangería</option>
									</select>
									<span class="cr res_type_doc"></span>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 col-sm-6">
								<div class="form-group">
									<input type="text" class="form-control" name="num_doc" placeholder="Número de documento" value="{{$user->num_doc}}">
								</div>
							</div>
							<div class="col-md-6 col-sm-6">
								<div class="form-group">
									<select name="sex" class="form-control" >
										<option value="">Selecciona un género...</option>
										<option value="m" {{$user->sex == 'm' ? 'selected' : ''}}>Masculino</option>
										<option value="f" {{$user->sex == 'f' ? 'selected' : ''}}>Femenino</option>
									</select>
									<span class="cr res_sex"></span>
								</div>
							</div>
						</div>
						<div class="row">									
							<div class="col-md-6">
								<div class="form-group">
									<input type="text" value="{{$user->cellphone}}" name="cellphone" class="form-control" placeholder="Celular">
									<span class="cr res_cellphone"></span>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<input type="text" value="{{$user->country}}" name="country" class="form-control" placeholder="País">
									<span class="cr res_pais"></span>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<input type="text" value="{{$user->address}}" name="address" class="form-control" placeholder="Dirección">
									<span class="cr res_address"></span>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 col-sm-6">
								<div class="form-group">
									<input type="email" value="{{$user->email}}" name="email" class="form-control" placeholder="Correo">
									<span class="cr res_email"></span>
								</div>
							</div>
							<div class="col-md-6 col-sm-6">
								<div class="form-group">
									<input type="text"  name="password" class="form-control" placeholder="password *****">
								</div>
							</div>
						</div>
						
					
						
						<hr>
						<p class="text-center">
							<button type="submit" class="btn_1 medium">
								Actualizar
							</button>
						</p>
						</form>					
						
					</div>
					
					<div class="tab-pane fade" id="general" role="tabpanel" aria-labelledby="general-tab">
						
						<div class="indent_title_in">
							<i class="pe-7s-cash"></i>
							<h3>Historial de Compras</h3>
							<p>Para ve el detalle has click sobre una cita </p>
						</div>
						<div class="wrapper_indent">


							<div class="widget">
								
								<ul class="cats">
									@foreach ($user->pedidos as $pedido)
									<li>
										<a href="#" class="openBtn" onclick="showModal({{$pedido->id}})" >
											<strong>Cita # {{$pedido->id}}</strong> - {{Carbon\Carbon::parse($pedido->created_at)->format('d/m/Y H:i')}} - <span>S/.{{$pedido->ammount}}</span>
											@if ($pedido->status == 'finalizado')
											<span class="badge badge-success">Finalizado</span>
											@elseif($pedido->status == 'en_proceso')
											<span class="badge badge-warning">En proceso</span>
											@else
											<span class="badge badge-danger">Pendiente</span>
											@endif
										</a>
									</li>																	
									@endforeach		
								</ul>
							</div>


							
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


@endsection

@section('modal')
<div class="app_modal" id="modalDetail" >
	<div class="app_content_modal">
		<div class="app_close">
			<span class="btn_close_modal">Cerrar</span>
		</div>
		<div class="app_login" id="responseDetalle">
			
		</div>
		
	</div>
</div>
@endsection

@section('scripts')

<script>
	    $('#formPerfil').submit(function(e){
	        e.preventDefault();
	        
	        let token = '{{ csrf_token() }}';
	        let data = new FormData(document.getElementById("formPerfil"));
	        let url = '{{ url('micuenta') }}';
	        
	        $.ajax({
	            headers: { 'X-CSRF-TOKEN': token },
	            url: url,
	            type: 'POST',
	            contentType: false,
	            data: data,
	            processData: false,
	            success: res => {
	            	$('.cr').empty();
	               toastr.success('¡Se ha actualizado con éxito!');
	               
	            },
	            error: error => {
	                console.log(error);
	                $('.cr').empty();
	                const response = error.responseJSON.errors;

	                if (response.sex) {
	                	$('.res_sex').empty().append('El género es requerido.');
	                }

	                if (response.name) {
	                	$('.res_name').empty().append('El nombre es requerido.');
	                }

	                if (response.type_doc) {
	                	$('.res_type_doc').empty().append('El tipo de doc es requerido.');
	                }

	                if (response.num_doc) {
	                	$('.res_num_doc').empty().append('El documento es requerido.');
	                }

	                if (response.country) {
	                	$('.res_country').empty().append('El país es requerido.');
	                }

	                if (response.cellphone) {
	                	$('.res_cellphone').empty().append('El celular es requerido.');
	                }


	                if (response.email) {
	                	$('.res_email').empty().append('El email debe ser un email válido.');
	                }


	            }
	        });
	    });


	    const showModal = id => {
	    	$('#modalDetail').show();
	    	let url = `{{ url('micuenta/detalle_pedido') }}?id=${id}`;

	    	$.get(url, function(res){
	    		$('#responseDetalle').html(res);
	    	});
	    }


	    $('.btn_close_modal').click(() => {
			$('#modalDetail').hide();
		});

</script>
@endsection

@section('estilos')
<style>
	.cats li{
		padding: 10px 0;
	}

	#modalDetail{
		display: none;
	}
</style>

@endsection