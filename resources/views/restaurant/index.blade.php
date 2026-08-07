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
@endsection

