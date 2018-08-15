@extends('layouts.app')

@section('company', 'BF Global')
@section('title', 'Proveedores')

@section('content')
<h3 class="title-5 m-b-35"><b>Proveedor</b> Editar</h3>
<div class="card col-md-12">
    <div class="card-header">
        <strong>Proveedor</strong> {{$proveedor->razon_social}}
    </div>
    <form method="POST" action="{{ route('proveedor.update',$proveedor->id) }}"  role="form" class="form-horizontal">

        {{ csrf_field() }}
        <input name="_method" type="hidden" value="PATCH">
        <div class="card-body ">
                    <h3>Datos</h3>
                    <p>
          
                        <label for="">RUC/NIC</label>
                        <input type="text" value="{{$proveedor->identificacion}}" class="form-control"  name="identificacion">
                        <label for="">Razón Social</label>
                        <input type="text" value="{{$proveedor->razon_social}}" class="form-control"  name="razon_social">

                        <label for="">Website</label>
                        <input type="text" value="{{$proveedor->website}}" class="form-control"  name="website">

                        <label for="">Estado</label>
                        <input type="text" value="{{$proveedor->activo}}" class="form-control"  name="activo">

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