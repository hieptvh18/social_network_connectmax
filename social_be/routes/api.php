<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\UserVerifyController;
use Illuminate\Support\Facades\Route;

// api authen account
Route::prefix('v1')->group(function () {
    Route::middleware('guest')->group(function (){
        Route::post('register', [AuthController::class, 'registerPost'])->name('register');
        Route::post('login', [AuthController::class, 'loginUsername'])->name('login');
        
        // social auth
        Route::get('auth/{provider}/redirect', [\App\Http\Controllers\Api\SocialAuthController::class, 'redirectToProvider'])->name('login.google.redirect');
        Route::get('auth/{provider}/callback', [\App\Http\Controllers\Api\SocialAuthController::class, 'handleProviderCallback'])->name('login.google.handle.callback');

        // verify register
        Route::controller(UserVerifyController::class)->group(function(){
            Route::post('user/register/verify','verifyCode')->name('user.register.verify');
            Route::post('user/register/resend-verify','resendCode')->name('user.register.resendCode');
        });
    });

    Route::middleware('auth:sanctum')->group(function () {
        Route::post('/accounts/logout', [AuthController::class, 'logout'])->name('logout');

        // protected broadcast api
        Broadcast::routes(['middleware' => ['auth:sanctum']]);
    });
});

