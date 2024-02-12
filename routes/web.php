<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SocialController;
use App\Http\Controllers\authController;
Route::get('/', function () {
    return view('Landing_page');
});
//public routes
Route::get('/auth/redirect', [SocialController::class, 'redirect'])->name('google.redirect');
Route::get('/google/redirect', [SocialController::class, 'googleCallback'])->name('google.callback');

Route::get('/auth/redirect/facebook', [SocialController::class, 'facebookRedirect'])->name('facebook.redirect');
Route::get('/facebook/redirect', [SocialController::class, 'facebookCallback'])->name('facebook.callback');


// protected routes
Route::group(['middleware' => 'guest'], function () {
    Route::get('/register', [authController::class, 'register'])->name('register');
    Route::post('/register', [authController::class, 'registerPost'])->name('register');
    Route::get('/login', [authController::class, 'login'])->name('login');
    Route::post('/login', [authController::class, 'loginPost'])->name('login');
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/google-logged-in', function () {
        return view('google-logged-in');
    });
    Route::get('/facebook-logged-in', function () {
        return view('facebook-logged-in');
    });
    Route::delete('/logout', [authController::class, 'logout'])->name('logout');
});