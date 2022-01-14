@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="{{asset('css/nosotros.css')}}">
@include('layouts.header')
<header>
  {{-- <div class="overlay"></div> --}}
  <video autoplay muted loop controls style="object-fit: cover; height: 100px">
    <source src="{{asset('img/nosotros/video-header')}}.webm" type='video/webm; codecs="vp8, vorbis"' />
    <source src="{{asset('img/nosotros/video-header')}}.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"' />
  </video>
  {{-- <div class="container h-100">
    <div class="d-flex h-100 text-center align-items-center">
      <div class="w-100 text-white">
        <h1 class="display-3"><button id="mute-video" class="toggle-mute-btn mb-4 hovered"><i id="icon-mute" class="fas fa-volume-mute" style="font-size: 0.5em;"></i></button></h1>
      </div>
    </div>
  </div> --}}
</header>
<div class="bread-bar">
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-sm-6 col-xs-8">
        <ol class="breadcrumb">
          <li><a href="{{ Route('home') }}" style="text-decoration: none;"><i class="fa fa-arrow-alt-circle-left"></i> Home</a></li>
          <li class="active">Nosotros</li>
        </ol>
      </div>
      <div class="col-md-4 col-sm-6 col-xs-4">
      </div>
    </div>
  </div>
</div>
<div class="aboutus-secktion paddingTB60">
  <div class="container">
    <div class="row">
      <div class="col-md-6 justify">

<p>Fundada en 1970 como una empresa familiar y dirigida desde entonces por sus dueños hasta la actualidad, Fragancias Cannon desarrolla hace mas de 50 años, fragancias femeninas, masculinas e infantiles.</p>
<p>Cannon es líder a nivel nacional en la fabricación y distribución de fragancias, demostrando su solidez a través de los años.</p>
<p>Todas sus fragancias son creadas a partir de un minucioso estudio. Al igual sus frascos y packagings, que son diseñados y fabricados con insumos totalmente exclusivos, lo cual posiciona a Fragancias Cannon a la vanguardia de la perfumería nacional.</p>
<p>Su impronta como empresa está marcada por la calidad, la innovación y el diseño, junto con un dinámico lanzamiento de nuevos productos. </p>


      </div>
      <div class="col-md-6 justify">

<p>A partir del año 2006, Fragancias Cannon empieza a tomar las licencias de marcas de moda premium para diseñar, producir y distribuir sus fragancias.</p>
<p>Actualmente Cannon cuenta con exitosas gamas de fragancias para Paula Cahen D'Anvers, Prüne, Caro Cuore, Gino Bogani, Analía Maiorana, La Dolfina, Akiabara y Las Pepas entre otras, que están en pleno desarrollo. A si mismo también crea la exitosa primera fragancia de la mundialmente destacada bailarina Paloma Herrera.</p>
<p>La filosofía de Cannon es crear marcas y productos sólidos, perdurables en el tiempo. Para ello ha sabido encontrar y mantener a lo largo de los años un delicado equilibrio que combina calidad, innovación y precio, ofreciéndole a un amplio grupo de consumidores productos accesibles con diseño y tendencia.</p>
      </div>
    </div>
      <div class="row mt-5">
          <div class="col-md-12">
              <h1 class="text-center">Nuestra planta</h1>
          </div>
          <video muted loop controls style="object-fit: cover; height: 500px; border:2px solid black;" class="mx-auto mt-5">
              <source src="{{asset('img/nosotros/video-header2')}}.webm" type='video/webm; codecs="vp8, vorbis"' />
              <source src="{{asset('img/nosotros/video-header2')}}.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"' />
          </video>
      </div>
  </div>
</div>

</div>
</div>
<div id="preloader"></div>
<a href="#" class="back-to-top"><i class="fa fa-arrow-up"></i></a>
@endsection
@section('scripts')
<script src="{{asset('js/jquery.easing.min.js') }}"></script>
<script src="{{asset('js/counterup.min.js') }}"></script>
<script src="{{asset('js/main.js')}}"></script>
<script src="{{asset('js/nosotros.js')}}"></script>
@endsection
