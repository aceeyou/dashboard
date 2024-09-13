<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\NotificationsController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\TasksController;
use App\Http\Controllers\TrackingController;
use App\Http\Controllers\UserController;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    if(auth()) {
        return view('home');
    }
    return redirect()->route('login');
})->middleware('auth')->name("dashboard");

Route::get("/login", [UserController::class, "login"])->name("login");
Route::post("/login", [AuthController::class, "authenticate"])->name("login.authenticate");
Route::post('/logout', [AuthController::class, 'logout'])->name("logout");

Route::get("/profile", [UserController::class, "profile"])->middleware('auth')->name("profile");
Route::get("profile/edit", [UserController::class, 'edit'])->middleware('auth')->name("profile.edit");
Route::put("profile/update/{user}", [UserController::class, 'update'])->middleware('auth')->name("profile.update");

Route::get("/register", [UserController::class, "login"])->name("register");
Route::post("/register", [AuthController::class, "store"])->name("register.store");

Route::get("/projects", [ProjectsController::class, "show"])->name("projects.show");
Route::get("/tasks", [TasksController::class, "show"])->name("tasks.show");
Route::get("/tracking", [TrackingController::class, "show"])->name("tracking.show");
Route::get("/calendar", [CalendarController::class, "show"])->name("calendar.show");
Route::get("/notifications", [NotificationsController::class, "show"])->name("notifications.show");
