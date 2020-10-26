<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function dashboard() {
        if(\Auth::check() === true){
            return view('dashboard');
        }

        return redirect()->route('login.view');
    }

    public function showForm() {
        return view('adm.login');
    }

    public function login(Request $request) {
        $credentials = [
            "email" => $request->email,
            "password" => $request->password,
        ];

        if(\Auth::attempt($credentials)) {
            return redirect()->route('dashboard');
        }

        // return redirect()->route('login.view');
        return redirect()->back()->withInput()->withErrors(['Credenciais inválidas!']);
    }

    public function logout() {
        \Auth::logout();
        return redirect()->route('dashboard');
    }
}
