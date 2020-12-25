<?php

use App\Http\Controllers\GeralController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;


Route::get("/", [LoginController::class, 'index'])->name('index');
Route::post("/", [LoginController::class, 'store'])->name('login.store');
Route::get("/login", [LoginController::class, 'index'])->name('login.index');
Route::get('/logout', [GeralController::class, 'lagout'])->name('lagout.lagout');

Route::middleware('check.session')->group(function(){

Route::get("/geral", [GeralController::class, 'index'])->name('geral.index');
Route::put("/update/{id}",[GeralController::class,'update'])->name('update.update');
Route::get("/fazer", [GeralController::class,'lista_atribuida'])->name('fazer.lista_atribuida');
Route::get("/feito", [GeralController::class,'lista_concluido'])->name('feito.lista_concluido');

});

