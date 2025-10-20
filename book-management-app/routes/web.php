<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

// Route test đơn giản
Route::get('/test', function () {
    return "TEST ROUTE IS WORKING!";
});

// Route book
Route::get('/book', [BookController::class, 'index']);

// Route mặc định
Route::get('/', function () {
    return redirect('/book');
});