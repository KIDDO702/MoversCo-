<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AuthSessionController extends Controller
{
    public function auth(): View
    {
        return view('auth.login');
    }

    public function authenticate(Request $request)
    {
        dd($request->all());
    }
}
