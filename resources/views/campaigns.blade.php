@extends('layouts.app')
@section('content')
    <link rel="stylesheet" href="{{asset("css/campaigns.css")}}">
    @include('layouts.header')
    <link rel="stylesheet" href="{{ asset('vendor/venobox/venobox.css') }}" type="text/css" media="screen"/>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap");

        .ajax-load {
            padding: 10px 0px;
            width: 100%;
        }

        .container .card {
            position: relative;
            width: 300px;
            height: 400px;
            margin: 20px;
            overflow: hidden;
            box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.2);
            border-radius: 15px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container .card .content {
            position: absolute;
            top: 15px;
            right: 0%;
            height: 40px;
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 10;
            flex-direction: column;
            transition: top 0.5s;
            transition-delay: 0.15s;
        }

        .container .card:hover .content {
            bottom: 0;
            transition-delay: 0s;
        }

        .container .card .content .contentBx h3 {
            text-transform: uppercase;
            color: #fff;
            letter-spacing: 2px;
            font-weight: 500;
            font-size: 18px;
            text-align: center;
            margin: 20px 0 15px;
            line-height: 1.1em;
            transition: 0.5s;
            transition-delay: 0.6s;
            opacity: 0;
            transform: translateY(-20px);
        }

        .container .card:hover .content .contentBx h3 {
            opacity: 1;
            transform: translateY(0);
        }

        .container .card .content .contentBx h3 span {
            font-size: 12px;
            font-weight: 300;
            text-transform: initial;
        }

        .container .card .content .sci {
            position: relative;
            display: flex;
            transition: top 0.5s;
            transition-delay: 0.65s;
        }

        .container .card .content .sci li {
            list-style: none;
            margin-left: 10px;
            margin-right: 10px;
            margin-top: 3px;
            transform: translateY(40px);
            transition: 0.5s;
            opacity: 0;
            transition-delay: calc(0.2s * var(--i));
        }

        .container .card:hover .content .sci li {
            transform: translateY(0);
            opacity: 1;
        }

        .container .card:hover .content .sci {
            background-color: rgba(0, 0, 0, 0.3);
            backdrop-filter: blur(15px);
            box-shadow: 0 -10px 10px rgba(0, 0, 0, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 5px;
        }

        .container .card .content .sci li a {
            color: white;
            font-size: 24px;
        }

        ::-webkit-scrollbar {
            display: none;
        }


        .linea-ul {
            border-bottom: 0.5px solid lightgrey;
            padding-bottom: 13px;
        }

        .link-item {
            position: relative;
            font-size: 1.2em;
            width: auto;
            margin: 0 !important;
            padding: 15px 25px 15px;
            text-transform: uppercase;
        }

        .link-item:after {
            content: "";
            display: block;
            position: absolute;
            width: 100%;
            height: 1.5px;
            bottom: 0;
            right: 0;
            background-color: black;
            visibility: hidden;
            -webkit-transform: scaleX(0);
            transform: scaleX(0);
            -webkit-transition: all 0.3s ease-in-out 0s;
            transition: all 0.5s ease-in-out;

        }


        .link-item:hover:after {
            color: #00aaee;
            visibility: visible;
            -webkit-transform: scaleX(1);
            transform: scaleX(1);


        }

        .link-item:hover, .linea-active {
            text-shadow: 0 0.015em #101010, 0 -0.015em #101010, 0.01em 0 #101010, -0.01em 0 #101010;
        }

        .linea-active {
            padding-bottom: 12px;
            border-bottom: 2px solid black;
        }

        .linea-active:after {

            content: "";
            display: block;
            position: absolute;
            width: 100%;
            height: 1.5px;
            bottom: 0;
            right: 0;
            background-color: black;

            -webkit-transition: paused;
            transition: paused;


        }

    </style>

    <div class="container" style="min-height: 70vh">
        <div class="row mt-5">
            <ul class="list-inline col-md-12 linea-ul" style="display: flex;justify-content: center;">
                <li class="list-inline-item linea" data-id="3" id="3l"><span class='link-item'>Hombre<span></li>
                <li class="list-inline-item linea" data-id="2" id="2l"><span class='link-item'>Mujer</span></li>
                <li class="list-inline-item linea" data-id="1" id="1l"><span class='link-item'>Infantiles</span></li>
                <li class="list-inline-item linea" data-id="4" id="4l"><span class='link-item'>Alianzas</span></li>
                <li class="list-inline-item linea" data-id="0" id="0l"><span class='link-item linea-active'>Todo</span>
                </li>
            </ul>
        </div>
        <div class="row mt-2 mb-5">
            <div class="ajax-load text-center">

                <p style="display:none;" id="ajax-load"><img height="50" src="{{ asset('img/loading.gif') }}"></p>
            </div>

            <div id="post-data" style="display: contents">
                @include('wrapper-campanias')
            </div>
            <div class="no-campaigns text-center mx-auto" style="display: none">
                <p class="alert alert-secondary">No existen campañas vigentes para esta linea</p>
            </div>

        </div>
    </div>

@endsection
@section('scripts')
    <script type="text/javascript" src="{{ asset('vendor/venobox/venobox.min.js') }}"></script>
    <script type="text/javascript">

        $('.venobox').venobox();


        $(".linea").on("click", function () {

            linea = $(this).attr('data-id');
            $(".linea").children().removeClass("linea-active");
            $(this).children().addClass('linea-active');
            $("#search").val("");
            loadData(linea);


        });

        function loadData(linea) {
            $.ajax({

                url: '?linea=' + linea,
                type: "get",
                beforeSend: function () {
                    $('#ajax-load').show();
                }
            })
                .done(function (data) {
                    $('#ajax-load').hide();
                    // $("#post-data").html("");
                    if (data.html_c !== "") {
                        $(".no-campaigns").hide();
                        $("#post-data").html(data.html_c);
                    } else {
                        $("#post-data").html("");
                        $(".no-campaigns").show();
                    }


                })
                .fail(function (jqXHR, ajaxOptions, thrownError) {
                    alert('error...');
                });
        }


    </script>
@endsection
