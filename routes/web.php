<?php

use App\Http\Controllers\ProductoController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
Route::any('/clima/listar',[\App\Http\Controllers\ClimaController::class,'listar']);

Route::controller(ProductoController::class)->group(function () {
    Route::get('/producto', 'listar');
    Route::get('/producto/insertar', 'insertarGet');
    Route::post('/producto/insertar', 'insertarPost');
    Route::get('/producto/actualizar/{idProducto}', 'actualizar');
    Route::post('/producto/actualizar/{idProducto}', 'actualizar');
    Route::get('/producto/borrar/{idProducto}', 'borrar');
    Route::post('/producto/borrar/{idProducto}', 'borrar');
});
