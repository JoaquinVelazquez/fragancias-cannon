<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>{{ $pageTitle ?? 'Fragancias Cannon' }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <link rel="apple-touch-icon" sizes="120x120" href="{{asset('img/fav/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('img/fav/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('img/fav/favicon-16x16.png')}}">
    <link rel="manifest" href="{{asset('img/fav/site.webmanifest')}}">
    <link rel="mask-icon" href="{{asset('img/fav/safari-pinned-tab.svg')}}" color="#5bbad5">

    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style type="text/css">
        @font-face {
          font-family: "Exo Bold";
          src: url({{asset('fonts/Exo-Bold.ttf')}})
        }
        @font-face {
          font-family: "futur";
          src: url({{asset('fonts/futur.ttf')}})
        }
        @font-face {
          font-family: "Futura-Bold";
          src: url({{asset('fonts/Futura.ttf')}})
        }
        @font-face {
          font-family: "FUTURA BOLD";
          src: url({{asset('fonts/FUTURA BOLD.ttf')}})
        }
    </style>    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>
<body>
    <script src="{{ asset('js/font-awesome.min.js')}}"></script>

    <div id="WAButton"></div>


    @yield('content')
{{--    @include('layouts.footer')--}}
    @yield('scripts')
    <script type="text/javascript" src="{{asset('/vendor/floating-whatsapp-master/floating-wpp.min.js')}}"></script>
    <link rel="stylesheet" href="{{asset('/vendor/floating-whatsapp-master/floating-wpp.min.css')}}">

    <script async>

             $('#WAButton').floatingWhatsApp({
                 phone: '5491138314363', //WhatsApp Business phone number
                 headerTitle: '¡Hablá con nosotros por WhatsApp!', //Popup Title
                 popupMessage: 'Hola, cómo podemos ayudarte?', //Popup Message
                 showPopup: true, //Enables popup display
                 buttonImage: '<img src="img/whatsapp.svg" />', //Button Image
                 autoOpenTimeout:0,
                 zIndex: 1059,
                 //headerColor: 'crimson', //Custom header color
                 //backgroundColor: 'crimson', //Custom background button color
                 position: "right" //Position: left | right

             });

     </script>
