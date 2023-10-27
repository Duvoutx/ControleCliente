<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
{
    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        // Autenticação bem-sucedida
        return redirect()->intended('/carrinho'); // Redirecionar para a página após o login
    } else {
        // Autenticação falhou
        return redirect()->route('login')->with('error', 'Credenciais inválidas');
    }
}
}
