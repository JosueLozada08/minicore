<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GastoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Ruta principal para verificar que la aplicación funciona
Route::get('/', function () {
    return view('welcome');
});

// Ruta para la funcionalidad principal (filtrado de gastos)
Route::get('/gastos', [GastoController::class, 'index'])->name('gastos.index');
