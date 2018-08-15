@extends('layouts.app')

@section('company', 'BF Global')
@section('title', 'Clientes')

@section('content')
<h3 class="title-5 m-b-35"><b>Cliente</b> Editar</h3>
<div class="card col-md-12">
    <div class="card-header">
        <strong>Cliente</strong> {{$cliente->razon_social}}
    </div>
    <form method="POST" action="{{ route('cliente.update',$cliente->id) }}"  role="form" class="form-horizontal">
    {{--<form method="POST" action=" {{ action('ProveedorController@show', $proveedor->id )}}"  role="form"  class="form-horizontal">--}}
        {{ csrf_field() }}
        <input name="_method" type="hidden" value="PATCH">
        <div class="card-body ">
            
                            <p>
                   

                        <label for="">RUC/NIC</label>
                        <input type="text" value="{{$cliente->identificacion}}" class="form-control"  name="identificacion">
                        <label for="">Razón Social</label>
                        <input type="text" value="{{$cliente->razon_social}}" class="form-control"  name="razon_social">

                

                        <label for="">Estado</label>
                        <input type="text" value="{{$cliente->estado}}" class="form-control"  name="estado">

                    </p>
            
        </div>
        <div class="card-footer ">
            <div class="col-md-4 ml-auto">
                     <button type="submit" class="button1">
                     Actualizar
                </button>
            </div>
           

        </div>
    </form>
</div>

@endsection