<?php

use App\Http\Controllers\ProyectoController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('proyectos', ProyectoController::class);
Auth::routes();
Route::get('/pdf', [App\Http\Controllers\ProyectoController::class, 'getPDF'])->name('proyecto.pdf');
// Route::get('/reporte', [ProyectoController::class, 'reporte'])->name('reporte');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


