{{--
<style type="text/css">
    /*--------------------------------------------------------------
# Header
--------------------------------------------------------------*/
    #header {
        transition: all 0.5s;
        z-index: 997;
        border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    }

    #header.header-scrolled, #header.header-inner-pages {
        background: rgba(40, 40, 40, 0.9);
    }

    #header .logo {
        font-size: 28px;
        margin: 0;
        padding: 0;
        line-height: 1;
        font-weight: 700;
        letter-spacing: 0.5px;
    }

    #header .logo a {
        color: #fff;
    }

    #header .logo img {
        max-height: 35px;
    }

    @media (max-width: 992px) {
        #header {
            border: 0;
            padding: 15px 0;
        }
    }
    /*--------------------------------------------------------------
    # Navigation Menu
    --------------------------------------------------------------*/
    /* Desktop Navigation */
    .nav-menu ul {
        margin: 0;
        padding: 0;
        list-style: none;
    }

    .nav-menu > ul {
        display: flex;
    }

    .nav-menu > ul > li {
        position: relative;
        white-space: nowrap;
        margin: 0 12px;
    }

    .nav-menu a {
        display: block;
        position: relative;
        color: rgba(255, 255, 255, 0.7);
        transition: 0.3s;
        font-size: 14px;
        padding: 25px 3px;
        font-weight: 600;
        font-family: "Open Sans", sans-serif;
        text-decoration: none;
    }

    .nav-menu > ul > li > a:before {
        content: "";
        position: absolute;
        width: 100%;
        height: 2px;
        bottom: -2px;
        left: 0;
        background-color: #ffffff;
        visibility: hidden;
        width: 0px;
        transition: all 0.3s ease-in-out 0s;
    }

    .nav-menu a:hover:before, .nav-menu li:hover > a:before, .nav-menu .active > a:before {
        visibility: visible;
        width: 100%;
    }

    .nav-menu a:hover, .nav-menu .active > a, .nav-menu li:hover > a {
        color: #fff;
    }

    .nav-menu .drop-down ul {
        display: block;
        position: absolute;
        left: 0;
        top: calc(100% + 30px);
        z-index: 99;
        opacity: 0;
        visibility: hidden;
        padding: 10px 0;
        background: #fff;
        box-shadow: 0px 0px 30px rgba(127, 137, 161, 0.25);
        transition: 0.3s;
        border-top: 2px solid #000000;
    }

    .nav-menu .drop-down:hover > ul {
        opacity: 1;
        top: 100%;
        visibility: visible;
    }

    .nav-menu .drop-down li {
        min-width: 180px;
        position: relative;
    }

    .nav-menu .drop-down ul a {
        padding: 10px 20px;
        font-size: 14px;
        font-weight: 500;
        text-transform: none;
        color: #282828;
    }

    .nav-menu .drop-down ul a:hover, .nav-menu .drop-down ul .active > a, .nav-menu .drop-down ul li:hover > a {
        color: #000000;
    }

    .nav-menu .drop-down > a:after {
        content: "\ea99";
        font-family: IcoFont;
        padding-left: 5px;
    }

    .nav-menu .drop-down .drop-down ul {
        top: 0;
        left: calc(100% - 30px);
    }

    .nav-menu .drop-down .drop-down:hover > ul {
        opacity: 1;
        top: 0;
        left: 100%;
    }

    .nav-menu .drop-down .drop-down > a {
        padding-right: 35px;
    }

    .nav-menu .drop-down .drop-down > a:after {
        content: "\eaa0";
        font-family: IcoFont;
        position: absolute;
        right: 15px;
    }

    @media (max-width: 1366px) {
        .nav-menu .drop-down .drop-down ul {
            left: -90%;
        }
        .nav-menu .drop-down .drop-down:hover > ul {
            left: -100%;
        }
        .nav-menu .drop-down .drop-down > a:after {
            content: "\ea9d";
        }
    }
    /* Mobile Navigation */
    .mobile-nav-toggle {
        position: fixed;
        right: 15px;
        top: 18px;
        z-index: 9998;
        border: 0;
        background: none;
        font-size: 24px;
        transition: all 0.4s;
        outline: none !important;
        line-height: 1;
        cursor: pointer;
        text-align: right;
    }

    .mobile-nav-toggle i {
        color: #fff;
    }

    .mobile-nav {
        position: fixed;
        top: 55px;
        right: 15px;
        bottom: 15px;
        left: 15px;
        z-index: 9999;
        overflow-y: auto;
        background: #fff;
        transition: ease-in-out 0.2s;
        opacity: 0;
        visibility: hidden;
        border-radius: 10px;
        padding: 10px 0;
    }

    .mobile-nav * {
        margin: 0;
        padding: 0;
        list-style: none;
    }

    .mobile-nav a {
        display: block;
        position: relative;
        color: #282828;
        padding: 10px 20px;
        font-weight: 500;
        outline: none;
    }

    .mobile-nav a:hover, .mobile-nav .active > a, .mobile-nav li:hover > a {
        color: #ffffff;
        text-decoration: none;
    }

    .mobile-nav .drop-down > a:after {
        content: "\ea99";
        font-family: IcoFont;
        padding-left: 10px;
        position: absolute;
        right: 15px;
    }

    .mobile-nav .active.drop-down > a:after {
        content: "\eaa1";
    }

    .mobile-nav .drop-down > a {
        padding-right: 35px;
    }

    .mobile-nav .drop-down ul {
        display: none;
        overflow: hidden;
    }

    .mobile-nav .drop-down li {
        padding-left: 20px;
    }

    .mobile-nav-overly {
        width: 100%;
        height: 100%;
        z-index: 9997;
        top: 0;
        left: 0;
        position: fixed;
        background: rgba(15, 15, 15, 0.6);
        overflow: hidden;
        display: none;
        transition: ease-in-out 0.2s;
    }

    .mobile-nav-active {
        overflow: hidden;
    }

    .mobile-nav-active .mobile-nav {
        opacity: 1;
        visibility: visible;
    }

    .mobile-nav-active .mobile-nav-toggle i {
        color: #fff;
    }

    .active{
        border-bottom-color: transparent;
    }
    .item-link {
        text-transform: uppercase !important;
        color:white !important;
        display: block;
    }

