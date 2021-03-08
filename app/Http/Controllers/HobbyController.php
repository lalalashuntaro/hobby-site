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

    public function new(Repuest $request)
    {
        return view('hobby.new');
    }

    public function registered(Request $repuest)
    {
        return view('hobby.registered');
    }

    public function confirmation()
    {
        return view('hobby.confirmation');
    }

    public function mail()
    {
        $items = DB::table('people')->get();
        return view('hobby.mail', ['items' => $items]);
    }
}
