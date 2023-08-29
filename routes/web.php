<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [UsuarioController::class, 'index'])->name('index');
Route::get('/create', [UsuarioController::class, 'create'])->name('create');
Route::post('/', [UsuarioController::class, 'store'])->name('store');

Route::fallback(function() {
    return "Erro ao localizar a página";
});
