<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AsistenciaController;
use App\Http\Controllers\Caja_logController;
use App\Http\Controllers\CajaController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\MembresiaController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\PromocionController;
use App\Http\Controllers\VentaController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
Route::get('/mostrar',[UserController::class,'index']);
Route::get('/mostrarAsistencia',[AsistenciaController::class,'index']);
Route::get('/mostrarCaja',[CajaController::class,'index']);
Route::get('/mostrarCaja_log',[Caja_logController::class,'index']);
Route::get('/mostrarCategoria',[CategoriaController::class,'index']);
Route::get('/mostrarItem',[ItemController::class,'index']);
Route::get('/mostrarMembresia',[MembresiaController::class,'index']);
Route::get('/mostrarProducto',[ProductoController::class,'index']);
Route::get('/mostrarPromocion',[PromocionController::class,'index']);
Route::get('/mostrarVenta',[VentaController::class,'index']);

Route::delete('/usuario/eliminar/{id}',[UserController::class,'destroy']);
Route::delete('/categoria/eliminar/{id}',[CategoriaController::class,'destroy']);
Route::delete('/membresia/eliminar/{id}',[¨MembresiaController::class,'destroy']);

Route::post('/usuario/nuevo',[UserController::class,'store']);
Route::post('/categoria/nuevo',[CategoriaController::class,'store']);
Route::post('/membresia/nuevo',[MembresiaController::class,'store']);
//localhost:8000/api/mostrar
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
