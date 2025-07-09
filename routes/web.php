<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\CalendarioController;
use App\Http\Controllers\FAQController;
use App\Http\Controllers\MembrosController;
use App\Http\Controllers\NormativasController;
use App\Http\Controllers\EducaCepsController;
use App\Http\Controllers\ModelosDocumentosController;
use App\Http\Controllers\TutoriaisController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\DocumentosEducaCepsController;

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

Route::get('/', [InicioController::class, 'index'])->name('inicio');
Route::get('/calendario', [CalendarioController::class, 'index'])->name('calendario');
Route::get('/faq', [FAQController::class, 'index'])->name('faq');
Route::get('/membros', [MembrosController::class, 'index'])->name('membros');
Route::get('/normativas', [NormativasController::class, 'index'])->name('normativas');
Route::get('/educa-ceps', [EducaCepsController::class, 'index'])->name('educa-ceps');
Route::get('/modelos-documentos', [ModelosDocumentosController::class, 'index'])->name('modelos-documentos');
Route::get('/tutoriais', [TutoriaisController::class, 'index'])->name('tutoriais');
Route::get('/documentos-educa-ceps', [DocumentosEducaCepsController::class, 'index'])->name('documentos-educa-ceps');

// Rotas para a página de contato
Route::get('/contato', [ContatoController::class, 'index'])->name('contato');
Route::post('/contato/enviar', [ContatoController::class, 'enviar'])->name('contato.enviar');

// Rota para página 404 (fallback)
Route::fallback(function () {
    return view('404');
});
