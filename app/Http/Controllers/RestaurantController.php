<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    public function index()
    {
        $menu = [
            ['id' => 1, 'nombre' => 'Pizza Clasica', 'precio' => 40],
            ['id' => 2, 'nombre' => 'Hamburguesa de queso y tocino', 'precio' => 55],
            ['id' => 3, 'nombre' => 'Hamburguesa vegetariana', 'precio' => 50],
        ];
        return view('restaurant.index', compact('menu'));
    }

    public function show($id)
    {
        $menu = [
            1 => ['nombre' => 'Hamburguesa Clásica', 'descripcion' => 'Hamburguesa tradicional con carne 100% res.'],
            2 => ['nombre' => 'Hamburguesa de queso y tocino', 'descripcion' => 'Con queso cheddar y tocino crujiente.'],
            3 => ['nombre' => 'Hamburguesa vegetariana', 'descripcion' => 'Opción vegetariana con garbanzos y verduras frescas.'],
        ];
        $item = $menu[$id] ?? null;
        return view('restaurant.show', compact('item'));
    }
}
