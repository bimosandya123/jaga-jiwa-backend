<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\cobaAuthController;


Route::get('/', function () {
    return view('Landing_page');
});
Route::post('register', [cobaAuthController::class, 'register']);
Route::post('login', [cobaAuthController::class, 'login']);
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
