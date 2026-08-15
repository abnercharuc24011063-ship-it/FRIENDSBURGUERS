
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RestaurantController;

Route::get('/', [RestaurantController::class, 'index'])->name('home');
Route::get('/menu/{id}', [RestaurantController::class, 'show'])->name('menu.show');
Route::get('/pedido', [RestaurantController::class, 'create'])->name('restaurant.pedido');
Route::post('/pedido', [RestaurantController::class, 'store'])->name('restaurant.store');



