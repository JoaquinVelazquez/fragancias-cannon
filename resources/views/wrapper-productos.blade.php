

@foreach($variedades as $variedad)
    <a href="/detalle/{{$variedad->perfume->id}}/{{ $variedad->codigo_ean }}">
        <div class="col-md-3" style="filter: drop-shadow(6px 6px 4px rgba(0, 0, 0, 0.15));">

            <figure class="card card-product-grid product-wrapper">
            @if( $variedad->presentacionesPorVariedades[0]->presentacion_id !== 2 && $variedad->limited == 0)
                    <div class="img-wrap" style="background-image: url('../img/perfumes/{{$variedad->codigo_ean}}.jpg');" data-id="{{$variedad->codigo_ean}}" onmouseover="hover(this);" onmouseout="unhover(this);">
                @else
                    <div class="img-wrap" style="background-image: url('../img/perfumes/{{$variedad->codigo_ean}}.jpg');" data-id="{{$variedad->codigo_ean}}">
                @endif
                </div>
                <figcaption class="info-wrap">
                    <a href="#" class="title mb-2 text-center mt-1 nombre-producto">{{$variedad->perfume->nombre}}</a>

                    <p class="text-muted text-center" style="font-size:0.9em;color: black !important;font-weight: 600;">
                        <?php $presentaciones_x_variedades = count($variedad->presentacionesPorVariedades); ?>
                        @foreach($variedad->presentacionesPorVariedades->sortBy('vol') as $presentacionPorVariedad)
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
                    </p>
                    <div class="price-wrap text-center" >
                        <span class="price text-center" style="font-size:1.2em; font-family: 'Open Sans'">$ {{number_format($variedad->precio, 0, "", ".")}}</span>
                    </div>
                     {{--<hr>
                    <p class="mb-3">
                        @foreach($variedad->perfume->notasOlfativasPorPerfumes as $nota)
                            <span class="tag" style="text-transform: capitalize;">{{ $nota->notaOlfativa->nombre }}</span>
                        @endforeach
                    </p>--}}

                </figcaption>
            </figure>
        </div> <!-- col.// -->
    </a>
@endforeach
