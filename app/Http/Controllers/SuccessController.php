<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuccessController extends Controller
{
    public function index()
    {
        return view('partials.success-payment');
    }

    public function signup()
    {
        return view('partials.success-signup');
    }
}
