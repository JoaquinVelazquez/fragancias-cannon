{{-- @extends('layouts.app')
@section('content') --}}
<style>

* {
  margin: 0;
  padding: 0;
  font-family: "Sofia", sans-serif;
}

h2 {
  color: #0a4870;
  font-weight: 500;
}

ul {
  display: flex;
  flex-wrap: wrap;
  list-style: none;
  padding: 0;
}
ul .booking-card {
  position: relative;
  width: 300px;
  display: flex;
  flex: 0 0 300px;
  flex-direction: column;
  margin: 20px;
  margin-bottom: 30px;
  -webkit-border-radius: 10px;
  -moz-border-radius: 10px;
  border-radius: 10px;
  overflow: hidden;
  background-position: center center;
  background-size: cover;
  color: #0a4870;
  transition: 0.3s;
}
ul .booking-card::before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: rgba(10, 72, 112, 0);
  transition: 0.3s;
}
ul .booking-card .book-container {
  height: 200px;
}
ul .booking-card .book-container .content {
  position: relative;
  opacity: 0;
  display: flex;
  align-items: center;
  justify-content: center;
  height: 100%;
  width: 100%;
  transform: translateY(-200px);
  transition: 0.3s;
}
ul .booking-card .book-container .content .btn {
  border: 3px solid white;
  padding: 10px 15px;
  background: none;
  text-transform: uppercase;
  font-weight: bold;
  font-size: 1.3em;
  color: white;
  cursor: pointer;
  transition: 0.3s;
}
ul .booking-card .book-container .content .btn:hover {
  background: white;
  border: 0px solid white;
  color: #0a4870;
}
ul .booking-card .informations-container {
  flex: 1 0 auto;
  padding: 25px;
  background: #f0f0f0;
  transform: translateY(206px);
  transition: 0.3s;
}
ul .booking-card .informations-container .title {
  position: relative;
  padding-bottom: 10px;
  font-weight: bold;
  font-size: 1em;
}
ul .booking-card .informations-container .title::after {
  content: "";
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  height: 3px;
  width: 50px;
  margin: auto;
  background: #0a4870;
}
ul .booking-card .informations-container .price .icon {
  margin-right: 10px;
}
ul .booking-card .informations-container .more-information {
  opacity: 0;
  transition: 0.3s;
}
ul .booking-card .informations-container .more-information .info-and-date-container {
  display: flex;
}
ul .booking-card .informations-container .more-information .info-and-date-container .box {
  flex: 1 0;
  padding: 20px;
  margin-bottom: 30px;
  -webkit-border-radius: 10px;
  -moz-border-radius: 10px;
  border-radius: 10px;

  font-weight: bold;
  font-size: 0.9em;
}
ul .booking-card .informations-container .more-information .info-and-date-container .box .icon {
  margin-bottom: 5px;
}
ul .booking-card .informations-container .more-information .info-and-date-container .box.info {
  color: #ec992c;
  margin-right: 10px;
}
ul .booking-card .informations-container .more-information .disclaimer {
  margin-top: 20px;
  font-size: 0.8em;
  color: #7d7d7d;
}
ul .booking-card:hover::before {
  background: rgba(10, 72, 112, 0.6);
}
ul .booking-card:hover .book-container .content {
  opacity: 1;
  transform: translateY(0px);
}
ul .booking-card:hover .informations-container {
  transform: translateY(0px);
}
ul .booking-card:hover .informations-container .more-information {
  opacity: 1;
}

@media (max-width: 768px) {
  ul .booking-card::before {
    background: rgba(10, 72, 112, 0.6);
  }
  ul .booking-card .book-container .content {
    opacity: 1;
    transform: translateY(0px);
  }
  ul .booking-card .informations-container {
    transform: translateY(0px);
  }
  ul .booking-card .informations-container .more-information {
    opacity: 1;
  }
}

.info{
  padding-bottom: 50px
}
.info img{
  padding-bottom: 40px
}
</style>

<ul>


  <li class="booking-card" style="background-image: url({{ asset('img/variedades/'.$variedad->id.'.png')}});">
    <div class="book-container" style="background-image: url({{ asset('img/variedades/'.$variedad->id.'l.png')}}) background-repeat:no-repeat; " >

    </div>
    <div class="informations-container" >

      <div class="info">
      <img src="{{ asset('img/variedades/'.$variedad->id.'l.png')}}"  style="padding:auto auto;">
      <h2 class="title">{{$variedad->fragancia}}</h2>





      @foreach ($variedad->variedades as $variedad)
      <b>{{ $variedad->codigo_catalogo }}</b>
      <?php $presentaciones_x_variedades = count($variedad->presentacionesPorVariedades); ?>
        @foreach ($variedad->presentacionesPorVariedades->sortBy('medida') as $presentacionPorVariedad)
          {{ $presentacionPorVariedad->presentacion->descripcion }}
          @if($presentacionPorVariedad->vol != 0)
            de {{ $presentacionPorVariedad->vol }} {{ $presentacionPorVariedad->medida }}
          @endif
          @if($presentaciones_x_variedades > 1) +
            <?php $presentaciones_x_variedades--?>
          @endif
        @endforeach
        @if ($presentacionPorVariedad->vap)
        con vaporizador.
        @else
        .
        @endif
        <br>
      @endforeach

    </div>


    </div>
  </li>
</ul>



{{-- @endsection
@section('scripts') --}}
<script type="text/javascript">

$(document).ready(function(){

		$(document).on('click', '.pagination a', function(event){

			  event.preventDefault();
			  var page = $(this).attr('href').split('page=')[1];
			  var linea = $("#linea-seleccionada").attr('data-id');
			  if (typeof linea === "undefined")
			  {
   				  linea = 0;
			  }
			  loadPagination(page, linea);

		});

		$(document).on('click', '.linea-btn', function(event){

			  event.preventDefault();
			  var linea = $(this).attr('data-id');
			  var page = 1;
			  loadPagination(page, linea);

		});

		function loadPagination(page, linea)
		{
			   var params = "page="+page+"&linea="+linea;
			   $('#perfumes_data').html("<div class='loader text-center mx-auto mt-5'></div>");

			   $.ajaxSetup({
					headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
					}
			   });

			   $.ajax({
				   url:"/test/get_perfumes_by_linea_id?"+params,
				   success:function(data)
				   {
				    $('#perfumes_data').html(data);
				   },
				   error: function (data)
				   {
				   	alert('error');
				   }
				 	});
		}
});

</script>
{{-- @endsection --}}

