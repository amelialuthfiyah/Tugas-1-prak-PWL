<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\AdminController;



Route::get('/', function () {
    return view('welcome');
});


// Route::get('daftar_mahasiswa', [MahasiswaController::class, 'index']);

Route::post('/detail_mahasiswa', [MahasiswaController::class, 'detail_mhs']);
Route::get('/detail_mahasiswa/daftar_kekayaan', [MahasiswaController::class, 'daftar_kekayaan']);

// Route::match(['get', 'post'], '/detail_mahasiswa',[MahasiswaController::class, 'detail_mhs']);

Route::view('/daftar_mahasiswa', 'daftar_mahasiswa');
Route::get('/admin/dashboard', [AdminController::class, 'index']);
Route::get('/admin/quotes', [AdminController::class, 'show_quotes']);
Route::get('/admin/arsip', [AdminController::class, 'show_arsip']);
Route::get('/admin/berita', [AdminController::class, 'show_berita']);
Route::get('/admin/album', [AdminController::class, 'show_album']);
Route::get('/admin/info', [AdminController::class, 'show_info']);
 
 