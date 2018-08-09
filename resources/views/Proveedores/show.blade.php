@extends('layouts.app')

@section('company', 'BF Global')
@section('title', 'Proveedores')

@section('content')

<h3 class="title-5 m-b-35"><b>Proveedor</b> {{$proveedor->razon_social}}</h3>

 <a href="{{action('ProveedorController@edit', $proveedor->id)}}" id="create-trigger" class="au-btn au-btn-icon au-btn--green au-btn--small text-right add-modal">
                                            <i class="zmdi zmdi-plus"></i>Editar
                                        </a >
{{$proveedor->id}}
{{$proveedor->razon_social}}
{{$proveedor->website}}
{{$proveedor->estado}}


<p>adssd</p>
@endsection