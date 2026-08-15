@extends('layouts.app')

@section('content')
<h2>Menú del Restaurante</h2>
<ul>
    @foreach($menu as $item)
        <li>
            <a href="{{ route('menu.show', $item['id']) }}">
                {{ $item['nombre'] }} - Q{{ $item['precio'] }}
            </a>
        </li>
    @endforeach
</ul>

<div style="text-align: center; margin-top: 30px;">
    <a href="{{ route('restaurant.pedido') }}" style="background-color: #ffcc00; padding: 12px 25px; text-decoration: none; color: black; font-weight: bold; border-radius: 5px;">
        Hacer pedido a domicilio
    </a>
</div>

@endsection

