<?php

use App\Http\Controllers\contactoController;
use App\Http\Controllers\cookiesController;
use App\Http\Controllers\privacidadController;
use App\Http\Controllers\terminosController;
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
Route::post('contacto', [contactoController::class, 'store'])->name('contacto.index');
Route::get('privacy', privacidadController::class, 'index')->name('privacy.index');
Route::get('cookies', cookiesController::class, 'index')->name('cookies.index');
Route::get('terms', terminosController::class, 'index')->name('terms.index');
Route::post('contacto', [contactoController::class, 'store'])->name('contacto.index');