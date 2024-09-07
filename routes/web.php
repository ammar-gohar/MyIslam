<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\QuestionController;
use Illuminate\Support\Facades\Session;

Route::get('/', function () {
  return view('home', [
    'articles' => \App\Models\Article::latest()
                          ->with(['author', 'categories']),
    'questions' => \App\Models\Question::latest()
                          ->with('answered_by'),
    'test' => request('test') ?? 'NoRequest',
  ]);
}) ->name('home');

Route::get('/test', function() {
  return response()->json(['test' => request('test') ?? 'NoRequest']);
});

Route::get('/lang/{locale}', function(string $locale) {

  if(!in_array($locale, ['ar', 'en'])){
    abort(400);
  }

  Session::put('locale', $locale);
  // echo '<pre>';
  // print_r(Session::all());
  // echo '</pre>';
  // die();
  App::setLocale($locale);

  return redirect()->back();
});

Route::get('/home', function () {
  return redirect('home');
});

Route::controller(UserController::class)->group(function () {
  Route::get('/signup', 'create')
  ->name('userSignup')
  ->middleware('guest');

  Route::post('/signup', 'store')
    ->name('userStore')
    ->middleware('guest');

  Route::get('/login', 'login_view')
    ->name('userLoginView')
    ->middleware('guest');

  Route::post('/login', 'login')
    ->name('userLogin')
    ->middleware('guest');
});

Route::get('/fatawa', [QuestionController::class, 'index'])
  ->name('fatawa');
