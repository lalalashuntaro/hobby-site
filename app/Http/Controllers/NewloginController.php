<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewloginController extends Controller
{

    public function new()
    {
        return view('hobby.new');
    }

    public function confirmation(Request $request)
    {
        return view('hobby.new');
    }

    public function registered()
    {
        return view('hobby.registered');
    }

    public function mail()
    {
        $items = DB::table('people')->get();
        return view('hobby.mail', ['items' => $items]);
    }
}
