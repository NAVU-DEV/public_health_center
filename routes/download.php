<?php

use App\Http\Controllers\DownloadController;
use App\Http\Middleware\Authenticate;
use Illuminate\Support\Facades\Route;

Route::get('/download/{download}/download', [DownloadController::class, 'downloadFile'])->name('download.download-file');
Route::middleware(Authenticate::class)->group(function () {
    Route::get('/download', [DownloadController::class, 'index'])->name('download.index');
    Route::post('/download', [DownloadController::class, 'store'])->name('download.store');
    Route::patch('/download/{download}', [DownloadController::class, 'update'])->name('download.update');
    Route::delete('/download/{download}', [DownloadController::class, 'destroy'])->name('download.destroy');
})
?>