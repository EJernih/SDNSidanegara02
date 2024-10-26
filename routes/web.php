<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SambutanController;
use App\Http\Controllers\SarprasController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\TendikController;
use App\Http\Controllers\VisiMisiController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [HomeController::class, 'about']);
Route::get('/galeri', [HomeController::class, 'galeri']);
Route::get('/kontak', [HomeController::class, 'kontak']);
Route::get('/ppdb', [HomeController::class, 'ppdb']);
Route::get('/prestasi', [HomeController::class, 'prestasi']);
Route::get('/tendik', [HomeController::class, 'tendik']);
Route::get('/tentang_sekolah', [HomeController::class, 'tentang_sekolah']);
Route::get('/visi_misi', [HomeController::class, 'visi_misi']);
Route::get('/sarpras', [HomeController::class, 'sarpras']);
Route::get('/berita', [HomeController::class, 'berita']);



//AUTH
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticated']);
Route::get('/logout', [AuthController::class, 'logout']);


//dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');


Route::resource('sliders', SliderController::class)->middleware('auth');

Route::resource('sambutans', SambutanController::class)->middleware('auth');

Route::resource('visimisis', VisiMisiController::class)->middleware('auth');

Route::resource('tendiks', TendikController::class)->middleware('auth');

Route::resource('sarprases', SarprasController::class)->middleware('auth');

