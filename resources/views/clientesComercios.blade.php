@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="{{asset("css/clientes.css")}}">
@include('layouts.header')
<div class="container mt-5">
    <h2>Atencion a Clientes y Usuarios de Fragancias Cannon</h2>
    <p>Les damos la Bienvenida a nuestro Centro de Atención a Clientes de Fragancias Cannon, desde aqui le brindaremos
        distintas soluciones a sus compras, reclamos, devoluciones o si desea enviarnos sus comentarios.</p>
    <p>Creemos que mantener un contacto cercano con nuestros clientes y usuarios hace que podamos focalizar nuestros
        esfuerzos en brindarle productos de primera linea que superen sus expectativas.</p>
    <p>Por favor,<strong> siga las instrucciones para una atención personalizada.</strong></p>
    <div class=" justify-content-center text-left p-2">
        <div class="form-group">
            <label for="email">Ingrese su Nombre y Apellido:</label>
            <input type="text" class="form-control" id="email" placeholder="Enter email">
        </div>
        <div class="form-group">
            <label for="pwd">Ingrese DNI (sin puntos ni espacios)</label>
            <input type="password" class="form-control" id="pwd" placeholder="30123456">
        </div>
        <div class="form-group">
            <label for="email">Nro de Telefono (Incluya Codigo de Area y sin espacios, Ej: 541112345678)</label>
            <input type="email" class="form-control" id="email" placeholder="Enter email">
        </div>
        <div class="form-group">
            <label for="email">Correo electronico</label>
            <input type="email" class="form-control" id="email" placeholder="Enter email">
        </div>
        
        <button type="submit" class="btn btn-default">Submit</button>
        </form>
    </div>
</div>

@endsection
@section('scripts')
<script type="text/javascript">
</script>
@endsection
