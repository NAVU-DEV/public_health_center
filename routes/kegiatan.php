<?php

use App\Http\Controllers\KegiatanController;
use App\Http\Middleware\Authenticate;
use Illuminate\Support\Facades\Route;

Route::middleware(Authenticate::class)->group(function () {
    Route::get('/kegiatan', [KegiatanController::class, 'index'])->name('kegiatan.index');
    Route::get('/kegiatan/create', [KegiatanController::class, 'create'])->name('kegiatan.create');
    Route::post('/kegiatan', [KegiatanController::class, 'store'])->name('kegiatan.store');
    Route::get('/kegiatan/{kegiatan}/edit', [KegiatanController::class, 'edit'])->name('kegiatan.edit');
    Route::patch('/kegiatan/{kegiatan}', [KegiatanController::class, 'update'])->name('kegiatan.update');
    Route::delete('/kegiatan/{kegiatan}', [KegiatanController::class, 'destroy'])->name('kegiatan.destroy');
});
?>