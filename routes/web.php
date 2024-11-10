<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\NotificationsController;
use App\Http\Controllers\ProfileController;
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

Route::get("/profile", [ProfileController::class, "profile"])->middleware('auth')->name("profile");
Route::get("/profile/edit/name", [ProfileController::class, 'name'])->middleware('auth')->name("edit_name");
Route::put("/profile/update/name/{user}", [ProfileController::class, 'update_name'])->middleware('auth')->name("update_name");

Route::put("/profile/update/image/{user}", [ProfileController::class, 'update_profile_image'])->middleware('auth')->name("update_profile_image");

Route::get("/profile/edit/username", [ProfileController::class, 'username'])->middleware('auth')->name("edit_username");
Route::put("/profile/update/username/{user}", [ProfileController::class, 'update_username'])->middleware('auth')->name("update_username");

Route::get("/profile/edit/email", [ProfileController::class, 'email'])->middleware('auth')->name("edit_email");
Route::put("/profile/update/email/{user}", [ProfileController::class, 'update_email'])->middleware('auth')->name("update_email");

Route::get("/profile/edit/profession", [ProfileController::class, 'profession'])->middleware('auth')->name("edit_profession");
Route::put("/profile/update/profession/{user}", [ProfileController::class, 'update_profession'])->middleware('auth')->name("update_profession");

Route::get("/register", [UserController::class, "login"])->name("register");
Route::post("/register", [AuthController::class, "store"])->name("register.store");

Route::get("/projects", [ProjectsController::class, "show"])->name("projects.show");
Route::get("/tasks", [TasksController::class, "show"])->name("tasks.show");
Route::get("/tracking", [TrackingController::class, "show"])->name("tracking.show");
Route::get("/calendar", [CalendarController::class, "show"])->name("calendar.show");
Route::get("/notifications", [NotificationsController::class, "show"])->name("notifications.show");
