@extends('layouts.app')
@include('auth.login')

@section('company', 'BF Global')
@section('title', 'Bienvenido')

@guest
	 @section('login')
	 	
	 @endsection
@else
@section('content')
	 	@parent
	 @endsection
@endguest



