<?php

use App\Http\Controllers\HalamanController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\UserController;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Route;



Route::get('/', [HalamanController::class, 'index']);
Route::get('/kontak', [HalamanController::class, 'kontak']);
Route::get('tentang',[HalamanController::class, 'tentang']);

Route::resource('user', UserController::class);

Route::get('/sesi',[SessionController::class, 'index']);
Route::post('/sesi/login', [SessionController::class, 'login']);
Route::get('/sesi/logout',[SessionController::class, 'logout']);
Route::get('/sesi/Register',[SessionController::class, 'register']);
Route::post('/sesi/create', [SessionController::class, 'create']);