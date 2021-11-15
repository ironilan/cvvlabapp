@extends('layouts.frontend')

@section('contenido')
@php
	$user = Auth::user();


	// SDK de Mercado Pago
	require base_path('vendor/autoload.php');
	// Agrega credenciales
	MercadoPago\SDK::setAccessToken(config('services.mercadopago.token'));



	// Crea un objeto de preferencia
	$preference = new MercadoPago\Preference();

	// Crea un ítem en la preferencia
	foreach (Cart::content() as $prod)
	{
		$item = new MercadoPago\Item();
		$item->title = $prod->name;
		$item->quantity = $prod->qty;
		$item->unit_price = $prod->price;

		$arrayProd[] = $item;
	}

	//url de respuesta
	$preference->back_urls = array(
	    "success" => route('pedido.confirmado', $pedido),
	    "failure" => url('/')."/failure",
	    "pending" => url('/')."/pending"
	);
	$preference->auto_return = "approved";

	/*********************************************/

	$preference->items = $arrayProd;
	$preference->save();


@endphp
<div id="breadcrumb">
	<div class="container">
		<ul>
			<li><a href="#">Home</a></li>
			<li><a href="#">Examen</a></li>
			<li>Pagar</li>
		</ul>
	</div>
</div>


<div class="container margin_60">
	<div class="row">
		<div class="col-xl-8 col-lg-8">
		<div class="box_general_3 cart">
			<div class="message">
				<p>¿Ya eres Cliente? <a href="{{ url('/login?redirect_to='.url()->current()) }}"> Ingresa con tu Cuenta</a></p>
			</div>
			<div class="form_title">
				<h3><strong>1</strong>Datos Personales</h3>
				<p>
					Ingrese los datos de la persona que se tomará los examenes
				</p>
			</div>
			<div class="step">
				<div class="row">
					<div class="col-md-12 col-sm-12">
						<div class="form-group">
							<label>Nombres</label>
							<input type="text" class="form-control" id="firstname_booking" name="firstname_booking" placeholder="Jhon" value="{{$user->name}}">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 col-sm-6">
						<div class="form-group">
							<label>Correo</label>
							<input type="email" id="email_booking" name="email_booking" class="form-control" placeholder="jhon@doe.com" value="{{$user->email}}">
						</div>
					</div>
					<div class="col-md-6 col-sm-6">
						<div class="form-group">
							<label>Celular</label>
							<input type="text" id="telephone_booking" name="telephone_booking" class="form-control" placeholder="51 999 999 999" value="{{$user->cellphone}}">
						</div>
					</div>
				</div>
				
			</div>
			<hr>
			<!--End step -->

			
			<!--End step -->

			<div class="form_title">
				<h3><strong>3</strong>Datos de Facturación</h3>
				<p>
					Mussum ipsum cacilds, vidis litro abertis.
				</p>
			</div>
			<div class="step">
				<div class="row">
					<div class="col-md-6 col-sm-6">
						<label>Country</label>
						<div class="form-group">
							<select class="form-control" name="country" id="country">
								<option value="">Select your country</option>
								<option value="Europe">Europe</option>
								<option value="United states">United states</option>
								<option value="Asia">Asia</option>
							</select>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 col-sm-6">
						<div class="form-group">
							<label>Street line 1</label>
							<input type="text" id="street_1" name="street_1" class="form-control" placeholder="Street line 1">
						</div>
					</div>
					<div class="col-md-6 col-sm-6">
						<div class="form-group">
							<label>Street line 2</label>
							<input type="text" id="street_2" name="street_2" class="form-control" placeholder="Street line 1">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label>City</label>
							<input type="text" id="city_booking" name="city_booking" class="form-control" placeholder="Miami">
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label>State</label>
							<input type="text" id="state_booking" name="state_booking" class="form-control" placeholder="Florida">
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label>Postal code</label>
							<input type="text" id="postal_code" name="postal_code" class="form-control" placeholder="00342">
						</div>
					</div>
				</div>
				<!--End row -->
			</div>
			<hr>
			<!--End step -->
			<div id="policy">
				<h4>Cancellation policy</h4>
				<div class="form-group">
					<div class="checkboxes">
						<label class="container_check">I accept <a href="#0">terms and conditions and general policy</a>
							<input type="checkbox">
							<span class="checkmark"></span>
						</label>
					</div>
				</div>
			</div>
		</div>
		</div>
		<!-- /col -->
		<aside class="col-xl-4 col-lg-4" >
			<div id="sidebar"></div>
			<div class="cho-container"></div>
		</aside>
		
		<!-- /asdide -->
	</div>
	<!-- /row -->
</div>

@endsection

@section('scripts')
<script src="https://sdk.mercadopago.com/js/v2"></script>

          
<script>
// Agrega credenciales de SDK
  const mp = new MercadoPago("{{config('services.mercadopago.key')}}", {
        locale: 'es-PE'
  });

  // Inicializa el checkout
  mp.checkout({
      preference: {
          id: '{{$preference->id}}'
      },
      render: {
            container: '.cho-container', // Indica dónde se mostrará el botón de pago
            label: 'Pagar', // Cambia el texto del botón de pago (opcional)
      }
});
</script>


<script>
	const getCompra = () => {
		let url = '{{ url('getCompra') }}';

		$.get(url, res => {
			$('#sidebar').html(res);
		});
	}


	$(document).ready(res=>getCompra());
</script>
@endsection