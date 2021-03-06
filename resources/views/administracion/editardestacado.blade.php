@extends('administracion.apanel')
@section('main')
<style>
  label.cabinet{
  display: block;
  cursor: pointer;
}

label.cabinet input.file{
  position: relative;
  height: 100%;
  width: auto;
  opacity: 0;
  -moz-opacity: 0;
  filter:progid:DXImageTransform.Microsoft.Alpha(opacity=0);
  margin-top:-30px;
}

#upload-demo{
  width: 250px;
  height: 250px;
  padding-bottom:25px;
}
figure figcaption {
    position: absolute;
    bottom: 0;
    color: #fff;
    width: 100%;
    padding-left: 9px;
    padding-bottom: 5px;
    text-shadow: 0 0 10px #000;
}
.modal.fade {
    background: rgba(0,0,0,0.5);
}

  </style>

<link href="{{ asset('css/administracion/abm.css')}}" rel="stylesheet">
<link href="{{ asset('css/administracion/croppie.css')}}" rel="stylesheet">

<div class="table-responsive">
    <div class="table-wrapper">
      <div class="table-title">
        <div class="row">
          <div class="col-sm-6">
            <h2><b>Editar Destacado</b></h2>
          </div>
        </div>
      </div>

      <form action="/destacados/{{$masVendido->id}}/update" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <h2>Seleccionar perfume y posición</h2>
        </div>

        <div class="col-md-12">
              @if($errors->any())
                  <div class="card-footer bg-transparent">
                      <div class="col-md-12 text-center">
                          <p class="text-danger"><b>Error:</b></p>
                          <ul class="list-group mb-4">
                              @foreach ($errors->all() as $error)
                                  <li class="list-group text-danger">{{ $error}}</li>
                              @endforeach
                          </ul>
                          <p class="text-danger"><b>Corrija los errores y vuelva a intentar</b></p>
                      </div>
                  </div>
              @endif
      </div>

        <div class="col-md-12">
              @if($errors->any())
                  <div class="card-footer bg-transparent">
                      <div class="col-md-12 text-center">
                          <p class="text-danger"><b>Error:</b></p>
                          <ul class="list-group mb-4">
                              @foreach ($errors->all() as $error)
                                  <li class="list-group text-danger">{{ $error}}</li>
                              @endforeach
                          </ul>
                          <p class="text-danger"><b>Corrija los errores y vuelva a intentar</b></p>
                      </div>
                  </div>
              @endif
          </div>
          
        <div class="mb-3">
            <label for="perfume_id" class="form-label">Seleccione Perfume:</label>
            <select name="perfume_id" id="perfume_id" class="form-control">
            <option value="" selected disabled>Seleccione una opción</option>
            @foreach($perfumes as $perfume)
                <option value="{{$perfume->id}}" @if($perfume->id == $masVendido->perfume->id) selected @endif>{{$perfume->nombre}}</option>
            @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="orden" class="form-label">Posición:</label>
            <select name="orden" id="orden" class="form-control">
                <option value="" selected disabled>Seleccione una opción</option>
                <option value="0" @if($masVendido->orden == 0) selected @endif>#1</option>
                <option value="1" @if($masVendido->orden == 1) selected @endif>#2</option>
                <option value="2" @if($masVendido->orden == 2) selected @endif>#3</option>
                <option value="3" @if($masVendido->orden == 3) selected @endif>#4</option>
                <option value="4" @if($masVendido->orden == 4) selected @endif>#5</option>
                <option value="5" @if($masVendido->orden == 5) selected @endif>#6</option>
                <option value="6" @if($masVendido->orden == 6) selected @endif>#7</option>
                <option value="7" @if($masVendido->orden == 7) selected @endif>#8</option>
                <option value="8" @if($masVendido->orden == 8) selected @endif>#9</option>
                <option value="9" @if($masVendido->orden == 9) selected @endif>#10</option>
                <option value="10" @if($masVendido->orden == 10) selected @endif>#11</option>
                <option value="11" @if($masVendido->orden == 11) selected @endif>#12</option>
                <option value="12" @if($masVendido->orden == 12) selected @endif>#13</option>
                <option value="13" @if($masVendido->orden == 13) selected @endif>#14</option>
                <option value="14" @if($masVendido->orden == 14) selected @endif>#15</option>
                <option value="15" @if($masVendido->orden == 15) selected @endif>#16</option>
                <option value="16" @if($masVendido->orden == 16) selected @endif>#17</option>
                <option value="17" @if($masVendido->orden == 17) selected @endif>#18</option>
                <option value="18" @if($masVendido->orden == 18) selected @endif>#19</option>
                <option value="19" @if($masVendido->orden == 19) selected @endif>#20</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Agregar</button>
        <a href="/destacados" class="btn btn-danger">Cancelar</a>
      </form>

      </div>
    </div>
  </div>







