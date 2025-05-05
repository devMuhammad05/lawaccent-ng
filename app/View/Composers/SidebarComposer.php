<?php

namespace App\View\Composers;

use Illuminate\Support\Facades\Route;
use Illuminate\View\View;

class SidebarComposer
{
    public function compose(View $view): void
    {
        $currentRoute = explode('.', Route::currentRouteName())[1];
        $view->with([
            'currentRoute' => $currentRoute,
            'unreadMessagesCount' => \App\Models\ContactUs::unread()->count(),
            'unreadApplicationCount' => \App\Models\ScholarshipApplication::unread()->count(),
            'unreadConsultationCount' => \App\Models\Consultation::unread()->count(),
        ]);

    }
}
