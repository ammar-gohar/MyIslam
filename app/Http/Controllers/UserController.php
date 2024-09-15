<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Illuminate\Validation\ValidationException;

class UserController extends Controller
{

  public function login_view()
  {
    return view('user.login');
  }

  public function login(Request $request)
  {

    $params = $request->validate([
      'email' => ['bail', 'required', 'email', 'max:255'],
      'password' => ['bail', 'required', 'string', 'max:255', 'min:8']
    ]);

    if(!Auth::attempt($params, $request->remember_me)){
        throw ValidationException::withMessages([
            'email' => 'The provided credentials do not match our records.'
        ]);
    };

    session()->regenerate();

    return redirect()->back();

  }

  public function create()
  {
    return view('user.signup');
  }

  public function store(Request $request)
  {

    $minDate = date('Y-m-d', time() - 60*60*24*365.25*150);
    $maxDate = date('Y-m-d', time() - 60*60*24*365.25*6);

    $params = $request->validate([
      'first_name' => ['bail', 'required', 'regex:/[a-zA-Z]/i', 'max:20'],
      'last_name' => ['bail', 'required', 'regex:/[a-zA-Z]/i', 'max:20'],
      'email' => ['bail', 'required', 'email', 'max:255', 'unique:users,email'],
      'country' => ['bail', 'required'],
      'birth_date' => ['bail', 'required', 'date', "after:$minDate", "before:$maxDate"],
      'gender' => ['bail', 'required', Rule::in(['m', 'f'])],
      'password' => ['bail', 'required', 'max:255', 'min:8', 'confirmed'],
    ]);

    $user = User::create($params);

    Auth::login($user, true);

    return redirect()->back();

  }

  public function logout(Request $request)
  {
    Auth::logout();

    $request->session()->invalidate();

    $request->session()->regenerateToken();

    return redirect()->back();
  }

}
