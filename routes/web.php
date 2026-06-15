<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PegawaiDBController;
use App\Http\Controllers\SepatuController;
use App\Http\Controllers\BelanjaController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\EASController;




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

//crud keranjang
Route::get('/belanja/', [BelanjaController::class, 'index']);
Route::get('/belanjatambah', [BelanjaController::class, 'tambah']);
Route::post('/belanjastore', [BelanjaController::class, 'store']);
Route::get('/belanjahapus/{id}', [BelanjaController::class, 'hapus']);

//route CRUD siswa
Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa.index');
Route::get('/siswa/create', [SiswaController::class, 'create'])->name('siswa.create');
Route::post('/siswa', [SiswaController::class, 'store'])->name('siswa.store');
Route::get('/siswa/{nrp}/edit', [SiswaController::class, 'edit'])->name('siswa.edit');
Route::put('/siswa/{nrp}', [SiswaController::class, 'update'])->name('siswa.update');
Route::delete('/siswa/{nrp}', [SiswaController::class, 'destroy'])->name('siswa.destroy');

//crud mahasiswa
Route::get('/mahasiswa/', [MahasiswaController::class, 'index']);
Route::get('/mahasiswatambah', [MahasiswaController::class, 'tambah']);
Route::post('/mahasiswastore', [MahasiswaController::class, 'store']);

//crud EAS
Route::get('/eas', [EASController::class, 'index'])->name('eas.index');
Route::get('/eastambah', [EASController::class, 'create'])->name('eas.tambah');
Route::post('/easstore', [EASController::class, 'store'])->name('eas.store');
// Route::get('/siswa/{kodepegawai}/view', [SiswaController::class, 'view'])->name('eas.view');
Route::get('/siswaview/{kodepegawai}', [SiswaController::class, 'view'])->name('eas.view');


