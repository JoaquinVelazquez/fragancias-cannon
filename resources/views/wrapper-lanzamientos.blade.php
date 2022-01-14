@foreach($lanzamientos as $lanzamiento)

	<div class="col-md-12 mb-4 lanzamiento mx-auto text-center">
		<a href="/detalle/{{ $lanzamiento->perfume_id }}" target="_blank">
			<img class="img-fluid" src="{{asset('img/lanzamientos/'. $lanzamiento->id.'.jpg')}}" alt="">
		</a>
	</div>
	
@endforeach
