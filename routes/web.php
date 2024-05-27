<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'index');

Route::get('/books', [BookController::class, 'index'])->name('books.index');
