@extends('layouts.frontend')

@section('contenido')

<div class="bg_color_2">
	<div class="container margin_60_35">
		<div id="login">
			<div class="app_modal_logo">
				<img src="{{ asset('frontend/img/logo-ccvlab.png') }}" alt="">
				<h1>Crea tu cuenta!</h1>
			</div>
			<div class="box_form">
				<form method="POST" action="{{ route('register') }}">
                    @csrf
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Ingresa tu Nombre" name="name">
						@error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
					</div>

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
						@error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
					</div>
					<div class="form-group text-center add_top_20">
						<input class="btn_1 medium" type="submit" value="Registrar">
					</div>
				</form>
			</div>
			<p class="text-center link_bright">¿Ya tienes una cuenta? <a href="{{ url('login') }}"><strong>Inicia sesión!</strong></a></p>
		</div>
		<!-- /login -->
	</div>
</div>
@endsection