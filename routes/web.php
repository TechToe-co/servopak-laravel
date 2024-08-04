<?php

use Faker\Guesser\Name;
use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Mail;


use App\Http\Controllers\ContactController;
use App\Http\Controllers\EmailController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () { // done
    return view('index');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/service', function () {
    return view('service');
});

Route::post('/submit', [App\Http\Controllers\ContactController::class, 'submitForm'])->middleware('sanitize_response');

Route::get('send-mail', [App\Http\Controllers\EmailController::class, 'sendWelcomeEmail']);