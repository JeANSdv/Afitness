<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function create()
    {
        return view('personal.auth');
    }

    public function store(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|string|email',
            'password' => 'required',
        ]);

        if (!Auth::attempt($credentials)) {
            return back()->withInput()->withErrors([
                'email' => 'Неверный логин или пароль'
            ]);
        }

        return redirect('/personal');
    }

    public function destroy(Request $request)
    {
        Auth::logout();
        return redirect('/login');
    }
}
