<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
  public function show()
  {
    return view('auth.login');
  }
  public function store(Request $request)
  {
    $credentials = $request->validate([
      'email' => ['required', 'email'],
      'password' => ['required'],
    ]);
    if (Auth::attempt($credentials)) {
      $request->session()->regenerate();
      return redirect('/')->with(['success'=>'Welcome back!']);
    }
    return back()->withErrors([
      'fails' => 'The provided credentials do not match our records.',
    ])->onlyInput('email');
  }
}
