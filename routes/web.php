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
Route::get('/entrar', [UsuarioController::class, 'entrar'])->name('entrar');
Route::get('/cadastro', [UsuarioController::class, 'create'])->name('cadastro');
Route::post('/', [UsuarioController::class, 'store'])->name('store');
Route::post('/', [UsuarioController::class, 'testLogin'])->name('testLogin');
Route::view('/sistema', 'sistema');



Route::fallback(function() {
    return "Erro ao localizar a página";
});
