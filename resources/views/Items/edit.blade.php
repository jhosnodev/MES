@extends('layouts.app')

@section('company', 'BF Global')
@section('title', 'Gestión de Materiales')

@section('content')

<h3 class="title-5 m-b-35"><b>Artículo</b> Editar</h3>
<div class="card col-md-12">
    <div class="card-header">
        <strong>Artículo</strong> {{$item->descripcion}}
    </div>
    <form method="POST" action="{{ route('item.update',$item->id) }}"  role="form" class="form-horizontal">

        {{ csrf_field() }}
        <input name="_method" type="hidden" value="PATCH">
        <div class="card-body">
            
          

                        <label for="">Tipo de artículo</label>
                        <input type="text" value="{{$item->tipo}}" class="form-control"  name="tipo">

                        <label for="">Código</label>
                        <input type="text" value="{{$item->codigo}}" class="form-control"  readonly="readonly">

                
                        <label for="">Marca</label>
                        <input type="text" value="{{$item->marca}}" class="form-control"  name="marca">
                        <label for="">Familia</label>
                        <input type="text" value="{{$item->familia}}" class="form-control"  name="familia">

                        <label for="">Descripción</label>
                        <input type="text" value="{{$item->descripcion}}" class="form-control"  name="descripcion">
                        <label for="">Peso</label>
                        <input type="text" value="{{$item->peso}}" class="form-control"  name="peso">
                        <label for="">Precio</label>
                        <input type="text" value="{{$item->precio}}" class="form-control"  name="precio">

                        <label for="">Detalle</label>
                        <input type="text" value="{{$item->detalle}}" class="form-control"  name="detalle">
                

                        <label for="">Condición</label>
                        <input type="text" value="{{$item->condicion}}" class="form-control"  name="condicion">
                        <label for="">Cantidad Disponible</label>
                        <input type="text" value="{{$item->cantidad_disponible}}" class="form-control"  name="cantidad_disponible">
                        <label for="">Stock Mínimo</label>
                        <input type="text" value="{{$item->stock_min}}" class="form-control"  name="stock_min">
                        <label for="">Stock Máximo</label>
                        <input type="text" value="{{$item->stock_max}}" class="form-control"  name="stock_max">

                        <label for="">Número Serie</label>
                        <input type="text" value="{{$item->numero_serie}}" class="form-control"  name="numero_serie">
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