<?php
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('', function () {
    return view('home');
});

Route::controller(UserController::class)->prefix("users")->middleware([])->group(function (){
    Route::post("/login", "login");
});

