<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\User;

class RegisterController extends Controller
{
    public function index()
    {
        $title = 'Test Exam Form';
        return view('register')->with(compact('title'));
    }

    public function register(RegisterRequest $request)
    {
        // Bcrypt password before saving
        $request['password'] = bcrypt($request->password);
        User::create($request->all());
        return back()->with('success', "Register Successfull");
    }
}
