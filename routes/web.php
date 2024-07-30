<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/faqs', function () {
    return view('faqs');
});

Route::get('/index2', function () {
    return view('index2');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/index3', function () {
    return view('index3');
});

Route::get('/news-details', function () {
    return view('news-details');
});

Route::get('/news', function () {
    return view('news');
});

Route::get('/pricing', function () {
    return view('pricing');
});

Route::get('/product', function () {
    return view('product');
});

Route::get('/project-grid', function () {
    return view('project-grid');
});

Route::get('/service-details', function () {
    return view('service-details');
});


Route::get('/service', function () {
    return view('service');
});

Route::get('/team-details', function () {
    return view('team-details');
});

Route::get('/team', function () {
    return view('team');
});

Route::get('/testimonials', function () {
    return view('testimonials');
});
