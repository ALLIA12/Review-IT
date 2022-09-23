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
    return view('index');
})->name('home');

Route::get('/schedule', function () {
    return view('schedule');
})->name('schedule');

Route::get('/gallery', function () {
    return view('gallery');
})->name('gallery');

Route::get('/video', function () {
    return view('video');
})->name('video');

Route::get('/feedback', function () {
    return view('feedback');
})->name('feedback');

Route::get('/resumes', function () {
    return view('resumes');
})->name('resumes');

Route::get('/contact-us', function () {
    return view('ContactUs');
})->name('ContactUs');

Route::get('/blog', function () {
    return view('blog');
})->name('blog');

Route::get('/reviews', function () {
    return view('reviews');
})->name('reviews');
