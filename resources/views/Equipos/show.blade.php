@extends('layouts.app')

@section('company', 'BF Global')
@section('title', 'Gestión de Activos')

@section('content')

<h3 class="title-5 m-b-35"><b>Equipo</b> Detalle</h3>
<div class="col-md-4 ml-auto">
	<a href="{{action('EquipoController@edit', $equipos->id)}}" id="create-trigger" class="au-btn au-btn-icon au-btn--green au-btn--small">
		<i class="zmdi zmdi-edit"></i>Editar
	</a >

</div>
<div class="col-lg-12 col-md-12">
	<div class="card">
		<div class="card-header">
			<h4>{{$equipos->descripcion}}</h4>
		</div>
		<div class="card-body">

			

			{{-- CONTENIDO DE LAS TABS--}}
			<div class="tab-content pl-3 p-1" >
				
					<h3>Datos</h3>
					<p>
						<label for="">ID</label>
						<input type="text" value="{{$equipos->id}}" class="form-control" readonly="readonly">

				

						<label for="">Marca</label>
						<input type="text" value="{{$equipos->marca}}" class="form-control" readonly="readonly">
						<label for="">Familia</label>
						<input type="text" value="{{$equipos->familia}}" class="form-control" readonly="readonly">

						<label for="">Descripción</label>
						<input type="text" value="{{$equipos->descripcion}}" class="form-control" readonly="readonly">
						<label for="">Precio</label>
						<input type="text" value="{{$equipos->precio}}" class="form-control" readonly="readonly">

						<label for="">Detalle</label>
						<input type="text" value="{{$equipos->detalle}}" class="form-control" readonly="readonly">
				

						<label for="">Condición</label>
						<input type="text" value="{{$equipos->condicion}}" class="form-control" readonly="readonly">
						<label for="">Cantidad Disponible</label>
						<input type="text" value="{{$equipos->cantidad_disponible}}" class="form-control" readonly="readonly">

						<label for="">Número Serie</label>
						<input type="text" value="{{$equipos->numero_serie}}" class="form-control" readonly="readonly">
						
					</p>
				
		</div>
	</div>
</div>




@endsection