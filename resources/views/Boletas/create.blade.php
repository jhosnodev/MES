@extends('layouts.app')

@section('company', 'BF Global')
@section('title', 'Presupuesto')

@section('content')


<h3 class="title-5 m-b-35"><b>Presupuesto</b> Nuevo</h3>


<div class="card col-md-12">
  
  <div class="card-body">
    <form action="{{route('presupuesto.store')}}">
      {{ csrf_field() }}
      <div class="row form-group">

	<label for="cliente">Cliente</label> <input type="text" id="cliente" class="form-control"> <a id="modal-trigger-create" href="#modal-large-1" data-toggle="modal" ><i class="zmdi zmdi-account-add" data-toggle="tooltip" data-placement="top" title="Agregar cliente"></i></a>
</div>
      <div class="row form-group">

	<label for="cliente">Tiempo de validez</label> <input type="text" id="cliente" class="form-control">
<label for="cliente">Plazo de pago</label> <input type="text" id="cliente" class="form-control">
</div>
</form>
</div>
</div>




@endsection

@section('js')
<script>
	$('#modal-trigger-create').on('click', function (event) {
          var button = $(event.relatedTarget); // Button that triggered the modal


          $.ajax({
            url: '{{url('elementos/create')}}',
            method:'GET',
            data:{},
            success:function(data)
          {
            $('#modal-large-1').html(data).modal('show');
             
            $('#canc').on('click', function (event) { $('.evento').html(''); });
          },
          error:function(data){
            console.log(data);
          }
      });
        });
$('#canc').click(function(){
    $('modal').modal('hide');
})
</script>
@endsection