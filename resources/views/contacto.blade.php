@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="{{asset("css/contacto.css")}}">
@include('layouts.header')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">
            <h2 class="titulo1">Dejanos un mensaje</h2>
            <div class="form-container mx-auto mt-3 mb-5">
                <form id="contact-form">
                    <ul class="contact-ul">
                        <li>
                            <label for="name"><span class="label-span">Nombre <span class="required-star">*</span></span></label>
                            <input type="text" id="name" name="name" required>
                        </li>
                        <li>
                            <label for="mail"><span class="label-span">Email <span class="required-star">*</span></span></label>
                            <input type="email" id="mail" name="mail" required>
                        </li>
                        <li>
                            <label for="msg"><span class="label-span">Mensaje <span class="required-star">*</span></span></label>
                            <textarea rows="4" cols="50" name="message" required></textarea>
                        </li>
                        <li>
                            <input type="submit" value="Enviar">
                        </li>
                        <li class="ajax-load text-center" >
                            <p style="display:none;" id="ajax-load"><img height="50" src="{{ asset('img/loading.gif') }}"></p>
                        </li>
                        <li>
                            <div id="s-response" class="alert alert-success" style="display: none;">¡<b>Hemos recibido tu mensaje</b>! Pronto recibirás una respuesta al email ingresado.</div>
                            <div id="e-response" class="alert alert-danger" style="display: none;">¡<b>Ups</b>! No pudimos envíar tu mensaje, intentá nuevamente.</div>
                        </li>
                    </ul>
                </form>
            </div>
        </div>
        <div class="col-md-6">
            <h2 class="titulo1">También podés...</h2>
                <p class="mx-auto text-center">  Enviarnos un correo electrónico a info@cannonpuntana.com</p>
                <p class="mx-auto text-center">Llamarnos al (5411) 4865-9610</p>
                <p class="mx-auto text-center mb-3 text-center" style="color:grey">Lunes a viernes de 9:00 a 18:00 horas.</p>
            <hr/>
            <h2 class="titulo1 mt-3">Oficina de administración y ventas</h2>
            <p class="text-center">
                <b class="mr-3">CANNON PUNTANA S.A.</b>
                <a href="http://qr.afip.gob.ar/?qr=GzVEIQwMDVkVYqIeYinOiA,," target="_F960AFIPInfo">
                <img src="http://www.afip.gob.ar/images/f960/DATAWEB.jpg" height="50" border="0">
                </a>
            </p>
            <div class="responsive-map-container">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3283.998620966702!2d-58.42189368477037!3d-34.60419638045928!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcca619b0f13a7%3A0xdfc377c386edcd30!2sJer%C3%B3nimo%20Salguero%20550%2C%20C1191%20CABA!5e0!3m2!1ses!2sar!4v1611840767057!5m2!1ses!2sar" frameborder="" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script type="text/javascript">


    $("#contact-form").submit(function(e){
        $('#s-response').hide();
        $('#e-response').hide();
        $('#ajax-load').show();
        e.preventDefault();
          $.ajaxSetup({
                headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                url: "<?= URL::to('contacto/send')?>",
                type: 'POST',
                data: $("#contact-form").serialize(),
                success: function(data) {
                    $('#ajax-load').hide();
                    $('#s-response').show();

                      
                },
                error: function (data) {
                    $('#ajax-load').hide();
                    $('#e-response').show();
                   
                }
            });

        });

</script>
@endsection