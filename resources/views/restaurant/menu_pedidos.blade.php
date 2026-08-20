@extends('layouts.app')

@section('content')
    <div style="text-align: center; margin-top: 30px;">
        <h1 style="color: #d32f2f;">Menú de Pedidos</h1>

        <form action="{{ route('restaurant.store') }}" method="POST" style="display: inline-block; text-align: left; margin-top: 20px;">
            @csrf
            <div style="margin-bottom: 15px;">
                <label>Selecciona tu platillo:</label>
                <table style="width: 320px; border-collapse: collapse; margin-top: 8px;">
                    <thead>
                        <tr>
                            <th style="border: 1px solid #ccc; padding: 8px; text-align: left; background-color: #f2f2f2;"></th>
                            <th style="border: 1px solid #ccc; padding: 8px; text-align: left; background-color: #f2f2f2;">Platillo</th>
                            <th style="border: 1px solid #ccc; padding: 8px; text-align: right; background-color: #f2f2f2;">Precio</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($menu as $item)
                            <tr>
                                <td style="border: 1px solid #ccc; padding: 8px; text-align: center;">
                                    <input type="radio" name="platillo" value="{{ $item['nombre'] }}" required>
                                </td>
                                <td style="border: 1px solid #ccc; padding: 8px;">{{ $item['nombre'] }}</td>
                                <td style="border: 1px solid #ccc; padding: 8px; text-align: right;">Q{{ $item['precio'] }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <button type="submit" style="background-color: #cc3636; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer; width: 100%;">
                Confirmar Pedido
            </button>
        </form>
    </div>
@endsection