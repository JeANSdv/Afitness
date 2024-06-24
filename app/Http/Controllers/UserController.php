<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        $userId = Auth::id();

        $user = DB::table('users')->where('user_id', '=', $userId)->first();

        // dd($user);

        return view('personal.personal', ['user' => $user]);
    }
}
