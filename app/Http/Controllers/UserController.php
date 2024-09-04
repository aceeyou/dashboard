<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function show(User $user) {
        return view("dashboard", compact("user"));
    }

    public function store() {
        // dd(request());

        //validate inputs
        $validated = request()->validate([
            'name' => 'required|min:3|max:40',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed|min:8|regex:/[a-z]/|regex:/[A-Z]/|regex:/[0-9]/|regex:/[@$!%*#?&]/',
            'password_confirmation' => 'required'
        ]);

        return view("auth.auth", compact('validated'));
    }

    public function login() {
        return view("auth.auth");
    }

    public function register() {
        return view("auth.register");
    }
}
