<?php

use Faker\Guesser\Name;
use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EmailController;

Route::middleware(['check.client'])->group(function () {
    Route::get('/', [App\Http\Controllers\IndexController::class, 'index']);
    Route::get('/contact', [App\Http\Controllers\IndexController::class, 'contact']);
    Route::get('/service', [App\Http\Controllers\IndexController::class, 'service']);
});

Route::post('/submit', [App\Http\Controllers\ContactController::class, 'submitForm'])->middleware('sanitize_response');
