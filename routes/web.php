
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RestaurantController;

Route::get('/', [RestaurantController::class, 'index'])->name('home');
Route::get('/menu/{id}', [RestaurantController::class, 'show'])->name('menu.show');

