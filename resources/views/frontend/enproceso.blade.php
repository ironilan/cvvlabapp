@extends('layouts.frontend')

@section('contenido')
<div id="breadcrumb">
	<div class="container">
		<ul>
			<li><a href="#">Home</a></li>
			<li><a href="#">Pagos</a></li>
			<li>En proceso</li>
		</ul>
	</div>
</div>
<!-- /breadcrumb -->

<div class="container margin_120">
	<div class="row justify-content-center">
		<div class="col-lg-8">
			<div id="confirm" >
				<div class="icon add_bottom_15 h1" style="font-size: 8rem;">
					<i class="icon_clock" style="color: #F7B217;"></i>
				</div>
			<h2>Estamos evisando tu pago</h2>
			<p>Cuando este listo se mostraá en tu perfil -> <a href="{{ url('micuenta') }}">Mi cuenta</p>
			</div>
		</div>
	</div>
	<!-- /row -->
</div>
@endsection