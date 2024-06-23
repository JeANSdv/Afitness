<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class RegisterController extends Controller
{
    public function create()
    {
        return view('personal.registration');
    }

    public function store(Request $request)
    {
        $user = User::create([
            'name' => $request->name,
            'second_name' => $request->sname,
            'third_name' => $request->tname,
            'birth-date' => $request->bdate,
            'email' => $request->email,
            'password' => $request->password,
            'role_id' => 1
        ]);

        Auth::login($user);

        return redirect('/personal');
    }
}