<div class="modal fade bd-example-modal-lg" id="modalCroppie" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" data-backdrop="static" style="z-index: 10000 !important">
  <div class="modal-dialog modal-lg" style="position: absolute;right:39%;">
    <div class="modal-content" style="height:889px !important; width:1699px !important;background-color: transparent;">
       <div id="upload-demo"> <div class="col-md-12 text-center"><button class="btn btn-info" style="background-color: rgba(0, 0, 0, 0.5);color:white;font-weight: bold;border-color:transparent;" id="upload-result">Recortar</button></div></div>

       </div>
    </div>
  </div>


      {{-- <img class="my-image" src="{{ asset('img/carousel/14.jpg')}}" /> --}}
  </div>

<div id="modalAgregar" class="modal fade" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

          <form id="add_form" method="POST" enctype="multipart/form-data">
                <div class="modal-header">
                    <h4 class="modal-title">Agregar imagen a carousel</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Nombre</label>
                        <input type="text" name="name" class="form-control"  placeholder="Un nombre" required>
                    </div>
                    <div class="form-group">
                        <label>Título</label>
                        <input type="text" name="title" class="form-control" placeholder="Un titulo">
                    </div>
                    <div class="form-group">
                        <label>Descripción</label>
                        <input type="text" name="description" class="form-control"  placeholder="Una descripción">
                    </div>
                    <div class="form-group">
                    <label>Imagen</label>
                    <label for="image" class="form-control" id="image-selected">Seleccionar...</label>
                  <input type="file" name="image" accept="image/*"  id="image" class="form-control-file" style="visibility: hidden;">
                  <input type="hidden" id="imagebase64" name="imagebase64">
                  </div>
                   <img src="" id="resultt">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    <input type="submit" id="#add_button" class="btn btn-success" value="Crear">
                    <div class="col-md-12 mx-auto">
                     <div class="alert alert-danger print-error-msg" style="display:none">
                      </div>
                       <div class="alert alert-success print-success-msg" style="display:none">
                      </div>
                  </div>
                </div>
            </form>
        </div>
    </div>
</div>
<div id="modalBorrar" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
    {{ Form::open(array('id' => 'del_form', 'method' => "post", 'autocomplete' => 'off')) }}
        <div class="modal-header">
          <h4 class="modal-title">Atención</h4>
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        </div>
        <div class="modal-body">
          <p style="color:#cc0e0e">Se van a eliminar uno o varios usuarios</p>
          <p class="text-danger"><small>(Esta acción no podrá ser revertida)</small></p>
          <p>Usuarios a eliminar:</p>
          <ul id="aBorrar">

          </ul>
        </div>
        <div class="modal-footer">
          <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
          <input type="submit" class="btn btn-danger" value="Confirmar y borrar">
        </div>
    {{ Form::close() }}
    </div>
  </div>
</div>

<div id="modalBorrarEmpty" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <form>
        <div class="modal-header">
          <h4 class="modal-title">Ups</h4>
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        </div>
        <div class="modal-body">
          <p style>No seleccionaste ningún usuario.</p>

        </div>
        <div class="modal-footer">
          <input type="button" class="btn btn-info" data-dismiss="modal" value="Ok">
        </div>
      </form>
    </div>
  </div>
