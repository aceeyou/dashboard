<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    //
    public function show(User $user) {
        return view("dashboard", compact("user"));
    }

    public function store() {

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
    
    public function profile(User $user){
        return view("user.profile-view", compact('user'));
    }
    
    public function edit(User $user){
        $editing = true;
        return view("user.profile-view", compact('user', 'editing'));
    }

    public function update(User $user) {
        $validated = request()->validate([
            // 'name' => 'min:3|max:40',
            // 'email' => 'email|unique:users,email',
            // 'username' => 'min:3|max:20|unique:users,username',
            'profession' => "nullable|min:2|max:100",
            // "image" => "image|nullable"
        ]);
        // dd($validated);

        // if(request()->hasFile('image')){
        //     $imagePath = request()->file('image')->store('profile', 'public');
        //     $validated['image'] = $imagePath;

        //     Storage::disk('public')->delete($user->image ?? "");
        // }

        $user->update($validated);
        return redirect()->route('profile');
    }
}
