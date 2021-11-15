@extends('layouts.frontend')

@section('contenido')
<div id="breadcrumb">
	<div class="container">
		<ul>
			<li><a href="#">Home</a></li>
			<li><a href="#">Category</a></li>
			<li>Page active</li>
		</ul>
	</div>
</div>
<!-- /breadcrumb -->

<div class="container margin_120">
	<div class="row justify-content-center">
		<div class="col-lg-8">
			<div id="confirm" >
				<div class="icon add_bottom_15 h1" style="font-size: 8rem;">
					<i class="icon_error-triangle_alt"></i>
				</div>
			<h2>Hubo un Error al procesar el Pago</h2>
			<p>Si consideras que hubo un error contactanos <a href="tel://982690461"><i class="icon_mobile"></i> 982 690 461</a><br></p>
			</div>
		</div>
	</div>
	<!-- /row -->
</div>
@endsection