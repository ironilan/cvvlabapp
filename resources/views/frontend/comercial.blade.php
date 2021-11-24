@extends('layouts.frontend')
@section('contenido')

<div id="breadcrumb">
	<div class="container">
		<ul>
			<li><a href="#">Home</a></li>
			<li>Comercial</li>
		</ul>
	</div>
</div>
<div class="container margin_60_35">
	<div class="row">
		<div class="col-md-2"></div>
		<!--/aside -->
		<div class=" col-lg-8 col-md-8 ml-auto">
			<div class="box_general">
				<h3>Referencia - Empresas</h3>
				<p>
					Háblanos sobre cómo podemos ayudar a tu empresa.
				</p>
				<div>
					<div id="message-contact"></div>
					<form method="post" id="empresasForm">
						<div class="row">
							<div class="col-md-12 col-sm-6">
								<div class="form-group">
									<input type="text" class="form-control" id="name_contact" placeholder="Nombre de la empresa" name="nombre">
								</div>
							</div>
							
						</div>
						<div class="row">
							<div class="col-md-6 col-sm-6">
								<div class="form-group">
									<input type="text" class="form-control" id="lastname_contact" name="ruc" placeholder="RUC">
								</div>
							</div>
							<div class="col-md-6 col-sm-6">
								<div class="form-group">
									<input type="text" class="form-control" id="razonsocial_contact" name="contacto" placeholder="Persona de contacto">
								</div>
							</div>
							<div class="col-md-6 col-sm-6">
								<div class="form-group">
									<input type="number" class="form-control" id="ruc_contact" name="celular" placeholder="Celular de contacto">
								</div>
							</div>
							<div class="col-md-6 col-sm-6">
								<div class="form-group">
									<input type="email" id="email_contact" name="email" class="form-control" placeholder="Correo de contacto">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<textarea rows="5" id="message_contact" name="mensaje" class="form-control" style="height:100px;" placeholder="Escribe tu consulta"></textarea>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<input type="text" id="verify_contact" class=" form-control" placeholder=" 3 + 1 =">
								</div>
							</div>
						</div>
						<input type="submit" value="Enviar" class="btn_1 add_top_20" id="submit-contact">
					</form>
				</div>
				<!-- /col -->
			</div>
		</div>
		<!-- /col -->
		<div class="col-md-2"></div>
	</div>
	<!-- End row -->
</div>


@endsection