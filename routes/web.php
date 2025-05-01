<?php

use App\Http\Controllers\Web\AboutUsController;
use App\Http\Controllers\Web\CareerController;
use App\Http\Controllers\web\OurImpactController;
use App\Http\Controllers\Web\ResourceController;
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

Route::prefix('resources')->name('resources.')->controller(ResourceController::class)->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('blogs', 'blogs')->name('blogs');
    Route::get('faqs', 'faqs')->name('faqs');
    Route::get('case-studies', 'caseStudies')->name('case.studies');
    Route::get('media-hub', 'mediaHub')->name('media.hub');
    Route::get('doing-business-in-nigeria', 'business')->name('business.nigeria');
    Route::get('cross-border-legal-services', 'legalServices')->name('legal.services');
    Route::get('legal-checklist-and-assessment-tool', 'assessmentTool')->name('assessment.tool');
});

Route::prefix('our-impact')->name('our-impact.')->controller(OurImpactController::class)->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('legal-literacy-and-public-education', 'legalLiteracy')->name('legal.literacy');
    Route::get('law-school-scholarship-programme', 'scholarship')->name('scholarship');
});

Route::get('career', [CareerController::class, 'index'])->name('career');
Route::get('contact-us', [AboutUsController::class, 'index'])->name('contact-us');
Route::get('consultation', [AboutUsController::class, 'index'])->name('consultation');

require __DIR__.'/auth.php';
require __DIR__.'/admin.php';

