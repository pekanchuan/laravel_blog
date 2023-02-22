<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {

    }

    public function create()
    {
        return view('register.create');
    }

    public function store(Request $request)
    {
        User::create($request->validate([
            'name' => 'required|max:255',
            'username' => 'required|max:255|min:3',
            'email' => 'required|email|max:255',
            'password' => 'required|min:7|max:255'
        ]));

        return redirect('/');
    }
}
