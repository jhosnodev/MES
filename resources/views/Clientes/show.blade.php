@extends('layouts.app')

@section('company', 'BF Global')
@section('title', 'Cliente')

@section('content')

<h3 class="title-5 m-b-35"><b>Cliente</b> Detalle</h3>
<div class="col-md-4 ml-auto">
	<a href="{{action('ClienteController@edit', $cliente->id)}}" id="create-trigger" class="au-btn au-btn-icon au-btn--green au-btn--small">
		<i class="zmdi zmdi-edit"></i>Editar
	</a >

</div>
<div class="col-lg-12 col-md-12">
	<div class="card">
		<div class="card-header">
			<h4>{{$cliente->razon_social}}</h4>
		</div>
		<div class="card-body">
{{--
			<ul class="nav nav-tabs" id="myTab" role="tablist">
				<li class="nav-item">
					<a class="nav-link active" id="datos-tab" data-toggle="tab" href="#datos" role="tab" aria-controls="datos" aria-selected="true">Datos</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="contactos-tab" data-toggle="tab" href="#contactos" role="tab" aria-controls="contactos" aria-selected="false">Contactos</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="sucursales-tab" data-toggle="tab" href="#sucursales" role="tab" aria-controls="sucursales" aria-selected="false">Sucursales</a>
				</li>
			</ul>
--}}
			{{-- CONTENIDO DE LAS TABS
			<div class="tab-content pl-3 p-1" id="myTabContent">--}}
				<div class="tab-pane fade show active" id="datos" role="tabpanel" aria-labelledby="datos-tab">
					<h3>Datos</h3>
					<p>
						<label for="">ID</label>
						<input type="text" value="{{$cliente->id}}" class="form-control" readonly="readonly">

						<label for="">RUC/NIC</label>
						<input type="text" value="{{$cliente->identificacion}}" class="form-control" readonly="readonly">
						<label for="">Razón Social</label>
						<input type="text" value="{{$cliente->razon_social}}" class="form-control" readonly="readonly">

				

						<label for="">Estado</label>
						<input type="text" value="{{$cliente->estado}}" class="form-control" readonly="readonly">

					</p>
				</div>
				{{--
				<div class="tab-pane fade" id="contactos" role="tabpanel" aria-labelledby="contactos-tab">
					<h3>Contactos</h3>
					<div class="col-md-4 ml-auto">
	<a href="{{ action('ContactoController@create', array($cliente->id, $tipo="PROVEEDOR")) }}" id="create-trigger" class="au-btn au-btn-icon au-btn--green au-btn--small">
		<i class="zmdi zmdi-plus"></i>Agregar Contacto
	</a >

</div>
				<p>
						

					</p>
				</div>
				<div class="tab-pane fade" id="sucursales" role="tabpanel" aria-labelledby="sucursales-tab">
					<h3>Sucursales</h3>
						<div class="col-md-4 ml-auto">
	<a href="{{action('SucursalController@create', $cliente->id)}}" id="create-trigger" class="au-btn au-btn-icon au-btn--green au-btn--small">
		<i class="zmdi zmdi-plus"></i>Agregar Sucursales
	</a >

</div>
					<p>Some content here.</p>
				</div>

			</div>

--}}
		</div>
	</div>
</div>




@endsection