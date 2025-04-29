<?php

use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\SocialController;
use App\Http\Controllers\Admin\AbouUsMetricsController;
use App\Http\Controllers\Admin\CaseStudyController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\SiteSettingController;
use App\Http\Controllers\Admin\CookieNoticeController;
use App\Http\Controllers\Admin\PrivacyNoticeController;


Route::middleware(['auth', 'verifiedOtp'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('faqs', FaqController::class);
    Route::resource('about-us-metrics', AbouUsMetricsController::class);
    Route::resource('privacy-notice', PrivacyNoticeController::class);
    Route::resource('cookie-notice', CookieNoticeController::class);
    Route::resource('blogs', BlogController::class);
    Route::resource('socials', SocialController::class);
    Route::resource('site-settings', SiteSettingController::class);
    Route::resource('case-studies', CaseStudyController::class);
});