</style>
<div id="header" style="background-color: rgba(0, 0, 0, .9)">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-xl-9 d-flex align-items-center justify-content-between">
                <nav class="nav-menu d-none d-lg-block">
                    <ul>

                        <li><a href="/#lanzamientos" class="item-link">Lanzamientos</a></li>
                        <li><a href="/#fragancias" class="item-link">Fragancias</a></li>
                        <li><a href="/campaigns" class="item-link">Campañas</a></li>
                        <li><a href="/nosotros " class="item-link">Nosotros</a></li>
                        --}}
{{--						<li><a href="/clientes">Clientes</a></li>--}}{{--

                        <li><a href="/contacto" class="item-link">Contacto</a></li>
                    </ul>
                </nav>
                <a href="/" class="logo"><img src="{{asset('img/home/logo-03.png')}}" alt="" class="img-fluid"></a>
            </div>
        </div>
    </div>
</div>
--}}

@extends('layouts.app')
@section('content')


    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <header id="header" class="fixed-top">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-12 d-flex align-items-center justify-content-between" style="max-width: 80% !important">
                    <nav class="nav-menu d-none d-lg-block">
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
                                                <a data-marca_id="3" data-id="{{ $hombre->id }}" class="submenu-link marca-link">{{ $hombre->nombre }}</a>
                                            @endforeach
                                        </div>
                                        <div class="submenu-group col-md-2">
                                            <a class="submenu-link-master linea-link" data-id="2">Mujer</a>
                                            @foreach($mujeres as $mujer)
                                                <a data-marca_id="2" data-id="{{ $mujer->id }}" class="submenu-link marca-link">{{ $mujer->nombre }}</a>
                                            @endforeach
                                        </div>
                                        <div class="submenu-group col-md-2">
                                            <a class="submenu-link-master linea-link" data-id="1">Infantiles</a>
                                            @foreach($ninios as $ninio)
                                                <a data-marca_id="1" data-id="{{ $ninio->id }}" class="submenu-link marca-link">{{ $ninio->nombre }}</a>
                                            @endforeach
                                        </div>
                                        <div class="submenu-group col-md-2">
                                            <a class="submenu-link-master linea-link" data-id="4">Alianzas</a>
                                            @foreach($alianzas as $alianza)
                                                <a data-marca_id="4" data-id="{{ $alianza->id }}" class="submenu-link marca-link">{{ $alianza->nombre }}</a>
                                            @endforeach
                                        </div>
                                        <div class="submenu-group col-md-2">
                                            <a class="submenu-link-master linea-link" data-id="5">Ediciones limitadas</a>
                                            {{--                                        @foreach($alianzas as $alianza)--}}
                                            {{--                                            <a data-marca_id="4" data-id="{{ $alianza->id }}"class="submenu-link marca-link">{{ $alianza->nombre }}</a>--}}
                                            {{--                                        @endforeach--}}
                                        </div>
                                        <div class="submenu-group col-md-2">
                                            <a class="submenu-link-master linea-link" data-id="0">Ver todos</a>
                                        </div>
                                    </div>
                                </div>
                            </li>


