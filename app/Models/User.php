<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable
{
    use HasFactory;

    // Tells the application that this are the only allowed to be filled a user
    protected $fillable = [
        'name',
        'username',
        'email',
        'password',
        'image',
        'profession',
    ];

    //
    protected $hidden = [
        "password", "remember_token"
    ];
}
