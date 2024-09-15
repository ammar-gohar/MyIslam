<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\QuestionController;
use Illuminate\Support\Facades\Session;

Route::get('/', function () {
  return view('home', [
    'articles' => \App\Models\Article::latest()
                          ->with(['author', 'categories'])
                          ->limit(10)
                          ->get(),
    'questions' => \App\Models\Question::latest()
                          ->with('answered_by')
                          ->limit(10),
  ]);
})->name('home');

Route::get('/test', function() {
  return response()->json(['test' => request('test') ?? 'NoRequest']);
});

Route::get('/lang/{locale}', function(string $locale) {

  if(!in_array($locale, ['ar', 'en'])){
    abort(400);
  }

  Session::put('locale', $locale);
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

  Route::post('/logout', 'logout')
    ->name('logout')
    ->middleware('auth');
});

Route::controller(BookController::class)->group(function () {
  Route::get('/books', 'index')
  ->name('books');

  Route::get('/books/{book}', 'show')
  ->name('bookShow');

});

Route::get('/fatawa', [QuestionController::class, 'index'])
  ->name('fatawa');
