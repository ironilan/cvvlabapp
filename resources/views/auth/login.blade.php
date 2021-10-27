@extends('layouts.frontend')

@section('contenido')

<div class="bg_color_2">
	<div class="container margin_60_35">
		<div id="login">
			<h1>Ingresa a tu panel!</h1>
			<div class="box_form">
				<form method="POST" action="{{ route('login') }}">
                        @csrf
					<a href="#0" class="social_bt facebook">Login con Facebook</a>
					<a href="#0" class="social_bt google">Login con Google</a>
					<div class="divider"><span>Or</span></div>
					<div class="form-group">
						<input type="email" class="form-control" placeholder="Ingresa tu email" name="email">
						@error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
					</div>
					<div class="form-group">
						<input type="password" class="form-control" placeholder="Ingresa tu password" id="password" name="password">
					</div>
					<a href="#0"><small>Olvidaste tu contraseña?</small></a>
					<div class="form-group text-center add_top_20">
						<input class="btn_1 medium" type="submit" value="Login">
					</div>
				</form>
			</div>
			<p class="text-center link_bright">¿Aún no tienes una cuenta? <a href="{{ url('register') }}"><strong>Regístrate ahora!</strong></a></p>
		</div>
		<!-- /login -->
	</div>
</div>
@endsection