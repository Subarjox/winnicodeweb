<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\beritaController;
use App\Http\Controllers\jurnalisControler;

Route::get('/dashboard', 
[beritaController::class, 'beritadashboard']);

Route::get('/post/{id}', 
[beritaController::class, 'beritaperpost']);

// Route::get('jurnalis/write', 
// [jurnalisControler::class, 'writeberita']);

// Route::get('jurnalis/newslist', 
// [jurnalisControler::class, 'listberita']);

// Route::get('jurnalis/edit', 
// [jurnalisControler::class, 'editberita']);

// Route::get('jurnalis/edit', 
// [jurnalisControler::class, 'deleteberita']);


Route::get('/search', 
[beritaController::class, 'beritasearch']);

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/ekslusif', function () {
    return view('ekslusif');
});

Route::get('/subscribe', function () {
    return view('subscribe');
});

Route::get('/search', function () {
    return view('search');
});

Route::get('jurnalis/newslist', function () {
    return view('jurnalis.newslist');
});

Route::get('jurnalis/write', function () {
    return view('jurnalis.write');
});

Route::get('jurnalis/edit', function () {
    return view('jurnalis.edit');
});

