@extends('layouts.app')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/detalle_producto.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/venobox/venobox.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/awsSelect/awselect.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/awsSelect/awselect.min.css') }}">

    @include('css_blade.detalle_producto')
    @include('layouts.header')


    <div class="linea-overlay" style="background: white">
        <section class="slider-ctn" style="max-width: 100%">
            <img style="  width: 100% !important;" src="{{ asset('img/modelos/'.$producto->id.'.jpg') }}">
        </section>
    </div>
    <div class="bread-bar" style="border-top:0.1px solid lightgrey">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-6 col-xs-8">
                    <ol class="breadcrumb">
                        <li><a href="/#fragancias"><i class="fa fa-arrow-alt-circle-left"></i> Volver</a></li>
                        {{--                        <li style="opacity: 0.7">Volver</li>--}}
                        {{--                        <li class="active">{{$producto->nombre}}</li>--}}
                    </ol>

                </div>
                <div class="col-md-4 col-sm-6 col-xs-4">
                </div>
            </div>
        </div>
    </div>
    <div class="aboutus-secktion" style="padding-top:25px">
        <div class="container">
            <div class="row">

                <div class="col-md-6 mx-auto text-center">
                    <img id="product-img" src="{{asset('img/perfumes/'.$producto->variedades[0]->codigo_ean.'.jpg')}}"
                         alt="" class="img-fluid" style="max-height:500px;">
                </div>


                <div class="col-md-6">
                    <div class="col-md-12">
                        <h1 style="color:black;font-family: 'Exo Bold';text-transform: uppercase;">{{$producto->nombre}}</h1>
                    </div>
                    <div class="col-md-12 price-wrap mt-4">
                        <span class="price"><b><span id="product-price"
                                                     style="color:black;font-size:1.5em">${{number_format($producto->variedades[0]->precio, 0, "", ".")}}</span> <span
                                    style="font-size:1em">(precio sugerido)</span></b></span>
                    </div>

                    <div class="col-md-12">
                        <hr/>
                        <label for="typeSelect" style="color:black">Presentación</label>
                    </div>
                    {{-- <div clas="col-md-12">
                        <div class="col-md-8">
                            <select class="form-select"  id="typeSelect" aria-label="Default select example" data-placeholder="Elegir el tamaño"
                                    style="padding: 5px 15px 5px; border-radius: 10px">
                                @foreach ($producto->variedades as $variedad)
                                    @if($variedad->activo)
                                        <option value="{{$variedad->codigo_ean}}">
                                            <?php $presentaciones_x_variedades = count($variedad->presentacionesPorVariedades); ?>
                                            @foreach($variedad->presentacionesPorVariedades->sortBy('medida') as $presentacionPorVariedad)
                                                {{ $presentacionPorVariedad->presentacion->descripcion }}
                                                @if($presentacionPorVariedad->vol != 0)
                                                    de {{ $presentacionPorVariedad->vol }} {{ $presentacionPorVariedad->medida }}
                                                @endif
                                                @if($presentaciones_x_variedades > 1)
                                                    <?php $presentaciones_x_variedades--?>
                                                    @if($presentacionPorVariedad->vol !== 0 || $presentacionPorVariedad->presentacion_id == 7)
                                                        +
                                                    @endif
                                                @endif
                                            @endforeach
                                            @if ($presentacionPorVariedad->vap)
                                                con vaporizador
                                            @else

                                            @endif

                                        </option>
                                    @endif

                                @endforeach
                            </select>
                        </div>
                    </div> --}}





                    <div class="select-box">
                        <div class="options-container">
                          {{-- <div class="option">
                            <label for="automobiles">Automobiles</label>
                          </div>
                
                          <div class="option">
                            <label for="film">Film & Animation</label>
                          </div>
                
                          <div class="option">
                            <label for="science">Science & Technology</label>
                          </div> --}}
                          @foreach ($producto->variedades as $variedad)
                          @if($variedad->activo)
                          <div class="option">  <label value="{{$variedad->codigo_ean}}">
                                  <?php $presentaciones_x_variedades = count($variedad->presentacionesPorVariedades); ?>
                                  @foreach($variedad->presentacionesPorVariedades->sortBy('medida') as $presentacionPorVariedad)
                                      {{ $presentacionPorVariedad->presentacion->descripcion }}
                                      @if($presentacionPorVariedad->vol != 0)
                                          de {{ $presentacionPorVariedad->vol }} {{ $presentacionPorVariedad->medida }}
                                      @endif
                                      @if($presentaciones_x_variedades > 1)
                                          <?php $presentaciones_x_variedades--?>
                                          @if($presentacionPorVariedad->vol !== 0 || $presentacionPorVariedad->presentacion_id == 7)
                                              +
                                          @endif
                                      @endif
                                  @endforeach
                                  @if ($presentacionPorVariedad->vap)
                                      con vaporizador
                                  @else

                                  @endif

                              </label>
                            </div>
                          @endif

                      @endforeach
                      
                        </div>
                
                        <div class="selected">
                          Elegir el tamaño
                        </div>
                      </div>

















                    <div class="col-md-12 mt-4 botones">

                        <button class="btn btn-primary mr-3" id="btn-find-store">¿Donde comprar? <i
                                class="fas fa-map-marker-alt ml-2"></i></button>
                        <button class="btn btn-success" id="btn-find-store">Comprar online <i
                                class="fa fa-shopping-bag ml-2"></i></button>
                    </div>

                    <div class="col-md-6 mt-4">


                    </div>
                    <div class="col-md-12 mt-4">
                        <div class="accordion=" id="accordionExample">
                            <div class="card" style="border: none;">
                                <div class="card-header" id="headingOne"
                                     style="background-color: white;padding-left:0px">
                                    <h2 class="mb-0">
                                        <button class="btn btn-title btn-block text-left" type="button"
                                                data-toggle="collapse"
                                                data-target="#collapseOne" aria-expanded="true"
                                                aria-controls="collapseOne" style="font-family: 'Exo Bold';">
                                            Fragancia <i class="fas fa-angle-down float-right "></i>
                                        </button>
                                    </h2>
                                </div>

                                <div id="collapseOne" class="collapse" aria-labelledby="headingOne"
                                     data-target="#accordionExample">
                                    <div class="card-body" style="padding-bottom: 0px;padding-top:0px">
                                        <p class="image-aboutus-para mt-2">{{$producto->fragancia ?? ""}}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card" style="border: none;">
                                <div class="card-header" id="headingTwo"
                                     style="background-color: white;padding-left:0px;">
                                    <h2 class="mb-0">
                                        <button class="btn btn-title btn-block text-left" type="button"
                                                data-toggle="collapse"
                                                data-target="#collapseTwo" aria-expanded="true"
                                                aria-controls="collapseTwo" style="font-family: 'Exo Bold';">
                                            Familias olfativas <i class="fas fa-angle-down float-right "></i>
                                        </button>
                                    </h2>
                                </div>

                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                     data-target="#accordionExample">
                                    <div class="card-body" style="padding-bottom: 0px;padding-top:0px;">
                                        <p class="image-aboutus-para mt-2">
                                            @foreach($producto->notasOlfativasPorPerfumes as $notaPorPerfume)
                                                <span
                                                    style="text-transform: capitalize;">{{ $notaPorPerfume->notaOlfativa->nombre }}</span>
                                                @if($loop->last)
                                                    {{"."}}
                                                @else
                                                    {{"y"}}
                                                @endif
                                            @endforeach
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card" style="border: none;">
                                <div class="card-header" id="headingThree"
                                     style="background-color: white;padding-left:0px;">
                                    <h2 class="mb-0">
                                        <button class="btn btn-title btn-block text-left" type="button"
                                                data-toggle="collapse"
                                                data-target="#collapseThree" aria-expanded="true"
                                                aria-controls="collapseThree" style="font-family: 'Exo Bold';">
                                            Notas olfativas <i class="fas fa-angle-down float-right "></i>
                                        </button>
                                    </h2>
                                </div>

                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                     data-target="#accordionExample">
                                    <div class="card-body" style="padding-bottom: 0px;padding-top:0px;">
                                        <p class="image-aboutus-para mt-2">
                                            {{-- @foreach($producto->notasOlfativasPorPerfumes as $notaPorPerfume)
                                                 <span style="text-transform: capitalize;">{{ $notaPorPerfume->notaOlfativa->nombre }}</span>
                                                 @if($loop->last)
                                                     {{"."}}
                                                 @else
                                                     {{"y"}}
                                                 @endif
                                             @endforeach--}}
                                            Notas de salida: bla bla bla
                                            <br/>
                                            Notas de cuerpo: bla bla bla
                                            <br/>
                                            Notas de fondo: bla bla bla
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mt-4">
                                @if (isset($producto->instagram))
                                    <a href="{{ $producto->instagram }}" target="_blank"><i
                                            class="fab fa-instagram insta"></i></a>
                                @endif
                                @if (isset($producto->facebook))
                                    <a href="{{ $producto->facebook }}" target="_blank"><i
                                            class="fab fa-facebook fb"></i></a>
                                @endif
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row">
               {{-- <select data-placeholder="Select an Option" id="hero_select" style="display: none;">
                    <option selected="" value="beautiful">Beautiful</option>
                    <option value="badass">Badass</option>
                    <option value="awesome">Awesome</option>
                </select>--}}
                <div class="col-md-6 mb-5" id="campania">

                </div>
                <div class="col-md-6 mb-5" id="linea">

                </div>
            </div>
        </div>


        <div class="modal fade" id="findStore" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog cascading-modal " role="document"
                 style="position: absolute;top: 40%;left: 50%;transform: translate(-40%, -50%)!important;">
                <!--Content-->
                <div class="modal-content">

                    <!--Header-->
                    <div class="modal-header mx-auto">
                        <img src="{{ asset('img/detalle_producto/find-store.png') }}" class="img-fluid">
                    </div>
                    <!--Body-->
                    <div class="modal-body text-center mb-1">

                        <h5 class="mt-1 mb-2">Ingresá tu dirección, ciudad o barrio</h5>
                        <form id="search-store-form">
                            <div class="col-md-12 ml-0 mr-0">
                                <input type="text" id="location" class="form-control ml-0" placeholder="" required>

                            </div>

                            <div class="col-md-12 text-center mt-2">

                                <button type="submit" class="btn btn-search-store mt-1"> Buscar tiendas <i
                                        class="fas fa-search-location ml-2"></i></button>
                                <p style="display:none;" id="searching-store" class="mt-2"><img height="50"
                                                                                                src="{{ asset('img/loading.gif') }}">
                                </p>
                            </div>
                        </form>
                        <div class="stores mt-4" id="post-stores"></div>
                        <div class="col-md-12 mt-2"><small>* Productos sujetos a disponibilidad</small></div>
                    </div>

                </div>
                <!--/.Content-->

            </div>
        </div>



 





        <div id="preloader"></div>
        <a href="#" class="back-to-top"><i class="fa fa-arrow-up"></i></a>

        @endsection
        @section('scripts')

            <script src="{{asset('js/jquery.easing.min.js') }}"></script>
            <script src="{{asset('js/counterup.min.js') }}"></script>
            <script src="{{asset('vendor/venobox/venobox.min.js') }}" crossorigin="anonymous"></script>
            <script src="{{asset('vendor/awsSelect/awselect.js') }}"></script>
            <script src="{{asset('js/main.js')}}"></script>
            @include('js_blade.detalle_producto')
            <script
                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD5c4Qaue6O56Z205zjGUASBuuRdP7zT1A&libraries=places&callback=GoogleMapsDemo.Application.Init"
                async defer></script>
            <script>

                $('.venobox').venobox({
                    bgcolor: 'transparent'
                });


            </script>

@endsection
