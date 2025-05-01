<?php

use App\Http\Controllers\Web\AboutUsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\HomeController;
use App\Http\Controllers\Web\PracticeAreaController;



Route::get('clear', function () {
    Artisan::call('config:clear');
    Artisan::call('cache:clear');
    Artisan::call('storage:link');
    Artisan::call('view:clear');

    return 'Cache, config cleared and storage linked successfully!';
});




Route::get('home', [HomeController::class, 'index'])->name('home');
Route::get('about-us', [AboutUsController::class, 'index'])->name('about-us');
Route::prefix('practice-areas')->name('practice-areas.')->controller(PracticeAreaController::class)->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('data-protection-and-advisory-services', 'dataProtection')->name('data.protection.services');
    Route::get('corporate-law', 'corporateLaw')->name('corporate.law.services');
    Route::get('family-law', 'familyLaw')->name('family.law.services');
    Route::get('litigation', 'litigation')->name('litigation.services');
    Route::get('real-estate-law', 'realEstate')->name('real.estate.services');
    Route::get('debt-recovery', 'debtRecovery')->name('debt.recovery.services');
    Route::get('banking-and-finance-law', 'banking')->name('banking.and.finance.services');

});

require __DIR__.'/auth.php';
require __DIR__.'/admin.php';

