<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;

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

Route::get('dosen', [DosenController::class, 'index']);
Route::get('biodata', [DosenController::class, 'biodata']);

Route::get('linktree', function () {
    return view('linktree');
});

Route::get('home', function () {
    return view('home');
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
