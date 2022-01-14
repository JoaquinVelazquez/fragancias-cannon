<script type="text/javascript">


    $(function () {

        $(".btn-title").click(function () {
            // alert();
            $(':nth-child(1)', this).toggleClass("down", "0.8s");
        })
        let variedades = <?php echo json_encode($producto->variedades) ?>;
        let victim = "{{$tipo ?? -1}}";
        if(victim == -1){ victim = $("#typeSelect option:first").val();}
        let autocomplete;
        let geocoder;
        let input = document.getElementById('location');
        let options = {
            componentRestrictions: {'country': 'ar'},

        };

        $("#typeSelect").val(victim);
        setearImgYPrecio(victim);

        $("#typeSelect").change(function () {
            setearImgYPrecio($(this).val());
        })

        autocomplete = new google.maps.places.Autocomplete(input, options);
        $('#btn-find-store').on('click', function () {
            $('#findStore').modal('toggle');
        })

        $('#search-store-form').on('submit', function (e) {
            e.preventDefault();
            $('#post-stores').html("");
            $('#searching-store').show();
            let location = autocomplete.getPlace();
            geocoder = new google.maps.Geocoder();
            console.log(location['geometry'])
            lat = location['geometry']['location'].lat();
            lng = location['geometry']['location'].lng();

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });


            $.ajax({
                url: "<?= URL::to('/getNearestShop')?>",
                type: 'POST',
                data: {lat: lat, lng: lng},
                success: function (data) {
                    $('#searching-store').hide();
                    let tipo;
                    $.each(data.puntos, function (index, value) {
                        switch (value.tipo_id) {
                            case 1:
                                tipo = "Farmacia";
                                break;
                            case 2:
                                tipo = "Perfumería";
                                break;
                            case 3:
                                tipo = "Tienda";
                                break;
                            case 4:
                                tipo = "Polirubro";
                                break;
                            default:
                                tipo = "Farmacia";
                        }
                        $('#post-stores').append("<div class='col-md-12 mt-2'><span><a href='https://www.google.com.ar/maps/dir/" + lat + ", " + lng + "/" + value.nombre + ", " + value.direccion + ", " + value.localidad + ", " + value.provincia + "' target='_blank'><i class='fas fa-directions mr-2'></i><b>" + tipo + " " + value.nombre.toLowerCase() + "</b>, " + value.direccion.toLowerCase() + "</span></a></div>");
                    });
                    // document.querySelector("#post-stores").innerText = document.querySelector("#post-stores").innerText.toLowerCase().replace(/\b(\w)/g, x => x.toUpperCase());


                },
                error: function (data) {
                    alert('error');
                    $('#searching-store').hide();
                }
            });
        })


        function urlExists(testUrl) {
            let http = jQuery.ajax({
                type: "HEAD",
                url: testUrl,
                async: false
            })
            return http.status;
            // this will return 200 on success, and 0 or negative value on error
        }

        if (urlExists('{{ asset('img/modelos/'.$producto->id.'.jpg') }}') !== 200) {
            $('.slider-ctn').html("");

        }

        if(urlExists('{{ asset('img/campanias/'.$producto->id.'.jpg') }}') !== 404)  {
            $("#campania").html(`
                                                 <hr/>
                                                    <label for="typeSelect" style="font-family: 'Exo Bold';color:black">Campaña publicitaria</label>
                                                <div class="content">
                                                        <div class="content-overlay"></div>
                                                        <img class="content-image img-thumbnail linea-veno" src="{{ asset('img/campanias/'. $producto->id . '.jpg') }}">
                                                            <div class="content-details fadeIn-bottom">
                                                                <a class="venobox" href="{{ asset('img/campanias/'. $producto->id . '.jpg') }}">
                                                                    <i class="fas fa-search-plus icon-overlay mr-2"></i>
                                                                </a>
                                                                <a class="venobox" data-vbtype="video" data-autoplay="true"
                                                                   href="https://www.youtube.com/watch?v=7pFniVpZSQw">
                                                                    <i class="fab fa-youtube icon-overlay"></i>
                                                                </a>
                                                            </div>
                                                    </div>
                                             `)
        }
        if (urlExists('{{ asset('img/lineas/'.$producto->id.'.png') }}') !== 404 ) {

            $("#linea").html(`
                                                   <hr/>
                                                    <label for="typeSelect" style="font-family: 'Exo Bold';color:black">La linea</label>
                                                        <div class="content">
                                                            <a class="venobox" href="{{ asset('img/lineas/' . $producto->id . '.png') }}">
                                                            <div class="content-overlay"></div>
                                                            <img class="content-image img-thumbnail linea-veno" src="{{ asset('img/lineas/' . $producto->id . '.png') }}">
                                                            <div class="content-details fadeIn-bottom">
                                                                <i class="fas fa-search-plus icon-overlay"></i>
                                                            </div>
                                                        </a>
                                                    </div>
                                             `)
        }

        function setearImgYPrecio(codigo_ean) {

                let src = codigo_ean + ".jpg";
                let variedad = null;
                for (let i = 0; i < variedades.length; i++) {
                    if (variedades[i].codigo_ean == codigo_ean) {
                        variedad = variedades[i];
                    }
                }
                if (variedad !== null) {
                    $('#product-img').attr('src', '{{asset('img/perfumes/')}}' + '/' + src);
                    $('#product-price').text("$" + variedad.precio);
                }

        }

    })


</script>
