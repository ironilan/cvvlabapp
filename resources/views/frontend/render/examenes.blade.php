@foreach ($examenes as $examen)
	<div class="col-md-12">
		<div class="box_list wow fadeIn">							
			
			<div class="wrapper">
				<small class="categoria">{{$examen->area->title}}</small>
				<h3 class="nombre_examen">{{$examen->title}} </h3>

				<p>{{$examen->description}}</p>
				
			</div>
			<ul>
				<li><i class="icon-doc-6"></i>Tipo:<a href="#0" onclick=""> {{$examen->tipomuestra->title}}</a></li>
				<li><a href="https://www.google.com/maps/dir//Assistance+%E2%80%93+H%C3%B4pitaux+De+Paris,+3+Avenue+Victoria,+75004+Paris,+Francia/@48.8606548,2.3348734,14z/data=!4m15!1m6!3m5!1s0x0:0xa6a9af76b1e2d899!2sAssistance+%E2%80%93+H%C3%B4pitaux+De+Paris!8m2!3d48.8568376!4d2.3504305!4m7!1m0!1m5!1m1!1s0x47e67031f8c20147:0xa6a9af76b1e2d899!2m2!1d2.3504327!2d48.8568361" target="_blank">Directions</a></li>
				<li><a href="javascript:void(0)" onclick="addCart({{$examen->id}})">AGREGAR A COTIZACIÓN</a></li>
			</ul>
		</div>
	</div>
	@endforeach