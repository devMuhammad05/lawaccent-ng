<?php

use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\QuizController;
use App\Http\Controllers\Admin\SocialController;
use App\Http\Controllers\Admin\OurTeamController;
use App\Http\Controllers\Admin\CaseStudyController;
use App\Http\Controllers\Admin\ContactUsController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\AssessmentController;
use App\Http\Controllers\Admin\JobOpeningController;
use App\Http\Controllers\Admin\NewsletterController;
use App\Http\Controllers\Admin\VideoMediaController;
use App\Http\Controllers\Admin\SiteSettingController;
use App\Http\Controllers\Admin\ConsultationController;
use App\Http\Controllers\Admin\CookieNoticeController;
use App\Http\Controllers\Admin\PodcastMediaController;
use App\Http\Controllers\Admin\PrivacyNoticeController;
use App\Http\Controllers\Admin\AboutUsMetricsController;
use App\Http\Controllers\Admin\ScholarshipApplicationController;


Route::middleware(['auth', 'verifiedOtp'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('faqs', FaqController::class);
    Route::resource('about-us-metrics', AboutUsMetricsController::class);
    Route::resource('privacy-notice', PrivacyNoticeController::class);
    Route::resource('cookie-notice', CookieNoticeController::class);
    Route::resource('blogs', BlogController::class);
    Route::resource('socials', SocialController::class);
    Route::resource('site-settings', SiteSettingController::class);
    Route::resource('case-studies', CaseStudyController::class);
    Route::resource('assessments', AssessmentController::class);
    Route::resource('newsletters', NewsletterController::class);
    Route::resource('quizzes', QuizController::class);
    Route::resource('socials', SocialController::class);
    Route::get('contact-us/unread', [ContactUsController::class, 'unread'])->name('contact-us.unread');
    Route::resource('contact-us', ContactUsController::class)->except('post');
    Route::resource('job-openings', JobOpeningController::class);
    Route::get('contact-us/{contact_us}/mark-as-read', [ContactUsController::class, 'markAsRead'])->name('contact-us.markAsRead');
    Route::resource('media-hub/videos', VideoMediaController::class);
    Route::resource('media-hub/podcasts', PodcastMediaController::class);
    Route::resource('consultations', ConsultationController::class)->except('post',);
    Route::get('consultations/{consultations}/mark-as-read', [ConsultationController::class, 'markAsRead'])->name('consultations.markAsRead');
    Route::get('consultation/unread', [ConsultationController::class, 'unread'])->name('consultations.unread');
    Route::resource('our-teams', OurTeamController::class);
    Route::resource('scholarship-applications', ScholarshipApplicationController::class);
    Route::get('scholarship-application/unread', [ScholarshipApplicationController::class, 'unread'])->name('scholarship-applications.unread');
    Route::get('scholarship-application/{scholarshipApplication}/mark-as-read', [ScholarshipApplicationController::class, 'markAsRead'])->name('scholarship-application.markAsRead');
});
