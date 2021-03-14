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

    public function confirmation()
    {
        return view('register.confirmation');
    }

}
