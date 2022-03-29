<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('maintenance');
});

Route::get('portfolio', function () {
    return view('portfolio');
});

Route::get('titan', function () {
    return view('home');
});

Route::get('/contact', 'Kirim_Email@send');
// Route::post('/contact', 'Kirim_Email@sendMail');
