<?php

use App\Http\Controllers\CategoriaNegocioController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
/*
 Route::get('/', function () {
     return Inertia::render('Welcome', [
         'canLogin' => Route::has('login'),
         'canRegister' => Route::has('register'),
     ]);
})->name('home');*/


Route::get('/', [App\Http\Controllers\WelcomeController::class,'index'], [
    'canLogin' => Route::has('login'),
    'canRegister' => Route::has('register'),
])->name('home');



Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');


    //Route::get('negocios/{categoria}', [App\Http\Controllers\CategoriaNegocioController::class,'index'])->name('negocio_categoria');

    Route::resource('negocios',App\Http\Controllers\CategoriaNController::class)->names('negociocat');




/*Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
});*/
