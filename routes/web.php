<?php

use App\Http\Controllers\NotificationsController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name("dashboard");

Route::get("/login", [UserController::class, "login"])->name("login");
Route::post("/login", [UserController::class, "store"])->name("login.store");
Route::get("/register", [UserController::class, "login"])->name("register");
Route::get("/projects", [ProjectsController::class, "show"])->name("projects");
Route::get("/notification", [NotificationsController::class, "show"])->name("notification.show");
