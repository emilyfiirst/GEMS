<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PassivoController extends Controller
{
    public function index() {
        return view('app.passivo');
    }
}
