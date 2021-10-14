<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Views;
use App\Http\Controllers\PrediagnosticoController;

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

Route::view('/formulario','formulario' )->name('formulario');
Route::post('/formulario',[PrediagnosticoController::class,'formu'])->name('formulario');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

/*

Route::get('/prediagnostico/create',[PrediagnosticoController::class,'create']);*/

Route::view('/registroCliente','registroCliente' )->name('registroCliente');

Route::resource('prediagnostico',PrediagnosticoController::class);
//->middleware('auth');
//Auth::routes();