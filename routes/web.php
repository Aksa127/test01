<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DokumentasiController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\StudentControllerController;



Route::get('/login', [StudentController::class, 'loginForm'])->name('login');
Route::post('/login', [StudentController::class, 'login']);

Route::get('/register', [StudentController::class, 'registrationForm'])->name('register');
Route::post('/register', [StudentController::class, 'register']);

Route::middleware('auth:student')->group(function() {
    Route::get('/', [DokumentasiController::class, 'index'])->name('dokumentasi.index');
    Route::post('/dokumentasi', [DokumentasiController::class, 'store'])->name('dokumentasi.store');

    Route::get('/dokumentasi/{id}/edit', [DokumentasiController::class, 'edit'])->name('dokumentasi.edit');
    Route::put('dokumentasi/{id}', [DokumentasiController::class, 'update'])->name('dokumentasi.update');
});

// Route::get('/', function () {
//     return view('home');
// });
// Route::get('/lapor', function () {
//     return view('lapor');
// });
