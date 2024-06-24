<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Carbon\Carbon;

class RegisterController extends Controller
{
    public function create()
    {
        return view('personal.registration');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'sname' => 'required|string',
            'tname' => 'required|string',
            'bdate' => 'required|date|before:' . Carbon::now()->subYears(14)->toDateString(),
            'email' => 'required|string|email|unique:users',
            'password' => 'required|confirmed|min: 8',
        ]);

        $user = User::create([
            'name' => $request->name,
            'second_name' => $request->sname,
            'third_name' => $request->tname,
            'birth-date' => $request->bdate,
            'email' => $request->email,
            'password' => $request->password,
        ]);

        Auth::login($user);

        return redirect('/personal');
    }
}
