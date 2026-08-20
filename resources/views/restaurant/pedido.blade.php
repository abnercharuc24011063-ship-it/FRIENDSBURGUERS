@extends('layouts.app')

@section('content')
    <div style="text-align: center; margin-top: 30px;">
        <h1 style="color: #d32f2f;">Hacer Pedido a Domicilio</h1>

        <form action="{{ route('restaurant.store') }}" method="POST" style="display: inline-block; text-align: left; margin-top: 20px;">
            @csrf
            <div style="margin-bottom: 15px;">
                <label>Nombre Completo:</label><br>
                <input type="text" name="nombre" style="width: 300px; padding: 8px;" required>
            </div>

            <div style="margin-bottom: 15px;">
                <label>Dirección de Entrega:</label><br>
                <input type="text" name="direccion" style="width: 300px; padding: 8px;" required>
            </div>

            <div style="margin-bottom: 15px;">
                <label>Teléfono:</label><br>
                <input type="text" name="telefono" style="width: 300px; padding: 8px;" required>
            </div>

            <button type="submit" style="background-color: #cc3636; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer; width: 100%;">
                Confirmar Pedido
            </button>
        </form>
    </div>
@endsection