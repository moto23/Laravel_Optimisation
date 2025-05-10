<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('index');
    }

    public function showSignup()
    {
        $institutes = DB::table('institute')->pluck('institute_name');
        return view('signup', compact('institutes'));
    }
}