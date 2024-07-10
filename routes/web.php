<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisterUserController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SearchTagController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

Route::get('/', [JobController::class,"index"]);
Route::get('/tag/{tag:name}',SearchTagController::class);
Route::get('/search',SearchController::class);

Route::get('/register', [RegisterUserController::class,"create"])->middleware("guest");
Route::post('/register',[RegisterUserController::class,"store"])->middleware("guest");


Route::get('/login',[SessionController::class,"create"])->middleware('guest')->name('login');
Route::post('/login',[SessionController::class,"store"])->middleware('guest');

Route::delete("/logout",[SessionController::class,"destroy"])->middleware('auth');

Route::get('/jobs/create',[JobController::class,"create"])->middleware('auth');
Route::post('/jobs',[JobController::class,"store"])->middleware('auth');

