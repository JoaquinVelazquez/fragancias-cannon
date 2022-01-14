@extends('layouts.app')
@section('content')
<style>
    @font-face {
        font-family: "futur";
        src: url({{asset('fonts/futur.ttf')}})
    }
    

</style>

<link rel="stylesheet" href="{{ asset('css/home.css') }}">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link
    href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
    rel="stylesheet">

{{-- <header id="header" class="fixed-top">
    <div class="container">
        <div class="row justify-content-center  mt-3">
            <div class="col-md-12 d-flex align-items-center justify-content-between" >
                <nav class="nav-menu  ">
                    <ul>
                        <li class="active" style="display: none"><a href="#hero">Home</a></li>
                        <li><a href="#lanzamientos" class="item-link">Lanzamientos</a></li>
                        <li class="item-dropdown" style="max-height: 460px">
                            <a href="#fragancias" class="item-link has-child">Fragancias</a>
                            <div class="arrow"></div>
                            <div class="submenu-wrapper">
                                <div class="item-submenu row">
                                    <div class="submenu-group col-md-2">
                                        <a class="submenu-link-master linea-link" data-id="3">Hombre</a>
                                        @foreach($hombres as $hombre)
                                        <a data-marca_id="3" data-id="{{ $hombre->id }}"
                                            class="submenu-link marca-link">{{ $hombre->nombre }}</a>
                                        @endforeach
                                    </div>
                                    <div class="submenu-group col-md-2">
                                        <a class="submenu-link-master linea-link" data-id="2">Mujer</a>
                                        @foreach($mujeres as $mujer)
                                        <a data-marca_id="2" data-id="{{ $mujer->id }}"
                                            class="submenu-link marca-link">{{ $mujer->nombre }}</a>
                                        @endforeach
                                    </div>
                                    <div class="submenu-group col-md-2">
                                        <a class="submenu-link-master linea-link" data-id="1">Infantiles</a>
                                        @foreach($ninios as $ninio)
                                        <a data-marca_id="1" data-id="{{ $ninio->id }}"
                                            class="submenu-link marca-link">{{ $ninio->nombre }}</a>
                                        @endforeach
                                    </div>
                                    <div class="submenu-group col-md-2">
                                        <a class="submenu-link-master linea-link" data-id="4">Alianzas</a>
                                        @foreach($alianzas as $alianza)
                                        <a data-marca_id="4" data-id="{{ $alianza->id }}"
                                            class="submenu-link marca-link">{{ $alianza->nombre }}</a>
                                        @endforeach
                                    </div>
                                    <div class="submenu-group col-md-2">
                                        <a class="submenu-link-master linea-link" data-id="5">Ediciones
                                            limitadas</a> --}}
                                        {{--                                        @foreach($alianzas as $alianza)--}}
                                        {{--                                            <a data-marca_id="4" data-id="{{ $alianza->id }}"class="submenu-link
                                        marca-link">{{ $alianza->nombre }}</a>--}}
                                        {{--                                        @endforeach--}}
                                    {{-- </div>
                                    <div class="submenu-group col-md-2">
                                        <a class="submenu-link-master linea-link" data-id="0">Ver todos</a>
                                    </div>
                                </div>
                            </div>
                        </li>


                        <li><a href="/nosotros " class="item-link">Nosotros</a></li>
                        <li><a href="/clientes" class="item-link">Clientes</a></li>
                        <li><a href="/contacto" class="item-link">Contacto</a></li>

                    </ul>
                </nav>
                <a href="/" class="logo"><img src="{{asset('img/home/logo-03.png')}}" alt="" class="img-fluid"></a>
            </div>
        </div>
    </div>
</header> --}}


<div class="container-fluid">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
            <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
        
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                
                <li class="nav-item active" >
                    <a class="nav-link item-link" href="#hero">Home</a>
                </li>
                <li class="nav-item">
                    <a href="#lanzamientos" class="nav-link item-link">Lanzamientos</a>
                </li>
            
                {{-- <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dropdown
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
                </li> --}}
            




                <li class="nav-item dropdown" >
                    <a href="#" class="nav-link dropdown-toggle item-link" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Fragancias</a>
                        <div class=" dropdown-menu " aria-labelledby="navbarDropdown">
                            <div class="grid4">
                                <div class="dropdown-item ">
                                    <a class="submenu-link-master linea-link " data-id="3">Hombre</a>
                                    @foreach($hombres as $hombre)
                                    <a data-marca_id="3" data-id="{{ $hombre->id }}"
                                        class="dropdown-item marca-link">{{ $hombre->nombre }}</a>
                                    @endforeach
                                </div>
                                <div class="dropdown-item ">
                                    <a class="submenu-link-master linea-link" data-id="2">Mujer</a>
                                    @foreach($mujeres as $mujer)
                                    <a data-marca_id="2" data-id="{{ $mujer->id }}"
                                        class="dropdown-item marca-link">{{ $mujer->nombre }}</a>
                                    @endforeach
                                </div>
                                <div class="dropdown-item ">
                                    <a class="submenu-link-master linea-link" data-id="1">Infantiles</a>
                                    @foreach($ninios as $ninio)
                                    <a data-marca_id="1" data-id="{{ $ninio->id }}"
                                        class="dropdown-item marca-link">{{ $ninio->nombre }}</a>
                                    @endforeach
                                </div>
                                <div class="dropdown-item ">
                                    <a class="submenu-link-master linea-link" data-id="4">Alianzas</a>
                                    @foreach($alianzas as $alianza)
                                    <a data-marca_id="4" data-id="{{ $alianza->id }}"
                                        class="dropdown-item marca-link">{{ $alianza->nombre }}</a>
                                    @endforeach
                                </div>
                                <div class="dropdown-item ">
                                    <a class="submenu-link-master linea-link" data-id="5">Ediciones
                                        limitadas</a>  
                                    {{--                                        @foreach($alianzas as $alianza)--}}
                                    {{--                                            <a data-marca_id="4" data-id="{{ $alianza->id }}"class="submenu-link
                                    marca-link">{{ $alianza->nombre }}</a>--}}
                                    {{--                                        @endforeach--}}
                                </div>
                                <div class="dropdown-item ">
                                    <a class="submenu-link-master linea-link" data-id="0">Ver todos</a>
                                </div>
                        
                            </div>
                                   
                            
                        </div> 
                        
                </li>



                <li  class="nav-item"><a href="/nosotros " class="nav-link item-link">Nosotros</a></li>
                <li class="nav-item"><a href="/clientes" class="nav-link item-link">Clientes</a></li>
                <li class="nav-item"><a href="/contacto" class="nav-link item-link">Contacto</a></li>

            </ul>
            
            </div>
            <a class="navbar-brand" href="#"><img src="{{asset('img/home/logo-03.png')}}" alt="" class="img-fluid" style="max-height: 40px"></a>
        </div>
        </nav>
</div>




























{{--    <section id="hero" class="d-flex flex-column justify-content-center" style="padding: 0 !important;">
        <div class="container-fluid d-flex min-vh-100 flex-column px-0 justify-content-center">
            <div id="carouselExampleIndicators" class="carousel slide flex-fill d-flex flex-column bg-danger justify-content-center carousel-fade" data-ride="carousel">
             <ol class="carousel-indicators">
                  <?php $z = 0; ?>
                  @foreach ($imagenes_carousel as $imagen)

                  @if($z==0)
                   <li data-target="#carouselExampleIndicators" data-slide-to="{{$z}}" class="active"></li>
@else
<li data-target="#carouselExampleIndicators" data-slide-to="{{$z}}"></li>
@endif
<?php $z++; ?>
@endforeach
</ol>
<div class="carousel-inner flex-fill bg-dark d-flex flex-column " role="listbox">
    <?php $z = 0; ?>
    @foreach ($imagenes_carousel as $imagen)

    @if($z==0)
    <div class="carousel-item active" style="background-image: url('img/carousel/{{$imagen->id}}.jpg')">
        @else
        <div class="carousel-item" style="background-image: url('img/carousel/{{$imagen->id}}.jpg')">
            @endif

            <div class="carousel-caption d-none d-md-block" style="margin-bottom:-100px">
                @if (isset($imagen->titulo))
                <h5><span class="alert alert-info"
                        style="background-color: rgba(0, 0, 0, 0.3);color:white;font-weight: bold;border-color:transparent;">{{ $imagen->titulo }}</span>
                </h5><br />
                @endif
                @if (isset($imagen->descripcion))
                <p><span class="alert alert-info"
                        style="background-color: rgba(0, 0, 0, 0.5);color:white;font-weight: bold;border-color:transparent;">{{ $imagen->descripcion }}</span>
                </p>
                @endif
            </div>

        </div>
        <?php $z++; ?>
        @endforeach
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
</div>

</div>


</section>--}}
<section id="hero" style="padding-bottom:40px;">
    <div id="carouselExampleIndicators" class="carousel carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators">

            @foreach ($imagenes_carousel as $key => $imagen)
            @if ($loop->first)
            @php $active = "active" @endphp
            @else
            @php $active = "" @endphp
            @endif

            <li data-target="#carouselExampleIndicators" data-slide-to="{{$key}}" class="{{ $active }}"></li>

            @endforeach

        </ol>

        <div class="carousel-inner">

            @foreach($imagenes_carousel as $imagen)
            @if ($loop->first)
            @php $active = "active" @endphp
            @else
            @php $active = "" @endphp
            @endif
            @if ($imagen->link)
            @php $link_start = "<a href='". $imagen->link ."' target='_blank'>";
                $link_finish = "</a>";
            @endphp
            @else
            @php $link_start = "";
            $link_finish = "";
            @endphp
            @endif

            <div class="carousel-item {{ $active }}">
                {!! $link_start !!}
                <img class="d-block w-100" src="{{ asset('img/carousel/' .$imagen->id. '.jpg') }}" style="height:400px">
                {!! $link_finish !!}
            </div>

            @endforeach
            {{--  <div class="carousel-item active">
                      <img class="d-block w-100" src="{{ asset('img/carousel/1.jpg') }}" style="height:400px"
            alt="First slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="{{ asset('img/carousel/2.jpg') }}" style="height:400px" alt="Second slide">
        </div>--}}
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    </div>
</section>
<main id="main">

    <section id="fragancias" class="fragancias">

        <div class="container">
            <div class="row">
            <div class="col-lg-10 offset-lg-2">
                <div class="container">
                    <div class="section-title">
                        <h2 class="text-center">Fragancias</h2>
                    </div>
                </div>

                <div class="container">
                    <div class="row pt-1 justify-content-center">

                        <div class="col-offset-8 col-md-4">
                            <form id="search-form">
                                <div class="input-group mb-4">
                                    <input type="search" placeholder="¿Qué perfume buscas?" id="search"
                                        aria-describedby="button-addon5" class="form-control" name="keyword">
                                    <div class="input-group-append">
                                        <button id="button-addon5" type="submit" class="btn btn-primary"
                                            style="background-color: black !important;border-color:black"><i
                                                class="fa fa-search"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    {{--  <div class="row mt-2 mb-2" id="buscador">
                      <div class="col-md-4 mx-auto text-center" style="margin-bottom:-15px">

                          <form id="search-form">
                              <div class="input-group mb-4">
                                  <input type="search" placeholder="¿Qué perfume buscas?" id="search"
                                         aria-describedby="button-addon5" class="form-control" name="keyword">
                                  <div class="input-group-append">
                                      <button id="button-addon5" type="submit" class="btn btn-primary"
                                              style="background-color: black !important;border-color:black"><i
                                              class="fa fa-search"></i></button>
                                  </div>
                              </div>
                          </form>

                      </div>
                  </div>--}}
                    {{--    <div class="col-sm-12 col-md-6 text-center text-md-left">
                         <div class="" id="headingType">
                             <h5 class="mb-0">
                                 <p class="mt-2 filter-link" data-toggle="collapse" data-target="#collapseType"
                                    aria-expanded="true" aria-controls="collapseType">
                                     Presentación <i class="fa fa-angle-down"></i>
                                 </p>
                             </h5>
                         </div>--}}
                    {{--  <div id="collapseType" class="collapse "
                       aria-labelledby="headingType"  data-parent="#filtros" >--}}

                    {{--  </div>--}}
                    {{--  </div>--}}
                    <div class="row linea-ul mx-auto text-center" style="display: flex;justify-content: center;">
                        <ul class="list-inline">
                            <li class="list-inline-item linea" data-id="3" id="3l"><span class='link-item'>Hombre</span>
                            </li>
                            <li class="list-inline-item linea" data-id="2" id="2l"><span class='link-item'>Mujer</span>
                            </li>
                            <li class="list-inline-item linea" data-id="1" id="1l"><span
                                    class='link-item'>Infantiles</span></li>
                            <li class="list-inline-item linea" data-id="4" id="4l"><span
                                    class='link-item'>Alianzas</span></li>
                            <li class="list-inline-item linea" data-id="5" id="5l"><span class='link-item'>Ediciones
                                    limitadas</span>
                            </li>
                            <li class="list-inline-item linea" data-id="0" id="0l"><span class='link-item'>TODOS</span>
                            </li>
                            {{--<li class="list-inline-item mt-4" data-id="0" id="0l">
                        <form id="search-form">
                            <div class="input-group mb-4">
                                <input type="search" placeholder="¿Qué perfume buscas?" id="search"
                                       aria-describedby="button-addon5" class="form-control" name="keyword">
                                <div class="input-group-append">
                                    <button id="button-addon5" type="submit" class="btn btn-primary"
                                            style="background-color: black !important;border-color:black"><i
                                            class="fa fa-search"></i></button>
                                </div>
                            </div>
                        </form>
                        </li>--}}

                        </ul>
                    </div>
                </div>
            </div>
                <br />
                
            <div class="row mt-4">
                <div class="col-lg-2">
                    {{-- <div class="row mt-5" id="sugeridos" style="display:none;">
                        <div class="col-md-12 text-right" style="font-family: 'Roboto', sans-serif"> Los precios
                            publicados son los sugeridos.
                        </div>
                    </div>
                    <div class="ajax-load text-center">

                        <p style="display:none;" id="ajax-load"><img height="50" src="{{ asset('img/loading.gif') }}"
                                alt="loading"></p>
                    </div> --}}
                    
                        
                            <div class=" mb-0 mt-2" id="filtros" style="display:none;">


                                {{-- <div class="col-md-12 center-justify">
                                     <div class="" id="headingMarca">
                                         <h5 class="mb-0">
                                             <p class="mt-2 filter-link" data-toggle="collapse" data-target="#collapseMarca"
                                                aria-expanded="true" aria-controls="collapseMarca">
                                                 Buscar por marca <i class="fa fa-angle-down"></i>
                                             </p>
                                         </h5>
                                     </div>
                                     <div id="collapseMarca" class="collapse text-left"
                                          aria-labelledby="headingMarca"  data-parent="#filtros" >
                                         <div class="row mt-1 pt-1">
                                             <div id="postMarcas" class="col-md-12 mt-1 pt-1">

                                             </div>
                                         </div>
                                     </div>
                                 </div>--}}
                                <div class="justify-content-left ">
                                    <div class=" ">


                                        {{-- <div class=''>
                                             <input id="t-0" class='type' type='radio' name='type' value='1' checked>
                                             <label for="t-0" class='type-filter-name '>
                                                 <span  class="mr-2"><i class="fa fa-square"></i></span>Perfumes</label>
                                         </div>
                                         <div class=''>
                                             <input id="t-1" class='type' type='radio' name='type' value='2'>
                                             <label for="t-1" class='type-filter-name '>
                                                 <span class="mr-2"><i class="far fa-square"></i></span>Desodorantes</label>
                                         </div>--}}

                                        <div class="" id="headingProductos">
                                            <h5 class="mb-0">
                                                <span class="mt-2 filter-link" data-toggle="collapse"
                                                    data-target="#collapseProductos" aria-expanded="true"
                                                    aria-controls="collapseProductos">
                                                    Productos <i class="fa fa-angle-down rotate"></i>
                                                </span>
                                            </h5>
                                        </div>
                                        <div id="collapseProductos" class="collapse mt-2"
                                            aria-labelledby="headingProductos" {{--data-parent="#filtros"--}}>
                                            <div class="col-md-12 pl-0">
                                                <input id="t-0" class='type' type='radio' name='type' value='1' checked>
                                                <label for="t-0" class='type-filter-name mr-1'>Perfumes</label>
                                            </div>
                                            <div class="col-md-12 pl-0">
                                                <input id="t-1" class='type' type='radio' name='type' value='2'>
                                                <label for="t-1" class='type-filter-name mr-1'>Desodorantes</label>
                                            </div>
                                        </div>

                                        {{-- <select class="custom-select">
                                             <option selected>Buscar por notas olfativas</option>
                                             <option value="1">One</option>
                                             <option value="2">Two</option>
                                             <option value="3">Three</option>
                                         </select>--}}
                                        <div class="mt-2" id="headingNotasOlfativas">
                                            <h5 class="mb-0">
                                                <span class="mt-2 filter-link" data-toggle="collapse"
                                                    data-target="#collapseNotasOlfativas" aria-expanded="true"
                                                    aria-controls="collapseNotasOlfativas">
                                                    Notas olfativas <i class="fa fa-angle-down rotate"></i>
                                                </span>
                                            </h5>
                                        </div>
                                        <div id="collapseNotasOlfativas" class="collapse"
                                            aria-labelledby="headingNotasOlfativas" data-parent="#filtros">
                                            <div class="row mt-1 pt-1">
                                                {{-- <select class="custom-select custom-select-sm">
                                                     <option selected>Buscar por notas olfativas</option>
                                                     <option value="1">One</option>
                                                     <option value="2">Two</option>
                                                     <option value="3">Three</option>
                                                 </select>--}}
                                                <div id="postNotasOlfativas" class="col-md-12 mt-1 pt-1  text-justify">

                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="mt-2">
                                        <div class="" id="headingSortByPrice">
                                            <h5 class="mb-0">
                                                <span class="filter-link" data-toggle="collapse"
                                                    data-target="#collapseSortByPrice" aria-expanded="true"
                                                    aria-controls="collapseSortByPrice">
                                                    Ordenar por <i class="fa fa-angle-down rotate"></i>
                                                </span>
                                            </h5>
                                        </div>
                                        <div id="collapseSortByPrice" class="collapse "
                                            aria-labelledby="headingSortByPrice" {{--data-parent="#filtros"--}}>
                                            <div class="row mt-1 pt-1 text-align-right ">
                                                {{--                                    <div class='col-md-12'><label><span class='sort-filter-name mr-2'>Sin orden </span></label><input id="sin-orden" class="sortByPrice" type='radio' name='sort' value='0' checked></div>--}}
                                                <div class='col-md-12'>
                                                    <input id="s-0" class='sortByPrice' type='radio' name='sort'
                                                        value='3' checked>
                                                    <label for="s-0" class='sort-filter-name mr-2'>Más
                                                        vendidos</label>
                                                </div>
                                                <div class='col-md-12'>
                                                    <input id="s-1" class='sortByPrice' type='radio' name='sort'
                                                        value='1'>
                                                    <label for="s-1" class='sort-filter-name mr-2'>Menor
                                                        Precio</label>
                                                </div>
                                                <div class='col-md-12'>
                                                    <input id="s-2" class='sortByPrice' type='radio' name='sort'
                                                        value='2'>
                                                    <label for="s-2" class='sort-filter-name mr-2'>Mayor
                                                        Precio</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                </div>

                <div class="col-lg-10 row content " id="post-data" >
                    {{-- <div class="row content" >

                    </div>
                    <div class="ajax-load-more text-center" style="display: none;">
                        <button class="btn btn-buy text-center" id="btn-load-more">Ver más</button>
                        <p style="display:none;" id="ajax-load-more"><img height="50"
                                src="{{ asset('img/loading.gif') }}" alt="loading"></p>
                    </div> --}}
                    
                </div>
            </div>





            </div>
        </div>
    </section><!-- End fragancias Us Section -->
    <section id="lanzamientos" class="lanzamientos">
        <div class="container">
            <div class="row section-title">
                <h2>Lanzamientos</h2>

            </div>


            <div id="post-data-l" class="row"></div>
            <div class="ajax-load-more mx-auto text-center" style="display: none;">
                <button class="btn btn-buy text-center" id="btn-load-more-l">Ver más</button>
                <p style="display:none;" id="ajax-load-more-l"><img height="50" src="{{ asset('img/loading.gif') }}"
                        alt="loading"></p>
            </div>
        </div>
    </section>
</main><!-- End #main -->
<!-- ======= Footer ======= -->

<div id="preloader"></div>
{{-- <a href="#" class="back-to-top"><i class="fas fa-chevron-up"></i></a> --}}
{{-- <a href="#" class=" whatsapp "><i class="fab fa-whatsapp "></i></a> --}}

<div class="modal" tabindex="-1" role="dialog" id="modalProductImage">
    <div class="modal-dialog" role="document">
        <div class="modal-content" style="background-color: rgba(0, 0, 0, 0.6)">
            {{-- <span aria-hidden="true">&times;</span> --}}
            <div class="modal-body">
                <div id="data-img"></div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')

<script src="{{asset('js/jquery.easing.min.js') }}"></script>
<script src="{{asset('js/counterup.min.js') }}"></script>
<script src="{{asset('js/nav.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
<script src="{{asset('js/home.js')}}"></script>

@endsection
