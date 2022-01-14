@extends('layouts.app')
@section('content')
    <link rel="stylesheet" href="{{asset("css/clientes.css")}}">
    @include('layouts.header')
    <div class="container mt-5">
        <h2>Atencion a Clientes y Usuarios de Fragancias Cannon</h2>
        <p>Les damos la Bienvenida a nuestro Centro de Atención a Clientes de Fragancias Cannon, desde aqui le brindaremos distintas soluciones a sus compras, reclamos, devoluciones o si desea enviarnos sus comentarios.</p>
        <p>Creemos que mantener un contacto cercano con nuestros clientes y usuarios hace que podamos focalizar nuestros esfuerzos en brindarle productos de primera linea que superen sus expectativas.</p>
        <p>Por favor,<strong> siga las instrucciones para una atención personalizada.</strong></p>
        <div class="row justify-content-center text-center p-2">
            <a href="/clientes/usuario" class="col-lg-3 btn-primary p-2">Soy Usuario</a>
            <a href="/clientes/comercio" class="col-lg-3 btn-primary ml-4 p-2">Soy Comercio</a>
        </div>
    </div>
    
@endsection
@section('scripts')
    <script type="text/javascript">
    </script>
@endsection
