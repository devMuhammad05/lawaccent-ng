<?php

use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\HomeController;
use App\Http\Controllers\Web\CareerController;
use App\Http\Controllers\Web\AboutUsController;
use App\Http\Controllers\Web\ResourceController;
use App\Http\Controllers\Web\ContactUsController;
use App\Http\Controllers\Web\OurImpactController;
use App\Http\Controllers\Web\NewsletterController;
use App\Http\Controllers\web\ConsultationController;
use App\Http\Controllers\Web\PracticeAreaController;
use App\Http\Controllers\Web\PrivacyAndCookiesController;
use App\Http\Controllers\Web\WebinarApplicationController;



Route::get('clear', function () {
    Artisan::call('config:clear');
    Artisan::call('cache:clear');
    Artisan::call('storage:link');
    Artisan::call('view:clear');

    return 'Cache, config cleared and storage linked successfully!';
});




Route::get('/', [HomeController::class, 'index'])->name('home');
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
    Route::get('blogs/{slug}', 'showBlog')->name('show.blog');
    Route::get('download-blogs/{slug}', 'downloadPdf')->name('download.blog');
    Route::get('faqs', 'faqs')->name('faqs');
    Route::get('case-studies', 'caseStudies')->name('case.studies');
    Route::get('case-studies/{slug}', 'showCaseStudy')->name('show.case.study');
    Route::get('media-hub', 'mediaHub')->name('media.hub');
    Route::get('doing-business-in-nigeria', 'business')->name('business.nigeria');
    Route::get('cross-border-legal-services', 'legalServices')->name('legal.services');
    Route::get('legal-checklist-and-assessment-tool', 'assessmentTool')->name('assessment.tool');
    Route::get('legal-checklist-and-assessment-tool{assessment}', 'showAssessment')->name('show.assessment');
    Route::get('legal-checklist{legalCheckList}', 'showLegalCheckList')->name('show.legal.check.list');
});

Route::prefix('our-impact')->name('our-impact.')->controller(OurImpactController::class)->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('legal-literacy-and-public-education', 'legalLiteracy')->name('legal.literacy');
    Route::get('webinars/{webinar:slug}/webinar-details', 'showWebinar')->name('show.webinar');
    Route::get('law-school-scholarship-programme', 'lawSchool')->name('law.school.scholarship');
    Route::get('apply-for-scholarship', 'scholarship')->name('scholarship');
    Route::post('apply-for-scholarship', 'applyScholarship')->name('scholarship.store');
    Route::get('quizzes', 'quizes')->name('quizes.index');
    Route::get('quizzes/{quiz}/why-take-quiz', 'whyTakeQuiz')->name('why.take.quiz');
    Route::get('quizzes/{quiz}', 'showQuiz')->name('show.quiz');
    Route::get('webinars/{webinar:slug}', 'showWebinar')->name('show.webinar');
});

Route::get('career', [CareerController::class, 'index'])->name('career');
Route::get('contact-us', [ContactUsController::class, 'index'])->name('contact-us');
Route::get('schedule-a-consultation', [ConsultationController::class, 'index'])->name('consultation');
Route::post('schedule-a-consultation', [ConsultationController::class, 'store'])->name('consultation.store');
Route::post('webinar-application', [WebinarApplicationController::class, 'store'])->name('webinar.store');

Route::post('newsletters', NewsletterController::class)->name('newsletters.store');

Route::get('privacy-notice', [PrivacyAndCookiesController::class, 'privacy'])->name('privacy-notice');
Route::get('cookie-notice', [PrivacyAndCookiesController::class, 'cookies'])->name('cookie-notice');


require __DIR__.'/auth.php';
require __DIR__.'/admin.php';


Route::get('/mail', function () {
    Mail::raw('This is a plain text test email.', function ($message) {
        $message->to('olayemisrael@gmail.com')
                ->subject('Test Raw Email');
    });

    return 'Email Sent!';
});
