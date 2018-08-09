@extends('layouts.app')

@section('company', 'BF Global')
@section('title', 'Proveedores')

@section('content')

<div class="card">
<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="proveedor-tab" data-toggle="tab" href="#proveedor" role="tab" aria-controls="proveedor" aria-selected="true">Proveedor</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="contacto-tab" data-toggle="tab" href="#contacto" role="tab" aria-controls="contacto" aria-selected="false">Contacto</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="sucursal-tab" data-toggle="tab" href="#sucursal" role="tab" aria-controls="sucursal" aria-selected="false">sucursal</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="banco-tab" data-toggle="tab" href="#banco" role="tab" aria-controls="banco" aria-selected="false">Banco</a>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="proveedor" role="tabpanel" aria-labelledby="proveedor-tab">.1.</div>
  <div class="tab-pane fade" id="contacto" role="tabpanel" aria-labelledby="contacto-tab">.2.</div>
  <div class="tab-pane fade" id="sucursal" role="tabpanel" aria-labelledby="sucursal-tab">.3.</div>
  <div class="tab-pane fade" id="banco" role="tabpanel" aria-labelledby="banco-tab">.4.</div>
</div>
  
  <a href="#" class="btn btn-block btn-success next-step">Siguiente</a>
</div>

<script>
$(document).ready(function () {
    //Initialize tooltips
    $('.nav-tabs > li a[title]').tooltip();
    
    //Wizard
    $('a[data-toggle="tab"]').on('show.bs.tab', function (e) {

        var $target = $(e.target);
    
        if ($target.parent().hasClass('disabled')) {
            return false;
        }
    });

    $(".next-step").click(function (e) {

        var $active = $('.nav-tabs li>a.active');
        $active.parent().next().removeClass('disabled');
        nextTab($active);

    });
    $(".prev-step").click(function (e) {

        var $active = $('.nav-tabs li>a.active');
        prevTab($active);

    });
});

function nextTab(elem) {
    $(elem).parent().next().find('a[data-toggle="tab"]').click();
}
function prevTab(elem) {
    $(elem).parent().prev().find('a[data-toggle="tab"]').click();
}

</script>
@endsection