@extends('layouts.app')

@section('company', 'BF Global')
@section('title', 'Gestión de Activos')

@section('content')


<h3 class="title-5 m-b-35">Equipos</h3>

{{ csrf_field() }}



<div class="table-data__tool">
    <div></div>

    <div class="table-data__tool-right float-right col-md-offset-8">

        <a href="{{ route('equipo.create') }}" id="create-trigger" class="au-btn au-btn-icon au-btn--green au-btn--small text-right add-modal">
            <i class="zmdi zmdi-plus"></i>Agregar Equipo
        </a >


    </div>
</div>
<div class="table-responsive table-responsive-data2">
    <table class="table table-data2">
        <thead>
            <tr>
                <th>ID</th>
                <th>Descripción</th>
                <th>Tipo</th>
                <th>Marca</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($equipos as $equipo)
            <tr class="tr-shadow">



                <td>{{ $equipo->id}}</td>
                <td>{{ $equipo->descripcion}}</td>
                <td>{{ $equipo->tipo}}</td>
                <td>{{ $equipo->marca}}</td>
                <td>
                    <div class="table-data-feature">
                        <a href="{{action('ClienteController@show', $equipo->id)}}" class="item" data-toggle="tooltip" data-placement="top" title="Mostrar">
                            <i class="zmdi zmdi-eye"></i>
                        </a>

                        <a href="{{action('ClienteController@edit', $equipo->id)}}" class="item" data-toggle="tooltip" data-placement="top" title="Editar">
                            <i class="zmdi zmdi-edit"></i>
                        </a>

                        <form action="{{action('ClienteController@destroy', $equipo->id)}}" method="post">
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
