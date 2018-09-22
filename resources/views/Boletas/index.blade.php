@extends('layouts.app')

@section('company', 'BF Global')
@section('title', 'Presupuesto')

@section('content')


<h3 class="title-5 m-b-35">Presupuesto</h3>
<div class="table-data__tool-right col-md-4 ml-auto">

        <a href="{{ route('presupuesto.create') }}" id="create-trigger" class="au-btn au-btn-icon au-btn--green au-btn--small text-right add-modal">
            <i class="zmdi zmdi-plus"></i>Crear
        </a >

</div>

{{ csrf_field() }}




@endsection

@section('js')
@endsection