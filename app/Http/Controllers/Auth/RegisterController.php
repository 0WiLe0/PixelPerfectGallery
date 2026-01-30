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
        return view('register');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nickname' => 'required|string|unique:users',
            'fio' => 'required|string',
            'email' => 'required|string|email|unique:users',
            'password' => 'required|confirmed|min:8'
        ]);

        $user = User::create([
            'nickname' => $request->nickname,
            'fio' => $request->fio,
            'email' => $request->email,
            'password' => $request->password
        ]);

        Auth::login($user);

        return redirect('/main');

    }

}
