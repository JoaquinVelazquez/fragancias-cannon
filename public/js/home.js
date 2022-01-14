$(function () {

    $(document).scroll(function () {
        let $nav = $(".fixed-top");
        $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
    });
});


function hover(element) {
    let src = ($(element).attr('data-id')) + ".jpg";

    element.setAttribute('style', "transition: background-image 0.8s ease-in-out;background-image: url('img/perfumes/cajas/" + src + "')");
}

function unhover(element) {
    let src = ($(element).attr('data-id')) + ".jpg";

    element.setAttribute('style', "transition: background-image 0.8s ease-in-out;background-image: url('img/perfumes/" + src + "')");

}
$(".filter-link").click(function () {
    $(':nth-child(1)', this).toggleClass("down");
})
$(document).ready(function () {

    let page;
    let linea;
    let marca = 0;
    let last_page;
    let sort = 0;
    let type = 1;
    let key = "";
    let nota = 0;
    let actualizarMarcas = false;
    let actualizarNotas = false;


    // });
    $(".linea").on("click", function () {
        page = 1;
        linea = $(this).attr('data-id');
        marca = 0;
        key = "";
        $("#search").val("");
        sort = 0;
        nota = 0;
        $('#sin-orden').prop("checked", true);
        $(".linea").children().removeClass("linea-active");
        $(this).children().addClass('linea-active');
        $("#search").val("");
        actualizarMarcas = true;
        actualizarNotas = true;
        loadData();


    });

    $("body").on("change", "input[name=marca]:radio", function () {
        page = 1;
        marca = $(this).val();
        key = "";
        $("#search").val("");

        actualizarNotas = true;
        if (marca == 0) {
            actualizarMarcas = true;
        }

        loadData();

    });

    $("body").on("change", "input[name=sort]:radio", function () {
        page = 1;
        sort = $(this).val();
        loadData();

    });

    $("body").on("change", "input[name=type]:radio", function () {
        page = 1;
        type = $(this).val();
        let type_text = $(this).next("label").text().toLowerCase().slice(0, -1);
        let search_text = "¿Qué " + type_text + " buscas?"
        $("#search").attr('placeholder', search_text);
        marca = 0;
        nota = 0;
        key = "";
        $("#search").val("");
        actualizarMarcas = true;
        actualizarNotas = true;
        loadData();

    });

    $("body").on("change", "input[name=nota]:radio", function () {
        page = 1;
        nota = $(this).val();
        key = "";
        $("#search").val("");

        actualizarMarcas = true;
        if (nota == 0) {
            actualizarNotas = true;
        }

        loadData();


    });

    $(document).on('submit', 'form', function (e) {
        e.preventDefault();
        page = 1;
        marca = 0;
        linea = 0;
        nota = 0;
        key = $("#search").val();
        $(".linea").children().removeClass("linea-active");
        $("#0l").children().addClass('linea-active');
        actualizarMarcas = true;
        actualizarNotas = true;
        loadData();

    });


    function makeRouteArguments() {
        return '?linea=' + linea + '&page=' + page + '&marca=' + marca + '&sort=' + sort + '&keyword=' + key + '&type=' + type + '&nota=' + nota;
    }

    function loadData() {
        page = 1;

        $.ajax({

            url: makeRouteArguments(),
            type: "get",
            beforeSend: function () {
                $('#ajax-load').show();
            }
        })
            .done(function (data) {
                $('#ajax-load').hide();
                $("#post-data").html(data.html);
                $('#btn-load-more').html("Ver más");
                $('#btn-load-more').prop('disabled', false);
                $('#btn-load-more').show();
                $('.ajax-load-more').show();
                $('#sugeridos').show();
                if (actualizarMarcas) {

                    $('#postMarcas').html("");
                    $('#postMarcas').append(`<div class='form-check form-check-inline'>
                                                 <input id="m-0" class='form-check-input' type='radio' name='marca' value='0'>
                                                  <label for="m-0" class="form-check-label"><span class='marca-filter-name mr-1'>Todas </span></label>
                                                 </div>`);
                    $.each(data.marcas, function (key, value) {
                        $('#postMarcas').append(`<div class='form-check form-check-inline'>
                                                     <input id="m-${key + 1}" class="form-check-input" type='radio' name='marca' value='${value.id}'>
                                                     <label for="m-${key + 1}" class="form-check-label"><span class='marca-filter-name mr-1'>${value.nombre}</span></label>
                                                     </div>`);
                    });
                    actualizarMarcas = false;

                }
                if (actualizarNotas) {
                    $('#postNotasOlfativas').html("");
                    $('#postNotasOlfativas').append(`<div class='form-check form-check-inline'>
                                                         <input id="n-0" class='nota form-check-input' type='radio' name='nota' value='0'>
                                                         <label for="n-0" class='form-check-label'><span class='notas-filter-name mr-1'>Todas </span></label>
                                                         </div>`);
                    $.each(data.notas_olfativas, function (key, value) {
                        $('#postNotasOlfativas').append(`<div class='form-check form-check-inline'>
                                                             <input id="n-${key + 1}" class="form-check-input" type='radio' name='nota' value='${value.id}'></label>
                                                             <label for="n-${key + 1}" class='form-check-label'><span class='notas-filter-name mr-1'>${value.nombre}</span>
                                                             </div>`);
                    });
                    actualizarNotas = false;
                }
                let marca_len = $('input[name=marca]').length;
                if (marca_len > 2) {
                    $('input[name=marca][value=' + marca + ']').prop("checked", true);
                } else {
                    $('input[name=marca]:eq(1)').prop("checked", true);
                }
                let nota_len = $('input[name=nota]').length;
                if (nota_len > 2) {
                    $('input[name=nota][value=' + nota + ']').prop("checked", true);
                } else {
                    $('input[name=nota]:eq(1)').prop("checked", true);
                }
                last_page = data.last_page;
                if (page == last_page) {
                    $('#btn-load-more').hide();

                }
                ``


                // $('#buscador').show();
                $('#filtros').show();
                $('#notas-olfativas').show();

            })
            .fail(function (jqXHR, ajaxOptions, thrownError) {
                alert('error...');
            });
    }

    function loadMoreData(page) {

        $.ajax({

            url: makeRouteArguments(),
            type: "get",
            beforeSend: function () {
                $('#ajax-load-more').show();
            }
        })
            .done(function (data) {
                // alert(data.html);
                // if(data.html == "")
                // {
                // 	$('#btn-load-more').html("No hay más fragancias");
                // 	$('#btn-load-more').prop('disabled', true);
                // 	$('#ajax-load-more').hide();
                // 	return;
                // }
                last_page = data.last_page;
                if (page == last_page) {
                    $('#btn-load-more').hide();

                }
                $('#ajax-load-more').hide();
                $("#post-data").append(data.html);
            })
            .fail(function (jqXHR, ajaxOptions, thrownError) {
                alert('error...');
            });
    }

    $("#btn-load-more").on("click", function () {
        page++;
        loadMoreData(page);
    });

    $("#0l").trigger("click");

    // LANZAMIENTOS

    let page_l = 0;
    let last_page_l;

    function loadMoreLanzamientos(page) {

        $.ajax({

            url: '?page_l=' + page_l,
            type: "get",
            beforeSend: function () {
                $('#ajax-load-more-l').show();
            }
        })
            .done(function (data) {
                last_page_l = data.last_page_l;
                // if(data.html_l == "")
                // {
                // 	$('#btn-load-more-l').html("No hay más lanzamientos");
                // 	$('#btn-load-more-l').prop('disabled', true);
                // 	$('#ajax-load-more-l').hide();
                // 	return;
                // }

                // alert(page+" = "+last_page_l);
                if (page_l == last_page_l) {
                    $('#btn-load-more-l').hide();

                }
                $("#post-data-l").append(data.html_l);
                $('#ajax-load-more-l').hide();
            })
            .fail(function (jqXHR, ajaxOptions, thrownError) {
                alert('error...');
            });
    }

    $("#btn-load-more-l").on("click", function () {
        page_l++;
        loadMoreLanzamientos(page_l);
    });
    $("#btn-load-more-l").trigger("click");


    $(".linea-link").click(function () {
        $(".submenu-wrapper").css('display', 'none');
        let nl = $(this).attr('data-id');
        linea = nl;
        marca = 0;
        nota = 0;
        sort = 0;
        type = 0;
        loadData(nl, 0);
        $(".linea").children().removeClass("linea-active");
        $("#" + nl + "l").children().addClass('linea-active');
        $('html, body').animate({
            scrollTop: $("#fragancias").offset().top
        }, 2000);
        setInterval(function () {
            $(".submenu-wrapper").css("display", "");
        }, 2000);
    });

    $(".marca-link").click(function () {
        $(".submenu-wrapper").css('display', 'none');
        let nm = $(this).data('id');
        let nl = $(this).data('marca_id');

        linea = nl;
        marca = nm;
        loadData(nl, nm);
        $(".linea").children().removeClass("linea-active");
        $("#" + nl + "l").children().addClass('linea-active');
        $('html, body').animate({
            scrollTop: $("#fragancias").offset().top
        }, 2000);
        setInterval(function () {
            $(".submenu-wrapper").css("display", "");
        }, 2000);

    });


});
