@extends('layouts.app')

@section('company', 'BF Global')
@section('title', 'Gestión de Activos')

@section('content')
<h3 class="title-5 m-b-35"><b>Equipo</b> Editar</h3>
<div class="card col-md-12">
    <div class="card-header">
        <strong>Equipo</strong> {{$equipos->descripcion}}
    </div>
    <form method="POST" action="{{ route('equipo.update',$equipos->id) }}"  role="form" class="form-horizontal">

        {{ csrf_field() }}
        <input name="_method" type="hidden" value="PATCH">
        <div class="card-body">
            
            <label for="">Marca</label>
                        <input type="text" value="{{$equipos->marca}}" class="form-control" name="marca">
                        <label for="">Familia</label>
                        <input type="text" value="{{$equipos->familia}}" class="form-control"  name="familia">

                        <label for="">Descripción</label>
                        <input type="text" value="{{$equipos->descripcion}}" class="form-control"  name="descripcion">
                        <label for="">Precio</label>
                        <input type="text" value="{{$equipos->precio}}" class="form-control"  name="precio">

                        <label for="">Detalle</label>
                        <input type="text" value="{{$equipos->detalle}}" class="form-control"  name="detalle">
                

                        <label for="">Condición</label>
                        <input type="text" value="{{$equipos->condicion}}" class="form-control"  name="condicion">
                        <label for="">Cantidad Disponible</label>
                        <input type="text" value="{{$equipos->cantidad_disponible}}" class="form-control"  name="cantidad_disponible">

                        <label for="">Número Serie</label>
                        <input type="text" value="{{$equipos->numero_serie}}" class="form-control"  name="numero_serie">
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