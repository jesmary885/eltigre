<?php

use App\Http\Controllers\CategoriaNegocioController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;



Route::get('/', [App\Http\Controllers\WelcomeController::class,'index'], [
    'canLogin' => Route::has('login'),
    'canRegister' => Route::has('register'),
])->name('home');



Route::get('negocio/{negocio}', [App\Http\Controllers\Negocios\NegocioController::class,'index'])->name('negocio');
Route::get('negocioLoc/{negocio}', [App\Http\Controllers\Negocios\NegocioController::class,'localization'])->name('negocioLoc');
Route::get('negocioProd/{negocio}', [App\Http\Controllers\Negocios\NegocioController::class,'products'])->name('negocioProd');


