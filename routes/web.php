<?php

use App\Http\Controllers\ArtikelController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [ArtikelController::class, 'index']);
Route::get('/artikel/{id}', [ArtikelController::class, 'show'])->name('artikel.show');
