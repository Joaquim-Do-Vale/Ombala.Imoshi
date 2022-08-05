<?php

use App\Http\Controllers\ContactosController;
use App\Http\Controllers\NoticiasController;
use App\Http\Controllers\NovidadesController;
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

Route::get('/', [NoticiasController::class, 'index'])->name('welcome');
// Route::get('/', function (){
//     return view('welcome');
// })->name('index');

Route::get('/contactos', [ContactosController::class, 'create'])->name('contactos.criar-c');
Route::post('/contactos', [ContactosController::class, 'store'])->name('contactos.store');

Route::get('/noticias', [NoticiasController::class, 'noticias'])->name('descricao');
Route::get('/search', [NoticiasController::class, 'pesquisar'])->name('search');

Route::get('/novidades', [NovidadesController::class, 'index'])->name('novidades.listar-no');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/dashboard/noticias/listar', [NoticiasController::class, 'listar'])->name('noticias.index-n');
Route::get('/dashboard/noticias/criar', [NoticiasController::class, 'create'])->name('noticias.criar-n');
Route::post('/dashboard/noticias', [NoticiasController::class, 'store'])->name('noticias.store');
Route::get('/dashboard/noticias/edit/{id}', [NoticiasController::class, 'edit'])->name('noticias.edit');
Route::get('/dashboard/noticias/delete/{id}', [NoticiasController::class, 'destroy'])->name('noticias.delete');

Route::put('/dashboard/noticias/edit/{id}', [NoticiasController::class, 'update'])->name('noticias.update');

Route::get('/dashboard/novidades', [NovidadesController::class, 'create'])->name('novidades.criar-no');
Route::post('/dashboard/novidades', [NovidadesController::class, 'store'])->name('novidades.store');
Route::get('/dashboard/novidades/edit/{id}', [NovidadesController::class, 'edit'])->name('novidades.edit');
Route::get('/dashboard/novidades/delete/{id}', [NovidadesController::class, 'destroy'])->name('novidades.delete');

Route::put('/dashboard/novidades/edit/{id}', [NovidadesController::class, 'update'])->name('novidades.update');

