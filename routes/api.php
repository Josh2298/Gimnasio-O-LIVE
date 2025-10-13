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
//Route::get('/mostrar',[UserController::class,'index']);
Route::get('/mostrarAsistencia',[AsistenciaController::class,'index']);
Route::get('/mostrarCaja',[CajaController::class,'index']);
Route::get('/mostrarCaja_log',[Caja_logController::class,'index']);
Route::get('/mostrarCategoria',[CategoriaController::class,'index']);
Route::get('/mostrarItem',[ItemController::class,'index']);
Route::get('/mostrarMembresia',[MembresiaController::class,'index']);
Route::get('/mostrarProducto',[ProductoController::class,'index']);
Route::get('/mostrarPromocion',[PromocionController::class,'index']);
Route::get('/mostrarVenta',[VentaController::class,'index']);

Route::delete('/asistencia/eliminar/{id}',[¨AsistenciaController::class,'destroy']);
Route::delete('/categoria/eliminar/{id}',[CategoriaController::class,'destroy']);
Route::delete('/item/eliminar/{id}',[ItemController::class,'destroy']);
Route::delete('/membresia/eliminar/{id}',[¨MembresiaController::class,'destroy']);
Route::delete('/producto/eliminar/{id}',[¨ProductoController::class,'destroy']);
Route::delete('/promocion/eliminar/{id}',[¨PromocionController::class,'destroy']);
//Route::delete('/usuario/eliminar/{id}',[UserController::class,'destroy']);
Route::delete('/membresia/eliminar/{id}',[¨MembresiaController::class,'destroy']);

Route::post('/asistencia/nuevo',[AsistenciaController::class,'store']);
Route::post('/categoria/nuevo',[CategoriaController::class,'store']);
Route::post('/item/nuevo',[ItemController::class,'store']);
Route::post('/membresia/nuevo',[MembresiaController::class,'store']);
Route::post('/producto/nuevo',[ProductoController::class,'store']);
Route::post('/promocion/nuevo',[PromocionController::class,'store']);
//Route::post('/usuario/nuevo',[UserController::class,'store']);
Route::post('/venta/nuevo',[VentaController::class,'store']);

//Route::put('/usuario/actualizar/{id}',[UserController::class,'update']);

Route::resource('/asistencia',AsistenciaController::class);
Route::resource('/categoria',CategoriaController::class);
Route::get('/categoria/productos/{id}',[CategoriaController::class,'productos']);

Route::resource('/item',ItemController::class);
Route::resource('/membresia',MembresiaController::class);
Route::resource('/producto',ProductoController::class);
Route::resource('/promocion',PromocionController::class);
Route::resource('/venta',VentaController::class);

Route::resource('/usuario',UserController::class);
Route::post('/usuario/imagen',[UserController::class,'imageUpload']);
Route::get('/usuario/imagen/{nombre}',[UserController::class,'image']);
//localhost:8000/api/mostrar
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});