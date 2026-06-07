<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PegawaiDBController;
use App\Http\Controllers\SepatuController;




Route::get('/', function () {
    return view('welcome');
});

Route::get('halo', function () {
	return "<h1>Halo, Selamat datang</h1> di tutorial laravel pi>www.malasngoding.com</i>";
});

Route::get('blog', function () {
    return view('blog');
});

Route::get('pertemuan5', function () {
    return view('pertemuan5');
});

Route::get('linktree', function () {
    return view('linktree');
});

Route::get('homefr', function () {
    return view('homefrontend');
});

Route::get('unilever', function () {
    return view('unilever');
});

Route::get('samsung', function () {
    return view('samsung');
});

Route::get('intro', function () {
    return view('intro');
});

Route::get('news', function () {
    return view('news');
});

Route::get('news1', function () {
    return view('news1');
});

Route::get('responsive', function () {
    return view('responsive');
});

Route::get('dosen', [DosenController::class, 'index']);
Route::get('biodata', [DosenController::class, 'biodata']);

Route::get('/pegawainama/{nama}', [PegawaiController::class, 'index']);
Route::get('/formulir', [PegawaiController::class, 'formulir']);
Route::post('/formulir/proses', [PegawaiController::class, 'proses']);
//blog
Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);

//crud
Route::get('/pegawai/', [PegawaiDBController::class, 'index']);
Route::get('/pegawaitambah', [PegawaiDBController::class, 'tambah']);
Route::post('/pegawaistore', [PegawaiDBController::class, 'store']);
Route::get('/pegawaiedit/{id}', [PegawaiDBController::class, 'edit']);
Route::post('/pegawaiupdate', [PegawaiDBController::class, 'update']);
Route::get('/pegawaihapus/{id}', [PegawaiDBController::class, 'hapus']);
Route::get('/pegawaicari', [PegawaiDBController::class, 'cari']);

//crud sepatu
Route::get('/sepatu/', [SepatuController::class, 'index']);
Route::get('/sepatutambah', [SepatuController::class, 'tambah']);
Route::post('/sepatustore', [SepatuController::class, 'store']);
Route::get('/sepatuedit/{id}', [SepatuController::class, 'edit']);
Route::post('/sepatuupdate', [SepatuController::class, 'update']);
Route::get('/sepatuhapus/{id}', [SepatuController::class, 'hapus']);
Route::get('/sepatucari', [SepatuController::class, 'cari']);
