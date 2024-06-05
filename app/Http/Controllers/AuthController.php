<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function index() {
        return view('auth.login');
    }

    public function login(Request $request) {
        $credentials = Validator::make($request->all(), [
            'email' => 'required|email:dns',
            'password' => 'required|min:8'
        ]);

        if ($credentials->fails()) {
            return back()
            ->withErrors($credentials)
            ->withInput();
        }

        $validated = $credentials->validated();
 
        // Retrieve a portion of the validated input data...
        $validated = $credentials->safe()->only(['email', 'password']);

        if (Auth::attempt($validated)) {
            $request->session()->regenerate();

            return redirect()->route('dashboard');
        } else {
            return back()->with('failed', 'Gagal login! Silahkan cek kembali email dan password anda');
        }
    }

    public function logout(Request $request) {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('home');
    }
}
