<h4>Detalle de cita #{{$numpedido}}</h4>
<div class="app_card_modal" id="">
	<ul class="cats" >
		@foreach ($detalle as $det)
		<li>S/. {{$det->price}} - {{$det->examen->title}}</li>
		@endforeach
	</ul>
</div>
