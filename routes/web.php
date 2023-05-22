<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

Route::get('/corsospecifico/{refcorso}', [PageController::class, 'dettagliocorso'])->name('dettagliocorso');

Route::get('/contacts', [PageController::class, 'contatti'])->name('contatti');

Route::post('/send', [PageController::class, 'send'])->name('send');