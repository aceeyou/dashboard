<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{

    // View Profile Page
    public function profile(User $user){
        return view("user.profile-view", compact('user'));
    }

    // Edit Name Field
    public function name(User $user){
        $name_editing = true;
        return view('user.profile-view', compact('user', 'name_editing'));
    }

    public function update_name(User $user){
        $validated = request()->validate([
            'name' => 'min:3|max:40',
        ]);
        $user->update($validated);
        return redirect()->route('profile');
    }

    // update user profile image
    public function update_profile_image(User $user) {
        $validated = request()->validate([
            "image" => "image|nullable"
        ]);

        if(request()->hasFile('image')){
            $imagePath = request()->file('image')->store('profile', 'public');
            $validated['image'] = $imagePath;

            Storage::disk('public')->delete($user->image ?? "");
        }

        $user->update($validated);
        return redirect()->route("profile");
    }

    // Edit Username Field
    public function username(User $user){
        $username_editing = true;
        return view('user.profile-view', compact('user', 'username_editing'));
    }
    public function update_username(User $user){
        // dd(request());
        $validated = request()->validate([
            'username' => 'min:3|max:20|unique:users,username',
        ]);
        $user->update($validated);
        return redirect()->route('profile');
    }

    // Edit Email Field
    public function email(User $user){
        $email_editing = true;
        return view('user.profile-view', compact('user', 'email_editing'));
    }
    public function update_email(User $user){
        $validated = request()->validate([
            'email' => 'email|unique:users,email',
        ]);
        $user->update($validated);
        return redirect()->route('profile');
    }

    // Edit Profession Field
    public function profession(User $user){
        $profession_editing = true;
        return view('user.profile-view', compact('user', 'profession_editing'));
    }

    public function update_profession(User $user) {
        $validated = request()->validate([
            // 'username' => 'min:3|max:20|unique:users,username',
            'profession' => "nullable|min:2|max:100",
            // "image" => "image|nullable"
        ]);

        // if(request()->hasFile('image')){
        //     $imagePath = request()->file('image')->store('profile', 'public');
        //     $validated['image'] = $imagePath;

        //     Storage::disk('public')->delete($user->image ?? "");
        // }

        $user->update($validated);
        return redirect()->route('profile');
    }
}
