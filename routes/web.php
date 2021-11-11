<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Views;
use App\Http\Controllers\PrediagnosticoController;
Use App\Http\Controllers\UsuarioController;
Use App\Http\Controllers\VisasController;
Use App\Http\Controllers\LanguageController;

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

//Route::get('prediagnostico/pdf',[PdfController::class,'pdf'])->name('prediagnostico.pdf');
 

Route::view('/welcome','welcome' )->name('welcome');

Route::view('/formulario','formulario' )->name('formulario');

Route::view('/resultado','resultado' )->name('resultado');

Route::view('/requisitosVista','requisitosVista' )->name('requisitosVista');

Route::view('/contacto','contacto' )->name('contacto');

Route::view('/header','header' )->name('header');

Route::view('/tiposVisa','tiposVisa' )->name('tiposVisa');

Route::post('/formulario',[PrediagnosticoController::class,'formu'])->name('formulario');

Route::post('/tiposVisa',[VisasController::class,'visas'])->name('tiposVisa');

Route::get('prediagnostico/pdf',[PrediagnosticoController::class,'pdf'])->name('prediagnostico.pdf');

Route::view('/resultadoVisa','resultadoVisa' )->name('resultadoVisa');

//Route :: get('prediagnostico/resultado',[PrediagnosticoController::class,'contact'])->name('prediagnostico.resultado');

//Route::post('/contact_post', [PrediagnosticoController::class,'contact_post'])->name('prediagnostico.resultado');



//
//Route::view('/prediagnostico/pdf','prediagnostico/pdf' )->name('prediagnostico.pdf');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

/*

Route::get('/prediagnostico/create',[PrediagnosticoController::class,'create']);*/

Route::view('/registroCliente','registroCliente' )->name('registroCliente');

Route::resource('prediagnostico','App\Http\Controllers\PrediagnosticoController'::class);
//->middleware('auth');
//Auth::routes();

Route::resource('usuario', 'App\Http\Controllers\UsuarioController'::class);



Route::get('lang/{lang}',[LanguageController::class,'swap'])->name('lang.swap');