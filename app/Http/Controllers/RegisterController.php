<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RegisterController extends Controller
{

    public function new()
    {
        return view('register.new');
    }

    public function confirmation(Request $request)
    {
        $data = $request->all();
        return view('register.confirmation', compact('data'));
    }

}
