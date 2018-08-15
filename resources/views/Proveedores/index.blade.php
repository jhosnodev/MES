@extends('layouts.app')

@section('company', 'BF Global')
@section('title', 'Proveedores')

@section('content')


<h3 class="title-5 m-b-35">Proveedores</h3>

{{ csrf_field() }}





    <div class="table-data__tool-right col-md-4 ml-auto">

        <a href="{{ route('proveedor.create') }}" id="create-trigger" class="au-btn au-btn-icon au-btn--green au-btn--small text-right add-modal">
            <i class="zmdi zmdi-plus"></i>Agregar Proveedor
        </a >


    </div>

<div class="table-responsive table-responsive-data2">
    <table class="table table-data2">
        <thead>
            <tr>
                <th>ID</th>
                <th>RUC/NIC</th>
                <th>Razón Social</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($proveedores as $proveedor)
            <tr class="tr-shadow">



                <td>{{ $proveedor->id}}</td>
                <td>
                    {{ $proveedor->identificacion}}
                </td>
                <td>{{ $proveedor->razon_social}}</td>
                <td>
                    <div class="table-data-feature">
                        <a href="{{action('ProveedorController@show', $proveedor->id)}}" class="item" data-toggle="tooltip" data-placement="top" title="Mostrar"><i class="zmdi zmdi-eye"></i></a>
                        <a href="{{action('ProveedorController@edit', $proveedor->id)}}" class="item" data-toggle="tooltip" data-placement="top" title="Editar">
                            <i class="zmdi zmdi-edit"></i>
                        </a>
                        <form action="{{action('ProveedorController@destroy', $proveedor->id)}}" method="post">
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
            url: '<?php echo e(url('/nuevo_proveedor')); ?>',
            method:'GET',
            data:{},
            success:function(data)
            {
              $('#all-modal').html(data);
          }
      });
      });
  </script>

  @endsection
