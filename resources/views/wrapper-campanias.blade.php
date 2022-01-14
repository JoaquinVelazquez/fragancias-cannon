@foreach($campanias as $campania)
    <div class="card mx-auto mr-2">
        <div class="imgBx">
            <img
                src="{{ asset('img/campanias/'.$campania->id.'.jpg') }}"
                alt="" class="img-fluid"
            />
        </div>
        <div class="content">
{{--            <div class="contentBx">--}}
{{--                <h3>{{ $campania->nombre }} <br/><span>--}}{{--anio--}}{{--</span></h3>--}}
{{--            </div>--}}
            <ul class="sci" style="padding-left:0px">
                <li style="--i: 1">
                    <a class="venobox" href="{{ asset('img/campanias/'.$campania->id.'.jpg') }}"><i class="fas fa-search-plus"></i></a>
                </li>
                @if($campania->video_url !== "")
                    <li style="--i: 2">
                        <a class="venobox" data-vbtype="video" data-autoplay="true"
                           href="{{ $campania->video_url }}"><i class="fab fa-youtube"></i></a>
                    </li>
                @endif
            </ul>
        </div>
    </div>
@endforeach
