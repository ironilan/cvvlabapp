
<div class="box_general_3 booking">
	<form>
		<div class="title">
			<h3>Detalle de Compra</h3>
		</div>
		<div class="summary">
			<ul>
				<li>Fecha: <strong class="float-right">{{$compra['fecha']}}</strong></li>
				<li>Hora: <strong class="float-right">{{$compra['hora']}}</strong></li>
				
			</ul>
		</div>
		<ul class="treatments checkout clearfix">
			@if (Cart::count() > 0)
				@foreach (Cart::content() as $cart)
				<li>
					{{$cart->name}} <strong class="float-right">S/. {{$cart->price}}</strong>
				</li>
			 	@endforeach
			@endif
			
			<li class="total">
				Total <strong class="float-right">S/. {{Cart::total()}}</strong>
			</li>
		</ul>
		<hr>
		
	</form>
	</div>
