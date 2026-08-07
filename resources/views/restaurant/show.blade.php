@extends('layouts.app')

@section('content')
@if($item)
    <h2>{{ $item['nombre'] }}</h2>
    <p>{{ $item['descripcion'] }}</p>
    <a href="{{ route('home') }}">← Volver al menú</a>
@else
    <p>Platillo no encontrado.</p>
@endif
@endsection

