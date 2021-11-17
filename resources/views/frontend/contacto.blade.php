@extends('layouts.frontend')

@section('contenido')
<div id="breadcrumb">
	<div class="container">
		<ul>
			<li><a href="#">Home</a></li>
			<li>Contacto</li>
		</ul>
	</div>
</div>
<div class="container margin_60_35">
			<div class="row">
				<aside class="col-lg-3 col-md-4">
					<div id="contact_info">
						<h2>¿Tienes alguna consulta?</h3>

						<p>
							<h4>
							<i class="cspt-enginir-icon cspt-enginir-icon-mail"></i>
							{{setting()->address}}
							
							</h4>
						</p>
						
							
						<p>
							<h3>
								<a href="tel://982690461<"><i class="icon_mobile"></i>{{setting()->cellphone}}</a><br>
							</h3>
						</p>
						<p>
							<h3>
								<a href="mailto:referencias@ccvlab.pe"><i class="icon_mail_alt"></i> {{setting()->email}}</a>
							</h3>
						</p>
						
					
						<ul>
							<li><strong>Horario de Atención</strong>
								
								<small>Lunes to Sabado 7am - 7pm</small>
							</li>
							
						</ul>
					</div>
				</aside>
				<!--/aside -->
				<div class=" col-lg-8 col-md-8 ml-auto">
					<div class="box_general">
						<h3>Referencia - Empresas</h3>
						<p>
							Contáctanos y cuentanos de tu empresa

						</p>
						<div>
							<div id="message-contact"></div>
							<form method="post" action="assets/contact.php" id="contactform">
								<div class="row">
									<div class="col-md-6 col-sm-6">
										<div class="form-group">
											<input type="text" class="form-control" id="name_contact" name="name_contact" placeholder="Nombre">
										</div>
									</div>
									<div class="col-md-6 col-sm-6">
										<div class="form-group">
											<input type="text" class="form-control" id="lastname_contact" name="lastname_contact" placeholder="Apellidos">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6 col-sm-6">
										<div class="form-group">
											<input type="text" class="form-control" id="razonsocial_contact" name="razonsocial_contact" placeholder="Razón Social">
										</div>
									</div>
									<div class="col-md-6 col-sm-6">
										<div class="form-group">
											<input type="number" class="form-control" id="ruc_contact" name="ruc_contact" placeholder="RUC">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6 col-sm-6">
										<div class="form-group">
											<input type="email" id="email_contact" name="email_contact" class="form-control" placeholder="Correo">
										</div>
									</div>
									<div class="col-md-6 col-sm-6">
										<div class="form-group">
											<input type="text" id="phone_contact" name="phone_contact" class="form-control" placeholder="Numero de Celular">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<textarea rows="5" id="message_contact" name="message_contact" class="form-control" style="height:100px;" placeholder="Escribe tu consulta"></textarea>
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
			</div>
			<!-- End row -->
		</div>

@endsection