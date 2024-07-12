<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\PagoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::post('cliente/store', [ClienteController::class,'store'])->name('cliente.store');
Route::get('cliente/create',[ClienteController::class,'create']);
Route::get('cliente/listar',[ClienteController::class,'index'])->name('cliente.index');
Route::get('cliente/{cliente}',[ClienteController::class,'show'])->name('cliente.show');
Route::delete('cliente/{cliente}',[ClienteController::class,'destroy'])->name('cliente.destroy');
Route::put('cliente/{cliente}',[ClienteController::class,'update'])->name('cliente.update');
Route::get('cliente/{cliente}/editar',[ClienteController::class,'edit'])->name('cliente.edit');


Route::post('pago/store', [PagoController::class,'store'])->name('pago.store');
Route::get('pago/create',[PagoController::class,'create']);
Route::get('pago/listar',[PagoController::class,'index'])->name('pago.index');
Route::get('pago/{pago}',[PagoController::class,'show'])->name('pago.show');
Route::delete('pago/{pago}',[PagoController::class,'destroy'])->name('pago.destroy');
Route::put('pago/{pago}',[PagoController::class,'update'])->name('pago.update');
Route::get('pago/{pago}/editar',[PagoController::class,'edit'])->name('pago.edit');