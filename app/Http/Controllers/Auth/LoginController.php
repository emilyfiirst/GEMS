<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        return view('site.login');
    }

    public function autenticar()
    {
        return "Esta aqui";
    }
}
