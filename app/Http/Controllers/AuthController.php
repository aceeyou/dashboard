<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //
    public function store(){
        // validate user input
        // dd(request());
        $validated = request()->validate([
            'name' => 'required|min:3|max:40',
            'email' => 'required|email|unique:users,email',
            'username' => 'required|min:3|max:20|unique:users,username',
            'password' => 'required|confirmed|min:8|regex:/[a-z]/|regex:/[A-Z]/|regex:/[0-9]/|regex:/[@$!%*#?&]/',
            'password_confirmation' => 'required'
        ]);
        // Validate if the user entered the same password
        if($validated['password'] !== $validated['password_confirmation']){
            return redirect()->route("register")->withErrors("password_confirmation", "Passwords do not match");
        } 

        // add validated details to the database
        User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'username' => $validated['username'],
            'password' => Hash::make($validated['password']),
        ]);

        // redirect the user to the login page when their account is created 
        // otherwise, display the error messages encountered
        return redirect()->route("login")->with('success', "Account created" );
    }

    public function authenticate(){
        // dd(request());

        $validated = request()->validate([
            'username' => 'required',
            'password' => 'required|min:8'
        ]);

        // try to authenticate the user input
        if(auth()->attempt(['username' => $validated['username'], 'password' => $validated["password"]])) {
            // reset/remove input from the session
            request()->session()->regenerate();
            return redirect()->route('dashboard');
        }

        return redirect()->route("login")->withError("Incorrect username or password");
    }

    public function logout(){
        auth()->logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return redirect()->route('dashboard');
    }
}
