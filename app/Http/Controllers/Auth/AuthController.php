<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login() {
        return view('auth.login', [
            'title' => 'Masuk',
        ]);
    }

    public function registration() {
        return view('auth.register', [
            'title' => 'Registrasi',
        ]);
    }

    public function forgotPassword() {
        return view('auth.forgot-password', [
            'title' => 'Lupa Password',
        ]);
    }
}
