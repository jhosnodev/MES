@extends('layouts.app')

@section('company', 'BF Global')
@section('title', 'Gestión de Materiales')

@section('content')


<h3 class="title-5 m-b-35">Artículos</h3>

{{ csrf_field() }}





    <div class="table-data__tool-right col-md-4 ml-auto">

        <a href="{{ route('item.create') }}" id="create-trigger" class="au-btn au-btn-icon au-btn--green au-btn--small text-right add-modal">
            <i class="zmdi zmdi-plus"></i>Agregar Artículo
        </a >


    </div>

<div class="table-responsive table-responsive-data2">
    <table class="table table-data2">
        <thead>
            <tr>
                <th>ID</th>
                <th>Código</th>
                <th>Marca</th>
                <th>Familia</th>
                <th>descripción</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($items as $item)
            <tr class="tr-shadow">



                <td>{{ $item->id}}</td>
                <td>{{ $item->codigo}}</td>
                <td>{{ $item->marca}}</td>
                <td>{{ $item->familia}}</td>
                
                <td>{{ $item->descripcion}}</td>
                <td>
                    <div class="table-data-feature">
                        <a href="{{action('ItemController@show', $item->id)}}" class="item" data-toggle="tooltip" data-placement="top" title="Mostrar"><i class="zmdi zmdi-eye"></i></a>
                        <a href="{{action('ItemController@edit', $item->id)}}" class="item" data-toggle="tooltip" data-placement="top" title="Editar">
                            <i class="zmdi zmdi-edit"></i>
                        </a>
                        <form action="{{action('ItemController@destroy', $item->id)}}" method="post">
                   {{csrf_field()}}
                   <input name="_method" type="hidden" value="DELETE">

                   <button class="item" data-toggle="tooltip" data-placement="top" title="Eliminar">
                                                            <i class="zmdi zmdi-delete"></i>
                                                        </button>
                   
                    </div>
                </td>
  
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<!-- END DATA TABLE -->




@endsection
@section('script')
<script>

    $('#create-trigger').on('click', function (event) {
          var button = $(event.relatedTarget); // Button that triggered the modal

          $.ajax({
            url: '<?php echo e(url('item/create')); ?>',
            method:'GET',
            data:{},
            success:function(data)
            {
              $('##modal-large-2').html(data);
          }
      });
      });
  </script>

  @endsection
