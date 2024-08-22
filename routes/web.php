<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


Route::get('/', function () {
  return view('home');
}) ->name('home');
Route::get('/home', function () {
  return view('home');
});

Route::get('/signup', [UserController::class, 'create'])
  ->name('userSignup')
  ->middleware('guest');

Route::post('/signup', [UserController::class, 'store'])
  ->name('userStore')
  ->middleware('guest');

Route::get('/login', [UserController::class, 'login_view'])
  ->name('userLoginView')
  ->middleware('guest');

Route::post('/login', [UserController::class, 'login'])
  ->name('userLogin')
  ->middleware('guest');
