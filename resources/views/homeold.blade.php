@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/homeold.css')}}">
    <script src="js/index.js"></script>


    <title>Fragancias Cannon</title>
</head>
<body>
    <div id="header">
        <div class="logo">
            <img src="{{asset('img/home/logo.png')}}" alt="">
        </div>

        <div class="textHead">
            <div class="nav1">
                <a class ="cositos" href="#">Nosotros</a>
                <a class ="cositos" href="#">Contacto</a>
            </div>
            <div class="nav2">
                <a  class ="cositos"href="#">Fragancias</a>
                <a  class ="cositos" href="#">Novedades</a>
                <a  class ="cositos" href="#">Notas Olfativas</a>
                <a  class ="cositos" href="#">Clientes</a>
            </div>
        </div>

    </div>
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
         <ol class="carousel-indicators">
          <?php $z = 0; ?>
          @foreach ($imagenes_carousel as $imagen)

          @if($z==0)
           <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="{{$z}}" class="active"></li>
          @else
           <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="{{$z}}"></li>
          @endif
           <?php $z++; ?>
          @endforeach
         </ol>
        <div class="carousel-inner">
          <?php $z = 0; ?>
          @foreach ($imagenes_carousel as $imagen)

          @if($z==0)
           <div class="carousel-item active" style="background-image: url('img/carousel/{{$imagen->id}}.jpg');">>
          @else
           <div class="carousel-item" style="background-image: url('img/carousel/{{$imagen->id}}.jpg');">>
          @endif

            <img src="{{asset('img/carousel/'.$imagen->id.'.jpg')}}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block" style="margin-bottom:-100px">
              @if (isset($imagen->titulo))
              <h5><span class="alert alert-info" style="background-color: rgba(0, 0, 0, 0.3);color:white;font-weight: bold;border-color:transparent;">{{ $imagen->titulo }}</span></h5><br/>
              @endif
              @if (isset($imagen->descripcion))
              <p><span class="alert alert-info" style="background-color: rgba(0, 0, 0, 0.5);color:white;font-weight: bold;border-color:transparent;">{{ $imagen->descripcion }}</span></p>
              @endif
            </div>
          </div>
          <?php $z++; ?>

          @endforeach

        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden"></span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden"></span>
        </a>
      </div>

    <div class="description">
        <h2>Fragancias Cannnon</h2>
        <div>Fundada en 1970 como una empresa familiar, y continuando así­ hasta la actualidad, Cannon crea fragancias para hombres, mujeres y niños.</div>
        <div>Calidad, innovación y diseño, junto con un dinámico lanzamiento de nuevos productos, le permiten liderar diferentes segmentos del mercado. Todo esto acompañado siempre con una fuerte y sólida presencia en puntos de venta.</div>
        <button type="button" id="boton1" class="btn btn-outline-dark">Ver Mas</button>

    </div>
    <div class="vl"></div>
    <div class="contenedor">
        <h2>Productos Destacados</h2>
        <div class="coso1">
            <img src="{{asset('img/home/slider2.jpg')}}" alt="">
        </div>
        <div class="coso2">
            <img src="{{asset('img/home/coso2.jpg')}}" alt="">
        </div>
        <div class="coso3">
            <div><img src="{{asset('img/home/vert1.jpg')}}" alt=""></div>
            <div><img src="{{asset('img/home/vert2.jpg')}}" alt=""></div>
            <div><img src="{{asset('img/home/vert3.jpg')}}" alt=""></div>
        </div>
        <button type="button" id="boton2" class="btn btn-outline-dark">Ver Mas Productos</button>

    </div>
    <div class="vl"></div>
    <h2 id="fragancias">Fragancias y Perfumes</h2>
    <div class="tags">
     <a class ="cositos linea-btn" data-id="2" href>WOMEN</a>
     <a  class ="cositos linea-btn" data-id="3" href>MEN</a>
     <a class ="cositos linea-btn" data-id="1" href>KIDS</a>
     <a  class ="cositos linea-btn" data-id="4" href>MODA</a>
     <a class ="cositos linea-btn" data-id="0" href>TODOS</a>
    </div>

    <div class="container-fluid" id="perfumes_data">



      {{-- @include('wrapper-variedades') --}}





    </div>
    {{-- {!! $variedades->links('pagination::bootstrap-4') !!} --}}


    <div id="banner"></div>
    <div class="vl"></div>

    <div class="contenedorAromas">
      <div class="aromas">
        <img src="{{asset('img/home/aromatica1.jpg')}}" alt="">
        <ul>
          <li>
            ACUATICA
          </li>
          <li>
            FOUGÈRE
          </li>
          <li>
            FRUTAL
          </li>
          <li>
            VERDE
          </li>
          <li>
            ESPECIAS
          </li>
        </ul>
      </div>
      <div class="aromas">
        <img src="{{asset('img/home/aromatica2.jpg')}}" alt="">
        <ul>

          <li>
            FRUTAL
          </li>
          <li>
            FLORAL
          </li>

        </ul>
      </div>
      <div class="aromas">
        <img src="{{asset('img/home/aromatica3.jpg')}}" alt="">
        <ul>
          <li>
            FRUTAL
          </li>
          <li>
            GOURMET
          </li>

        </ul>
      </div>
      <div class="aromas">
        <img src="{{asset('img/home/aromatica4.jpg')}}" alt="">
        <ul>
          <li>
            ALDEHIDO
          </li>
          <li>
            ACUATICA
          </li>
          <li>
            FRUTAL
          </li>
          <li>
            FRUTAL-GOURMET
          </li>
          <li>
            VERDE
          </li>
          <li>
            MADERAS-MUSK
          </li>
        </ul>
      </div>
      <div class="aromas">
        <img src="{{asset('img/home/aromatica5.jpg')}}" alt="">
        <ul>
          <li>
            FLORAL
          </li>
          <li>
            FOUGÈRE
          </li>
          <li>
            ESPECIAS
          </li>
          <li>
            VAINILLA
          </li>
          <li>
            MADERAS
          </li>
        </ul>
      </div>
      <div class="aromas">
        <img src="{{asset('img/home/aromatica6.jpg')}}" alt="">
        <ul>
          <li>
            ACUATICAS
          </li>
          <li>
            AROMATICAS
          </li>
          <li>
            CHIPRE
          </li>
          <li>
            FLORAL-MUSK
          </li>
          <li>
            ESPECIAS
          </li>
        </ul>
      </div>
    </div>

    <div class="vl"></div>

    <h2>Ultimas Novedades</h2>
    <div class="contenedorNoticias">
      <div>
        <img src="{{asset('img/home/novedades1.jpg')}}" alt="">
        <h2>Fragancias</h2>
        <h6>28/12/2020</h6>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Error quas culpa sint deleniti, et eligendi maxime qui esse laudantium porro, sed ipsum harum exercitationem! Possimus nesciunt suscipit culpa commodi quaerat!</p>
        <button type="button" id="boton3" class="btn btn-outline-dark">Ver Mas</button>

      </div>
      <div>
        <img src="{{asset('img/home/novedades2.jpg')}}" alt="">
        <h2>Perfume</h2>
        <h6>29/12/2020</h6>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Error quas culpa sint deleniti, et eligendi maxime qui esse laudantium porro, sed ipsum harum exercitationem! Possimus nesciunt suscipit culpa commodi quaerat!</p>
        <button type="button" id="boton3" class="btn btn-outline-dark">Ver Mas</button>

      </div>
      <div>
        <img src="{{asset('img/home/novedades3.jpg')}}" alt="">
        <h2>PRUNE ICON</h2>
        <h6>30/12/2020</h6>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Error quas culpa sint deleniti, et eligendi maxime qui esse laudantium porro, sed ipsum harum exercitationem! Possimus nesciunt suscipit culpa commodi quaerat!</p>
        <button type="button" id="boton3" class="btn btn-outline-dark">Ver Mas</button>

      </div>
    </div>

    <div class="vl"></div>
    <h2>Puntos de Venta</h2>

    <footer>
      <div class="footLeft">
        <h2>Oficina de Administración & Ventas</h2>
        <hr>
        <div>
          <strong>CANNON PUNTANA S.A.</strong>
          <p>
            Salguero 550 - C1177AEJ
          </p>
          <p>Ciudad Autónoma de Buenos Aires - Argentina</p>
          <a href="tel:+541148659616">Tel: 4865-9616 </a>
          <p>Fax: 4865-9616</p>
          <a href="http://qr.afip.gob.ar/?qr=GzVEIQwMDVkVYqIeYinOiA,,">
            <img src="http://www.afip.gob.ar/images/f960/DATAWEB.jpg')}}" alt="">
          </a>
        </div>
      </div>
      <div>
        <div><strong>
          MEN
        </strong>
        </div>
        <div>ACQUA DI COLBERT</div>
        <div>ALLIANCE</div>
        <div>
          ALLIANCE EPICEE
          </div>
        <div>
          ALLIANCE TOBACCO
        </div>
        <div>
          CHESTER ICE
        </div>
        <div>
          COLBERT
        </div>
        <div>
          CRANDALL
        </div>
        <div>
          FA
        </div>
        <div>
          KEVIN
        </div>
        <div>
          PINO COLBERT
        </div>
      </div>
      <div>
        <div>
        <strong>
          WOMEN
        </strong>
        </div>
        <div>CIEL</div>
        <div>FA</div>
        <div>
          FLOWER ROSE
        </div>
        <div>
          KEVIN FEMME
        </div>
        <div>
          L'EXTREME
        </div>
        <div>
          NUIT 1-2-3
        </div>
      </div>
      <div>
        <div>
          <strong>
          KIDS
          </strong>


          </div>
        <div>CIEL LOVE
          </div>
        <div>COQUETERIAS
          </div>
        <div>DANIELLE
          </div>
        <div>MUJERCITAS
         </div>
        <div> MY LITTLE DANIELLE
          </div>
        <div>PACO
          </div>
        <div>PIBES</div>
      </div>
      <div>
        <div>
          <strong>
          MODA</strong>
          </div>
        <div>
          AKIABARA
        </div>
        <div>          ALVEAR
        </div>
        <div>          ANALIA MAIORANA
        </div>
        <div>          BROSS LONDON
        </div>
        <div>          CARO CUORE
        </div>
        <div>          GARCON GARCIA
        </div>
        <div>          GINO BOGANI
        </div>
        <div>          LA DOLFINA
        </div>
        <div>          PALOMA HERRERA
        </div>
        <div>          PARA TI
        </div>
        <div>          PAULA CAHEN D'ANVERS
        </div>
        <div>          PRUNE
        </div>
      </div>
    </footer>
    <div class="derechos"> © 2020 Fragancias Cannon - Todos los derechos  reservados </div>

    <div class="brand-carousel section-padding owl-carousel">
      <div class="single-logo">
        <img src="https://i.postimg.cc/QxPJ8hXy/brand-1.png" alt="">
      </div>
    <div class="single-logo">
        <img src="https://i.postimg.cc/pdMQjC5Q/brand-2.png" alt="">
      </div>
    <div class="single-logo">
        <img src="https://i.postimg.cc/B6qxYvgX/brand-3.png" alt="">
      </div>
    <div class="single-logo">
        <img src="https://i.postimg.cc/d14GzKHn/brand-4.png" alt="">
      </div>
    <div class="single-logo">
        <img src="https://i.postimg.cc/x8ZM13Sz/brand-5.png" alt="">
      </div>
    <div class="single-logo">
        <img src="https://i.postimg.cc/B6qxYvgX/brand-3.png" alt="">
      </div>

    </div>


    <div class="footer-social-icons">

      <ul class="social-icons">
          <li><a href="" class="social-icon"> <i class="fa fa-facebook"></i></a></li>
          <li><a href="" class="social-icon"> <i class="fa fa-twitter"></i></a></li>
          <li><a href="" class="social-icon"> <i class="fa fa-rss"></i></a></li>
          <li><a href="" class="social-icon"> <i class="fa fa-youtube"></i></a></li>
          <li><a href="" class="social-icon"> <i class="fa fa-linkedin"></i></a></li>
          <li><a href="" class="social-icon"> <i class="fa fa-github"></i></a></li>
      </ul>
  </div>

  <div aria-hidden="true" aria-labelledby="myModalLabel" class="modal fade" id="modalIMG" role="dialog" tabindex="-1">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content" >
      <div class="modal-body mb-0 p-0 text-center" style="background: url({{asset('img/variedades/bg.jpg')}}); background-size: cover" id="modal-img">
        <img src="{{asset('img/variedades/3.png')}}" alt="" style="width:100%">
      </div>
      <div class="modal-footer" id="modal-info">

      </div>
    </div>
  </div>
</div>




    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

</body>

</html>
@endsection
@section('scripts')
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
           url:"/get_perfumes_by_linea_id?"+params,
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

     $(document).on('click', '.zoom-link', function(event){
       var id = $(this).attr('data-id');
       $('#modal-img').html("<img src='{{asset('img/variedades/')}}/"+id+".png' alt='' class='img-fluid mt-3' style='max-width:60%'>")
       $('#modal-info').html($('#info-'+id).html());
       $('#modalIMG').modal('toggle');

    });

});

</script>
@endsection

