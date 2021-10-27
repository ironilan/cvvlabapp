
@php
	$hora = Session::get('hora');
	

	$horas = [
		[
			'id' => 1,
			'label' => '09:30am',
			'value' => '09:30am',
		],
		[
			'id' => 2,
			'label' => '10:00am',
			'value' => '10:00am',
		],
		[
			'id' => 3,
			'label' => '10:30am',
			'value' => '10:30am',
		],
		[
			'id' => 4,
			'label' => '11:00am',
			'value' => '11:00am',
		],
		[
			'id' => 5,
			'label' => '11:30am',
			'value' => '11:30am',
		],
		[
			'id' => 6,
			'label' => '12:00am',
			'value' => '12:00am',
		],
		[
			'id' => 7,
			'label' => '12:30am',
			'value' => '12:30am',
		],
		[
			'id' => 8,
			'label' => '1:00pm',
			'value' => '1:00pm',
		],
		[
			'id' => 9,
			'label' => '1:30pm',
			'value' => '1:30pm',
		],
		[
			'id' => 10,
			'label' => '2:00pm',
			'value' => '2:00pm',
		],
		[
			'id' => 11,
			'label' => '2:30pm',
			'value' => '2:30pm',
		],
		[
			'id' => 12,
			'label' => '3:00pm',
			'value' => '3:00pm',
		],
		[
			'id' => 13,
			'label' => '3:30pm',
			'value' => '3:30pm',
		],
		[
			'id' => 14,
			'label' => '4:00pm',
			'value' => '4:00pm',
		],		

	];
@endphp
<div class="row add_bottom_45">
	<div class="col-lg-7">
		<div class="form-group">
			<div id="calendar"></div>
			<input type="hidden" id="my_hidden_input">
			
		</div>
	</div>
	<div class="col-lg-5">
		<ul class="time_select version_2 add_top_20">
			@foreach ($horas as $h)
			<li>
				<input type="radio" id="radio{{$h['id']}}" name="radio_time" value="{{$h['value']}}" {{$hora == $h['value'] ? 'checked': ''}}>
				<label for="radio{{$h['id']}}">{{$h['label']}}</label>
			</li>
			@endforeach
			
		</ul>
	</div>
</div>