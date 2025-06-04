<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\PrestasiController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/prestasi', [PrestasiController::class, 'index'])->name('prestasi');
Route::get('/kompetensi', function () {
return view('kompetensi');
})->name('kompetensi');
