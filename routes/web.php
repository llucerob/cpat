<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UtilsController;
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

Route::get('/dashboard', [UtilsController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::middleware('auth')->group(function () {
    Route::get('form/{sec}/{id?}', [UtilsController::class, 'secciones'])->name('ir.seccion');
    Route::post('forms/paso1/enviar', [UtilsController::class, 'paso1'])->name('paso1.store');
    Route::post('forms/paso2/enviar/{id}', [UtilsController::class, 'paso2'])->name('paso2.store');
    Route::get('eliminarproceso/{id}', [UtilsController::class, 'eliminarproceso'])->name('eliminar.proceso');

    Route::get('continuarproceso/{id}', [UtilsController::class, 'continuarproceso'])->name('continuar.proceso');
    
    
});
