<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CrutController;
use App\Http\Controllers\PublisherController;
use Illuminate\Support\Facades\Route;

Route::get('/', [CategoryController::class, 'index']);

Route::resource('category', CategoryController::class);

Route::resource('publisher', PublisherController::class);
Route::resource('book', BookController::class);