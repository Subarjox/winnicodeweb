<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\beritaController;

Route::get('/dashboard', [beritaController::class, 'beritadashboard']);
Route::get('/post/{id}', [beritaController::class, 'beritaperpost']);



Route::get('/blog', function () {
    return view('blog');
});

Route::get('/ekslusif', function () {
    return view('ekslusif');
});

Route::get('/subscibe', function () {
    return view('subscibe');
});

Route::get('/search', function () {
    return view('search');
});
