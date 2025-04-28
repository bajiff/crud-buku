<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CrutController;
use App\Http\Controllers\PublisherController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return "Kirrim";
});

Route::resource('crut', CrutController::class);

Route::resource('category', CategoryController::class);
Route::resource('publisher', PublisherController::class);