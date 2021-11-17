{{-- <aside class="col-lg-4" id="sidebar"> --}}
	<div class="box_general_3 booking">
		<form>
			<div class="title">
			<h3>Cotización Online</h3>
			<small>Lista de Prueba</small>
			</div>
			
			<!-- /row -->
			@if (Cart::count() > 0)
			<ul class="treatments checkout clearfix">
				@if (Cart::count() > 0)
					@foreach (Cart::content() as $cart)
					<li>
						<div >
							{{$cart->name}} <strong class="float-right">S/. {{$cart->price}}</strong>
						</div>
						<small title="eliminar" onclick="deleteItem('{{$cart->rowId}}')" class="remove_item"><i class="icon-trash-6"></i></small>
					</li>
				 	@endforeach
				@endif
				
				<li class="total">
					Total <strong class="float-right">S/. {{Cart::total()}}</strong>
				</li>
			</ul>
			@else
			<ul class="treatments checkout clearfix">
				
				
				<li class="total">
					Total <strong class="float-right">S/. 0.00</strong>
				</li>
			</ul>
			@endif

			<hr>

			@if ($viewButton)
				@if (Cart::total() > 0)
				<a class="btn_1 full-width" href="{{ url('reservar') }}">Confirmar y Pagar</a>
				@else
				<button class="btn_1 full-width btn_disabled" disabled="true">Confirmar y Pagar</button>
				@endif
			@endif
			
		</form>
	</div>
{{-- </aside> --}}