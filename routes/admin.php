<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;



Route::prefix("admin")->name("admin.")->group(function () {
    Route::middleware(["guest:admin",'PreventBackHistory'])->group(function () {
        Route::view("/login", "back.pages.admin.auth.login")->name("login");
        Route::post("/login_handler", [AdminController::class, "loginHandler"])->name("login_handler");
        Route::view("/forgot_password",'back.pages.admin.auth.forgot_password')->name('forgot_password');
        Route::post("/send-password-reset-link", [AdminController::class, "sendPasswordResetLink"])->name("send-password-reset-link");
        Route::get("/password/reset/{token}",[AdminController::class,"resetPassword"])->name("reset-password");
        Route::post("/reset-password-handler", [AdminController::class, "resetPasswordHandler"])->name("reset-password-handler");
    });

    Route::middleware(["auth:admin","PreventBackHistory"])->group(function () {
        Route::view("/home","back.pages.admin.home")->name("home");
        Route::get("/profile",[AdminController::class,"profileView"])->name("profile");
        Route::view('/settings','back.pages.settings')->name('settings');
        Route::post("/change_profile_picture",[AdminController::class, "changeProfilePicture"])->name("change_profile_picture");
        Route::post("/logout_handler",[AdminController::class, "logoutHandler"])->name("logout_handler");
        Route::post("/change_logo",[AdminController::class,'changeLogo'])->name('change-logo');
    });
});

