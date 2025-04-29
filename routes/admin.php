<?php

use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\AbouUsMetricsController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PrivacyNoticeController;


Route::middleware(['auth', 'verifiedOtp'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('faqs', FaqController::class);
    Route::resource('about-us-metrics', AbouUsMetricsController::class);
    Route::resource('privacy-notice', PrivacyNoticeController::class);
});
