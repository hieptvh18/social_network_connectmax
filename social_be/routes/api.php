<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\ChatController;
use App\Http\Controllers\Api\CommentController;
use App\Http\Controllers\Api\NotificationController;
use App\Http\Controllers\Api\PostController;
use App\Http\Controllers\Api\StoryController;
use App\Http\Controllers\Api\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// api authen account
Route::prefix('v1')->group(function () {
    Route::middleware('guest')->group(function (){
        Route::post('register', [AuthController::class, 'registerPost'])->name('register');
        Route::post('login', [AuthController::class, 'loginUsername'])->name('login');
        // social auth
        Route::get('auth/{provider}/redirect', [\App\Http\Controllers\Api\SocialAuthController::class, 'redirectToProvider'])->middleware('guest')->name('login.google.redirect');
        Route::get('auth/{provider}/callback', [\App\Http\Controllers\Api\SocialAuthController::class, 'handleProviderCallback'])->middleware('guest')->name('login.google.handle.callback');
    });

    Route::middleware('auth:sanctum')->group(function () {
        Route::post('/accounts/logout', [AuthController::class, 'logout'])->name('logout');

        // protected broadcast api
        Broadcast::routes(['middleware' => ['auth:sanctum']]);
    });
});

