<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReviewsController;
use App\Http\Controllers\FeedbackController;

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

Route::get('/', [Controller::class,'index'])->name('index');
Route::get('/home', [Controller::class, 'index'])->name('home');

Route::get('/schedule', function () {
    return view('schedule');
})->name('schedule');

Route::get('/gallery', function () {
    return view('gallery');
})->name('gallery');

Route::get('/video', function () {
    return view('video');
})->name('video');

Route::get('/resume', function () {
    return view('resumes');
})->name('resume');

Route::get('/contact-us', function () {
    return view('ContactUs');
})->name('ContactUs');

Route::get('/blog', function () {
    return view('blog');
})->name('blog');

Route::get('/reviews',[ReviewsController::class, 'index'])->name('reviews');
Route::get('/reviews/create', [ReviewsController::class, 'create'])->name('reviews.create')->middleware('auth');;
Route::post('/reviews/create', [ReviewsController::class, 'store'])->name('reviews.store')->middleware('auth');;
Route::get('/reviews/{review}/', [ReviewsController::class, 'show'])->name('reviews.show');

Route::get('/feedback', [FeedbackController::class, 'index'])->name('feedback');
Route::get('/feedback/create', [FeedbackController::class, 'create'])->name('feedback.create');
Route::post('/feedback/create', [FeedbackController::class, 'store'])->name('feedback.store');

Auth::routes();