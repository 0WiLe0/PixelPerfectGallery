<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Providers\RouteServiceProvider;
class LoginController extends Controller
{
    public function create()
    {
        return view('login');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nickname' => 'required|string',
            'password' => 'required|string'
        ]);

        if(Auth::attempt($request->only('nickname','password'))){
            return redirect(RouteServiceProvider::HOME);
        }

    }

    public function destroy(Request $request){
        Auth::logout();

        return redirect()->route('index');
    }
}
