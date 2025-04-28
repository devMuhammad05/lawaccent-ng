<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ForgetPasswordController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Auth\VerifyAuthenticatedSessionController;
use App\Http\Controllers\Auth\VerifyOtpController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->prefix('admin')->group(function () {

    Route::get('login', [AuthenticatedSessionController::class, 'create'])
        ->name('login');

    Route::post('login', [AuthenticatedSessionController::class, 'store'])
        ->name('login.authenticate');

    Route::get('forget-password', [ForgetPasswordController::class, 'create'])
        ->name('forget.password');

    Route::post('forget-password', [ForgetPasswordController::class, 'store'])
        ->name('forget.request');

    Route::get('verify-otp', [VerifyOtpController::class, 'create'])
        ->name('otp.verify');

    Route::post('verify-otp', [VerifyOtpController::class, 'store'])
        ->name('otp.store');

    Route::get('reset-password', [ResetPasswordController::class, 'edit'])
        ->name('reset.password');

    Route::put('reset-password', [ResetPasswordController::class, 'update'])
        ->name('reset.password.update');

});

Route::middleware('auth')->group(function () {
    Route::get('login-verify', [VerifyAuthenticatedSessionController::class, 'check'])->name('login.check');
    Route::post('login-verify', [VerifyAuthenticatedSessionController::class, 'verify'])->name('login.verify');
});

Route::middleware(['auth'])->group(function () {

    Route::put('change-password', [NewPasswordController::class, 'update'])
        ->name('password.update');

    // Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])
    //     ->name('password.confirm');

    // Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);

    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
        ->name('logout');
});
