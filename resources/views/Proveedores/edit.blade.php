@extends('layouts.app')

@section('company', 'BF Global')
@section('title', 'Proveedores')

@section('content')
<div class="card col-md-12">
    <div class="card-header">
        <strong>Proveedor</strong> {{$proveedor->razon_social}}
    </div>
    <form method="POST" action="{{ route('proveedor.update',$proveedor->id) }}"  role="form" class="form-horizontal">
    {{--<form method="POST" action=" {{ action('ProveedorController@show', $proveedor->id )}}"  role="form"  class="form-horizontal">--}}
        {{ csrf_field() }}
        <input name="_method" type="hidden" value="PATCH">
        <div class="card-body card-block">
            
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="identificacion" class=" form-control-label">Indentificación </label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="texts" id="identificacion" name="identificacion" placeholder="RUC/NIC" class="form-control" value="{{$proveedor->identificacion}}">
                    <span class="help-block">Consulta con el Sunat</span>
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="razon_social" class=" form-control-label">Razón Social</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" id="razon_social" name="razon_social" placeholder="Enter Password..." class="form-control" value="{{$proveedor->razon_social}}">
                    <span class="help-block">Razón social de la persona</span>
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="website" class=" form-control-label">Website</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" id="website" name="website" placeholder="Enter Password..." class="form-control" value="{{$proveedor->website}}">
                    <span class="help-block">Website de la persona</span>
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="estado" class=" form-control-label">Estado</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" id="estado" name="estado" placeholder="Enter Password..." class="form-control" value="{{$proveedor->activo}}">
                    <span class="help-block">Estado de la persona</span>
                </div>
            </div>
            
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary btn-sm">
                <i class="fa fa-dot-circle-o"></i> Enviar
            </button>

        </div>
    </form>
</div>

@endsection