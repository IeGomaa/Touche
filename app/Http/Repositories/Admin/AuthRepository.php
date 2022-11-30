<?php

namespace App\Http\Repositories\Admin;

use App\Http\Interfaces\Admin\AuthInterface;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthRepository implements AuthInterface
{

    public function index()
    {
        return view('Auth.login');
    }

    public function login($request)
    {
        $credentials = $request->only(['email','password']);
        if (Auth::attempt($credentials)) {
            return redirect(route('admin.index'));
        }
        return redirect(route('auth.index'));
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect(route('auth.index'));
    }
}
