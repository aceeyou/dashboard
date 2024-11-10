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

    public function getImageURL(){
        if($this->image){
            return url('storage/', $this->image);
        }

        return "https://images.pexels.com/photos/8834489/pexels-photo-8834489.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1";
    }
}
