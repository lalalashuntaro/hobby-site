<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HobbyController extends Controller
{
    public function login()
    {
        return view('hobby.login');
    }

    public function new()
    {
        return view('hobby.new');
    }

    public function mail()
    {
        return view('hobby.mail');
    }
}
