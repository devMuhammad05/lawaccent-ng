<?php

use App\Http\Controllers\Admin\DashboardController;


Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
});
