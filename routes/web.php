
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RestaurantController;

Route::get('/', [RestaurantController::class, 'index'])->name('home');
Route::get('/menu/{id}', [RestaurantController::class, 'show'])->name('menu.show');
Route::get('/pedido', [RestaurantController::class, 'create'])->name('restaurant.pedido');
Route::get('/menu-pedidos', [RestaurantController::class, 'menuPedido'])->name('restaurant.menu');
Route::post('/pedido', [RestaurantController::class, 'store'])->name('restaurant.store');



