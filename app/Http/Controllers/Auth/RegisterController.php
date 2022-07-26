<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class RegisterController extends Controller
{
  public function show()
  {
    return view("auth.register");
  }
  public function store(Request $request)
  {
    $credentials = $request->validate([
      'username'=> ['required', 'string', 'unique:users', 'alpha_dash'],
      'name'=> ['required', 'string'],
      'email' => ['required', 'email', 'unique:users'],
      'password' => ['required', Password::min(6), 'confirmed'],
      'avatar'=>['required', 'image'],
    ]);
    if($credentials['avatar']){
      $credentials['avatar']=$request->file('avatar')->store('avatars');
    }
    $user = User::create($credentials);
    Auth::login($user);
    return redirect('/')->with(['success'=>'Congrats your account has been creared successfull']);
  }
}
