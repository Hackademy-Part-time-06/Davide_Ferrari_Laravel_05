<?php

use App\Http\Controllers\PageController;
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

Route::get('/', [PageController::class, 'homepage'])->name('homepage');

Route::get('/corsi', [PageController::class, 'corsidisponibili'])->name('corsidisponibili');

Route::get('/contacts', [PageController::class, 'contatti'])->name('contatti');

Route::get('/corsospecifico/{refcorso}', [PageController::class, 'dettagliocorso'])->name('dettagliocorso');