</div>

<script src="{{ asset('js/administracion/croppie.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="{{ asset('js/administracion/abm.js')}}" ></script>
<script type="text/javascript">
  // Start upload preview image

    var $uploadCrop;


    $uploadCrop = $("#upload-demo").croppie({
        viewport: { width: 931, height: 487, type: "square" },
        boundary: { width: 1200, height: 600 },
        showZoomer: true,
        enableExif: true
    });

    function readFile(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $uploadCrop.croppie("bind", {
                    url: e.target.result
                });
                $(".upload-demo").addClass("ready");
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#image").on("change", function () { readFile(this); $("#modalCroppie").modal("toggle"); });



</script>
<script>




$(document).ready(function(){
$("#upload-result").on("click", function (ev) {

        $uploadCrop.croppie("result", {
           type : "canvas",
           size: "viewport",
           square: true
        })
        .then(function (resp) {
            $("#resultt").attr("src", resp);
            $("#imagebase64").val(resp);
            $("#modalCroppie").modal("toggle");

        });
    });


  $("#del_form").submit(function(e){
    e.preventDefault();
    href = "/apanel/carousel/borrar/";
    var listItems = $("#aBorrar li");
    listItems.each(function(idx, li) {
        var user_id = $(li).attr("data-id");
        href += user_id+"/";
    });

    window.location.href = href;
  });
  $("#borrarSeleccionados").click(function(){
         var checked = [];
     var checkbox = $('table tbody input[type="checkbox"]');
     html = '';
     name = '';
         checkbox.each(function(){
                if(this.checked){
                  id = $(this).val();
                  checked.push(id);
                  name = $("#"+id+"-name").text();
                  html += "<li data-id="+id+"><b>"+name+"</b></li>";
                }

            });


         if(html !== ''){
         $("#aBorrar").html(html);
         $("#modalBorrar").modal('toggle');
         }else{
          $("#modalBorrarEmpty").modal('toggle');
         }
         //Front-end terminado
        /* TODO: Back-end: Borrar ids seleccionados
         form::delete($ids);*/
    });

  $(".borrarSimple").click(function(){
      html = '';
      name = '';
      id = $(this).attr("data-id");
      name = $("#"+id+"-name").text();
      html += "<li data-id="+id+"><b>"+name+"</b></li>";
      $("#aBorrar").html(html);
        $("#modalBorrar").modal('toggle');
         //Front-end terminado
         /*TODO: Back-end: Borrar ids seleccionados
         form::delete($ids);*/
  });

// Start upload preview image
// Start upload preview image

  $('#modalAgregar').on('hidden.bs.modal', function () {
    $("#image-selected").text("Selecionar...");
  })

  $("#image").change(function() {
      filename = this.files[0].name
      $("#image-selected").text(filename);
    });

  $("#add_form").submit(function(e){

        e.preventDefault();
        $.ajaxSetup({
            headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });


        $.ajax({
            url: "<?= URL::to('/apanel/carousel/agregar')?>",
            type: 'POST',
            data: new FormData(this),
            processData: false,
            contentType: false,
            success: function(data) {
              $(".print-error-msg").css('display', 'none');
              $('.print-error-msg').html('');
              $('.print-success-msg').html('<p class="text-center"><b>La imagen ha sido añadida con éxito</b></p><p>Redirección automática...</p>');
              $(".print-success-msg").css('display', 'block');
              location.reload();

            },
            error: function (data) {
                  $(".print-success-msg").css('display', 'none');
                  $('.print-success-msg').html('');
                  $('.print-error-msg').html('');
                  $(".print-error-msg").css('display', 'block');
                   $.each(data.responseJSON.errors, function(key,value) {
                     $('.print-error-msg').append('<p>'+value+'</p');
                 });
            }
        });

    });

 });//document ready ends


</script>

@endsection
