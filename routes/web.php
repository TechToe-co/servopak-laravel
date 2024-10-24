<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;


Route::middleware(['check.client'])->group(function () {
    Route::get('/', [IndexController::class, 'index']);
    Route::get('/contact', [IndexController::class, 'contact']);
    Route::get('/service', [IndexController::class, 'service']);
    Route::get('/privacy', [IndexController::class, 'privacy']);
});

Route::post('/submit', [ContactController::class, 'submitForm'])->middleware('sanitize_response');
