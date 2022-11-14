<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;

class RegisterController extends Controller
{
    public function index()
    {
        $title = 'Test Exam Form';
        return view('register')->with(compact('title'));
    }

    public function register(RegisterRequest $request)
    {
        return 'ok';
    }
}
