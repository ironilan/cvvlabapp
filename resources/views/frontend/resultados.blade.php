@extends('layouts.frontend')

@section('contenido')
<div id="breadcrumb">
	<div class="container">
		<ul>
			<li><a href="#">Home</a></li>
			<li>Resultados</li>
		</ul>
	</div>
</div>

@include('frontend.components.resultados')


@endsection