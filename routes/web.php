<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::middleware("auth")->group(function () {
    Route::get('/', function () {
        $email = Auth::user()->email;  // Retrieve the authenticated user's email
        return view('welcome', ['email' => $email]);
    })->name("home");
});


Route::get("/login", [AuthController::class, "login"])
 ->name("login");
Route::post("/login", [AuthController::class, "loginPost"])
->name("login.post");

Route::get("/register", [AuthController::class, "register"])
->name("register");;
Route::post("/register", [AuthController::class, "registerPost"])
->name("register.post");