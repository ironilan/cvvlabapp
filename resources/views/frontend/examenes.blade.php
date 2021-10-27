@extends('layouts.frontend')

@section('contenido')
<div id="results">
       <div class="container">
           <div class="row">
               <div class="col-md-6">
                   <h4><strong>Busca</strong> el examen que necesitas</h4>
               </div>
               <div class="col-md-6">
                    <div class="search_bar_list">
                    <input type="text" class="form-control criterio" placeholder="Tipo, nombre del examen...">
                    <input type="button" class="buttonsearch" value="Buscar" onclick="getExamenes(1)">
                </div>
               </div>
           </div>
           <!-- /row -->
       </div>
       <!-- /container -->
   </div>
   <!-- /results -->
   
   <div class="filters_listing">
		<div class="container">
			<ul class="clearfix">
				<li>
					<h6>Áreas</h6>
					<div class="switch-field">
						<input type="radio" class="areaInput" id="all" name="area" value="all" checked>
						<label for="all">Todas</label>
						@foreach ($areas as $area)
						<input type="radio" class="areaInput" id="area{{$area->id}}" name="area" value="{{$area->id}}">
						<label for="area{{$area->id}}">{{$area->title}}</label>
						@endforeach
					</div>
				</li>
				<li>
					<h6>Tipo</h6>
					<select name="tipo" class="selectbox" id="tipoInput">
					<option value="all">Todos</option>
					@foreach ($tipos as $tipo)
					<option value="{{$tipo->id}}">{{$tipo->title}}</option>
					@endforeach
					
					</select>
				</li>
			</ul>
		</div>
		<!-- /container -->
	</div>
	<!-- /filters -->
	   
	<div class="container margin_60_35">
		<div class="row">
			<div class="col-lg-8">
				<div class="row" id="examenesRender">
					
									

				</div>
				<!-- /row -->

				{{-- <nav aria-label="" class="add_top_20">
					<ul class="pagination pagination-sm">
						<li class="page-item disabled">
							<a class="page-link" href="#" tabindex="-1">Previous</a>
						</li>
						<li class="page-item active"><a class="page-link" href="#">1</a></li>
						<li class="page-item"><a class="page-link" href="#">2</a></li>
						<li class="page-item"><a class="page-link" href="#">3</a></li>
						<li class="page-item">
							<a class="page-link" href="#">Next</a>
						</li>
					</ul>
				</nav> --}}
				<!-- /pagination -->
			</div>
			<!-- /col -->
			
			<aside class="col-lg-4" id="sidebar">

			</aside>

			
			<!-- /aside -->
			
		</div>
		<!-- /row -->
	</div>
@endsection

@section('scripts')
<script>
	$(document).ready(() => {
		getExamenes(1);

		addCart(0);
	});

	const getExamenes = (page) => {
		let area = $('input[name=area]:checked').val();
		let tipo = $('.selectbox').val();
		let criterio = $('.criterio').val();
		let url = `{{ url('getExamenes') }}?page=${page}&area=${area}&tipo=${tipo}&criterio=${criterio}`;

		$.get(url, res =>{
			$('#examenesRender').html(res);
		})
	}


	$('#tipoInput').change(() => {
		getExamenes(1);
	});

	$(".areaInput").change(function() {
	    if(this.checked) {
	        getExamenes(1);
	    }
	});


	//addcart
	const addCart = (idexamen) => {
		let url = `{{ url('setCartExamen') }}?examen=${idexamen}`;

		$.get(url, res =>{
			$('#sidebar').html(res);
		})
	}


	
	
	

</script>
@endsection

@section('estilos')
<style>
	.buttonsearch{
	    position: absolute;
		right: -1px;
		color: #fff;
		font-weight: 600;
		top: 0;
		border: 0;
		padding: 0 15px;
		height: 40px;
		cursor: pointer;
		-webkit-border-radius: 0 3px 3px 0;
		-moz-border-radius: 0 3px 3px 0;
		-ms-border-radius: 0 3px 3px 0;
		border-radius: 0 3px 3px 0;
		background-color: #74d1c6;
		-moz-transition: all 0.3s ease-in-out;
		-o-transition: all 0.3s ease-in-out;
		-webkit-transition: all 0.3s ease-in-out;
		-ms-transition: all 0.3s ease-in-out;
		transition: all 0.3s ease-in-out;
	}
</style>
@endsection