<?php

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
    return view('inicio');
});

//Vistas Básicas
Route::view("personal","quiensoy");
Route::view("inicio","inicio");
Route::view("contacta","general.contacta");

//Resources:
Route::resource("facturas",FacturasController::class);
Route::resource("clientes",ClientesController::class);
Route::resource("empleados",EmpleadoController::class);
Route::resource("idiomas",IdiomasController::class);


//Para rutas que no existen
Route::fallback(function(){
    return view('errors.404');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
