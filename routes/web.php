<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SiteController;

Auth::routes();

Route::get('/', [SiteController::class, 'index'])->name('site.index');
Route::get('/berita/selalu-sehat/{berita}', [SiteController::class, 'bacaBerita'])->name('site.baca-berita');

Route::get('/home', [DashboardController::class, 'index'])->name('home');

require __DIR__ . '/berita.php';
require __DIR__ . '/kegiatan.php';
require __DIR__ . '/bukutamu.php';