<?php

use App\Http\Controllers\BukuTamuController;
use App\Http\Middleware\Authenticate;
use Illuminate\Support\Facades\Route;

Route::middleware(Authenticate::class)->group(function () {
    Route::get('/buku-tamu', [BukuTamuController::class, 'index'])->name('buku-tamu.index');
    Route::get('/buku-tamu/create', [BukuTamuController::class, 'create'])->name('buku-tamu.create');
    Route::post('/buku-tamu', [BukuTamuController::class, 'store'])->name('buku-tamu.store');
    Route::get('/buku-tamu/{buku_tamu}/edit', [BukuTamuController::class, 'edit'])->name('buku-tamu.edit');
    Route::patch('/buku-tamu/{buku_tamu}', [BukuTamuController::class, 'update'])->name('buku-tamu.update');
    Route::delete('/buku-tamu/{buku_tamu}', [BukuTamuController::class, 'destroy'])->name('buku-tamu.destroy');
});
?>