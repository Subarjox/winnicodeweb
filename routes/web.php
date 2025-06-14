<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\beritaController;
use App\Http\Controllers\JurnalisController;
use App\Http\Controllers\UserController;

Route::get('/dashboard', 
[beritaController::class, 'beritadashboard']);

Route::get('/', 
[beritaController::class, 'beritadashboard']);

Route::get('/ekslusif', 
[JurnalisController::class, 'readberita']);

Route::get('/post/{id}', 
[beritaController::class, 'beritaperpost']);

Route::get('/expost/{id_berita}', [JurnalisController::class, 'beritapage']);
Route::post('/berita/interact', [JurnalisController::class, 'interact']);

Route::get('/search', [JurnalisController::class, 'cari'])->name('berita.cari');

Route::get('/register', [UserController::class, 'RegisterForm']);
Route::post('/register', [UserController::class, 'register']);

Route::get('/login', [UserController::class, 'LoginForm'])->name('login');
Route::post('/login', [UserController::class, 'login']);

Route::middleware(['auth'])->group(function () {
    Route::get('/jurnalis/dashboard',  [JurnalisController::class, 'dashboard']);

    //Buat Berita
    Route::get('/jurnalis/tulis',      [JurnalisController::class, 'WritePage']);
    Route::post('/jurnalis/tulis',     [JurnalisController::class, 'write']);

    //Tampilkan Berita
    Route::get('jurnalis/newslist',    [JurnalisController::class, 'listberita']);

    //Edit & Delete Berita
    Route::get('jurnalis/edit/{id_berita}',    [JurnalisController::class, 'editpage']);
    Route::post('/jurnalis/berita/update/{id_berita}', [JurnalisController::class, 'edit'])->name('berita.update');
    Route::post('/jurnalis/berita/delete/{id_berita}', [JurnalisController::class, 'delete'])->name('berita.delete');
    Route::get('/logout', [JurnalisController::class, 'logout'])->name('logout');
});

Route::get('/subscribe', function () {
    return view('subscribe');
});










