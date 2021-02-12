<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $items = DB::table('people')->get();
        return view('hobby.mail', ['items' => $items]);
    }
}
