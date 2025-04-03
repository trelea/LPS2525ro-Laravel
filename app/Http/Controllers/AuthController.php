<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;

class AuthController extends Controller
{
    public function login_view(): View
    {
        return view('auth.login');
    }

    public function login_action(Request $req)
    {
        // validation
        $validated = $req->validate([
            'email' => 'required|email',
            'password' => 'required|string|min:8|max:25',
        ]);

        if (Auth::attempt($validated)) {
            $req->session()->regenerate();
            return redirect()->route('products.index.view');
        }

        throw ValidationException::withMessages(['message' => 'Wrong Credentials!']);
    }

    public function signup_view(): View
    {
        return view('auth.signup');
    }

    public function signup_action(Request $req)
    {
        // validation
        $validated = $req->validate([
            'name' => 'required|string|min:3|max:25',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:8|max:25|confirmed',
            'password_confirmation' => 'required|string|min:8|max:25'
        ]);

        User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password'])
        ]);

        return redirect()->route('login.view');
    }

    public function logout_action(Request $req)
    {
        Auth::logout();
        $req->session()->invalidate();
        $req->session()->regenerateToken();
        return redirect()->route('login.view');
    }
}