{{--                            <li><a href="/campaigns" class="item-link">Campañas</a></li>--}}
                            <li><a href="/nosotros " class="item-link">Nosotros</a></li>
{{--                            						<li><a href="/clientes" style="color:white !important">Clientes</a></li>--}}
                            <li><a href="/contacto" class="item-link">Contacto</a></li>

                        </ul>
                    </nav>
                    <a href="/" class="logo"><img src="{{asset('img/home/logo-03.png')}}" alt="" class="img-fluid"></a>
                </div>
            </div>
        </div>
    </header>

    {{--<section id="hero" class="d-flex flex-column justify-content-center" style="padding: 0 !important;">--}}
    {{--<div class="container-fluid d-flex min-vh-100 flex-column px-0 justify-content-center">--}}
    {{--    <div id="carouselExampleIndicators" class="carousel slide flex-fill d-flex flex-column bg-danger justify-content-center carousel-fade" data-ride="carousel">--}}
    {{--     <ol class="carousel-indicators">--}}
    {{--          <?php $z = 0; ?>--}}
    {{--          @foreach ($imagenes_carousel as $imagen)--}}

    {{--          @if($z==0)--}}
    {{--           <li data-target="#carouselExampleIndicators" data-slide-to="{{$z}}" class="active"></li>--}}
    {{--          @else--}}
    {{--           <li data-target="#carouselExampleIndicators" data-slide-to="{{$z}}"></li>--}}
    {{--          @endif--}}
    {{--           <?php $z++; ?>--}}
    {{--          @endforeach--}}
    {{--         </ol>--}}
    {{--        <div class="carousel-inner flex-fill bg-dark d-flex flex-column " role="listbox">--}}
    {{--        	   <?php $z = 0; ?>--}}
    {{--	          @foreach ($imagenes_carousel as $imagen)--}}

    {{--	          @if($z==0)--}}
    {{--	           <div class="carousel-item active" style="background-image: url('img/carousel/{{$imagen->id}}.jpg')">--}}
    {{--	          @else--}}
    {{--	           <div class="carousel-item" style="background-image: url('img/carousel/{{$imagen->id}}.jpg')">--}}
    {{--	          @endif--}}
    {{--	          --}}{{----}}
    {{--	           <div class="carousel-caption d-none d-md-block" style="margin-bottom:-100px">--}}
    {{--              @if (isset($imagen->titulo))--}}
    {{--              <h5><span class="alert alert-info" style="background-color: rgba(0, 0, 0, 0.3);color:white;font-weight: bold;border-color:transparent;">{{ $imagen->titulo }}</span></h5><br/>--}}
    {{--              @endif--}}
    {{--              @if (isset($imagen->descripcion))--}}
    {{--              <p><span class="alert alert-info" style="background-color: rgba(0, 0, 0, 0.5);color:white;font-weight: bold;border-color:transparent;">{{ $imagen->descripcion }}</span></p>--}}
    {{--              @endif--}}
    {{--            </div>--}}
    {{--               --}}
    {{--        	</div>--}}
    {{--        	 <?php $z++; ?>--}}
    {{--          @endforeach--}}
    {{--        </div>--}}
    {{--       <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">--}}
    {{--          <span class="carousel-control-prev-icon" aria-hidden="true"></span>--}}
    {{--           <span class="sr-only">Previous</span>--}}
    {{--        </a>--}}
    {{--        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">--}}
    {{--          <span class="carousel-control-next-icon" aria-hidden="true"></span>--}}
    {{--           <span class="sr-only">Next</span>--}}
    {{--        </a>--}}
    {{--    </div>--}}
    {{--</div>--}}

    {{--</div>--}}


    {{--</section>--}}
    <section id="hero" style="padding-bottom:40px;">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="{{ asset('img/carousel/1.jpg') }}" style="height:400px" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ asset('img/carousel/2.jpg') }}" style="height:400px" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ asset('img/carousel/3.jpg') }}" style="height:400px" alt="Third slide">
                </div>
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
                <div class="section-title">
                    <h2 class="text-center">Fragancias</h2>
                    <div class="row mt-2 mb-2" id="buscador">
                        <div class="col-md-4 mx-auto text-center">

                            <form id="search-form">
                                <div class="input-group mb-4">
                                    <input type="search" placeholder="Ej: Kevin Black, Ciel Noir, ..."  id="search" aria-describedby="button-addon5" class="form-control" name="keyword">
                                    <div class="input-group-append" >
                                        <button id="button-addon5" type="submit" class="btn btn-primary" style="background-color: black !important;border-color:black"><i class="fa fa-search"></i></button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                    <div class="row linea-ul mx-auto text-center" style="display: flex;justify-content: center;">
                        <ul class="list-inline">
                            <li class="list-inline-item linea" data-id="3" id="3l"><span class='link-item'>Hombre</span></li>
                            <li class="list-inline-item linea" data-id="2" id="2l"><span class='link-item'>Mujer</span></li>
                            <li class="list-inline-item linea" data-id="1" id="1l"><span class='link-item'>Infantiles</span></li>
                            <li class="list-inline-item linea" data-id="4" id="4l"><span class='link-item'>Alianzas</span></li>
                            <li class="list-inline-item linea" data-id="5" id="5l"><span class='link-item'>Ediciones limitadas</span></li>
                            <li class="list-inline-item linea" data-id="0" id="0l"><span class='link-item'>Todo</span></li>
                        </ul>
                    </div>
                    <div class="row mb-0 mt-2" id="filtros" style="display:none;">

                        <div class="col-md-12 center-justify">
                            <div class="" id="headingMarca">
                                <h5 class="mb-0">
                                    <p class="mt-2 filter-link" data-toggle="collapse" data-target="#collapseMarca" aria-expanded="true" aria-controls="collapseMarca">
                                        Marca <i class="fa fa-angle-down"></i>
                                    </p>
                                </h5>
                            </div>
                            <div id="collapseMarca" class="collapse " aria-labelledby="headingMarca" {{-- data-parent="#filtros" --}}>
                                <div class="row mt-1 pt-1">
                                    <div id="postMarcas"  class="col-md-12 mt-1 pt-1">

                                    </div>
                                </div>
                            </div>
                            <hr/>
                        </div>

                        <div class="col-md-12 center-justify">
                            <div class="" id="headingNotasOlfativas">
                                <h5 class="mb-0">
                                    <p class="mt-2 filter-link" data-toggle="collapse" data-target="#collapseNotasOlfativas" aria-expanded="true" aria-controls="collapseNotasOlfativas">
                                        Notas olfativas <i class="fa fa-angle-down"></i>
                                    </p>
                                </h5>
                            </div>
                            <div id="collapseNotasOlfativas" class="collapse " aria-labelledby="headingNotasOlfativas" {{-- data-parent="#filtros" --}}>
                                <div class="row mt-1 pt-1">
                                    <div id="postNotasOlfativas" class="col-md-12 mt-1 pt-1">

                                    </div>
                                </div>
                            </div>
                            <hr/>
                        </div>
                        <div class="col-sm-12 col-md-6 text-center text-md-left">
                            <div class="" id="headingType">
                                <h5 class="mb-0">
                                    <p class="mt-2 filter-link" data-toggle="collapse" data-target="#collapseType" aria-expanded="true" aria-controls="collapseType">
                                        Presentación <i class="fa fa-angle-down"></i>
                                    </p>
                                </h5>
                            </div>
                            <div id="collapseType" class="collapse " aria-labelledby="headingType" {{-- data-parent="#filtros" --}}>
                                <div class="row mt-1 pt-1">
                                    <div class='col-md-12'><label><input class='type' type='radio' name='type' value='1' checked><span class='type-filter-name mr-1'> Fragancias </span></label></div>
                                    <div class='col-md-12'><label><input class='type' type='radio' name='type' value='2'><span class='type-filter-name mr-1'> Desodorantes </span></label></div>
                                </div>
                            </div>
                            <hr/>
                        </div>
                        <div class="col-sm-12 col-md-6 text-center text-md-right">
                            <div class="" id="headingSortByPrice">
                                <h5 class="mb-0">
                                    <p class="mt-2 filter-link" data-toggle="collapse" data-target="#collapseSortByPrice" aria-expanded="true" aria-controls="collapseSortByPrice">
                                        Ordenar por <i class="fa fa-angle-down"></i>
                                    </p>
                                </h5>
                            </div>
                            <div id="collapseSortByPrice" class="collapse " aria-labelledby="headingSortByPrice" {{-- data-parent="#filtros" --}}>
                                <div class="row mt-1 pt-1">
                                    {{--                                    <div class='col-md-12'><label><span class='sort-filter-name mr-2'>Sin orden </span></label><input id="sin-orden" class="sortByPrice" type='radio' name='sort' value='0' checked></div>--}}
                                    <div class='col-md-12'><label><span class='sort-filter-name mr-2'>Más relevantes</span></label><input class='sortByPrice' type='radio' name='sort' value='3' checked></div>
                                    <div class='col-md-12'><label><span class='sort-filter-name mr-2'>Menor Precio</span></label><input class='sortByPrice' type='radio' name='sort' value='1'></div>
                                    <div class='col-md-12'><label><span class='sort-filter-name mr-2'>Mayor Precio</span></label><input class='sortByPrice' type='radio' name='sort' value='2'></div>
                                </div>
                            </div>
                            <hr/>
                        </div>

                    </div>
                    <div class="row mt-5" id="sugeridos" style="display:none;">
                        <div class="col-md-12 text-right" style="font-family: 'Roboto', sans-serif">(*) Los precios publicados son los sugeridos.</div>
                    </div>
                    <div class="ajax-load text-center" >

                        <p style="display:none;" id="ajax-load"><img height="50" src="{{ asset('img/loading.gif') }}" alt="loading"></p>
                    </div>
                    <div class="row content" id="post-data">
                        {{-- @include('wrapper-productos') --}}

                    </div>
                </div>


                <div class="ajax-load-more text-center" style="display: none;">
                    <button class="btn btn-buy text-center" id="btn-load-more">Ver más</button>
                    <p style="display:none;" id="ajax-load-more"><img height="50" src="{{ asset('img/loading.gif') }}" alt="loading"></p>
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
                    <p style="display:none;" id="ajax-load-more-l"><img height="50" src="{{ asset('img/loading.gif') }}" alt="loading"></p>
                </div>
            </div>
        </section>
    </main><!-- End #main -->
    <!-- ======= Footer ======= -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top"><i class="fa fa-arrow-up"></i></a>
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
