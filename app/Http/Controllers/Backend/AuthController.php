<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\backend\RegisterRequest;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
    function  showLogin()
    {
    return view('backend.user.login');
    }
    public function showRegister()
    {
        return view('backend.user.register');
    }
    public function register(RegisterRequest $request){
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ]);

        if($user){
            return redirect()->route('backend.showlogin')->with('success','User registered succssfully');
        } else {
            return redirect()->back()->with('error','User registration failed');
        }
    }
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('dashboard'); // or any intended route
        }

        return redirect()->back()->with('error', 'Invalid credentials. Login failed.');
    }


}
