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

// portfolio
Route::get('portfolio-1', function () {
    return view('portfolio/portfolio-1');
});
Route::get('portfolio-2', function () {
    return view('portfolio/portfolio-2');
});
Route::get('portfolio-3', function () {
    return view('portfolio/portfolio-3');
});
Route::get('portfolio-4', function () {
    return view('portfolio/portfolio-4');
});
Route::get('portfolio-5', function () {
    return view('portfolio/portfolio-5');
});

// end portfolio

Route::get('titan', function () {
    return view('home');
});

Route::post('/sendmail', [
    'as' => 'sendmail',
    'uses' => 'App\Http\Controllers\MailController@sendEmail'
]);

// Route::get('/contact', 'Kirim_Email@send');
// // Route::post('/contact', 'Kirim_Email@sendMail');
