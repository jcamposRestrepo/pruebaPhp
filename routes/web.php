<?php

use App\Http\Controllers\ProductosController;
use App\Http\Controllers\VentaProductoController;
use Illuminate\Support\Facades\Route;

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


Route::get('/', [ProductosController::class, 'index'])->name('productos.index');
Route::get('/vender', [VentaProductoController::class, 'index'])->name('vender.index');
Route::get('/create',[ProductosController::class,'create'])->name('productos.create');
Route::post('/store',[ProductosController::class,'store'])->name('productos.store');
Route::get('/edit/{id}',[ProductosController::class,'edit'])->name('productos.edit');
Route::put('/update/{id}',[ProductosController::class,'update'])->name('productos.update');
Route::put('/ventaUpdate/{id}',[VentaProductoController::class,'update'])->name('vender.update');
Route::get('/show/{id}',[ProductosController::class,'show'])->name('productos.show');
Route::delete('/destroy/{id}',[ProductosController::class,'destroy'])->name('productos.destroy');
