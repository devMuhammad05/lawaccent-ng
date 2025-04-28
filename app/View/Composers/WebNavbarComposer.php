<?php

namespace App\View\Composers;

use Illuminate\Support\Facades\Route;
use Illuminate\View\View;

class WebNavbarComposer
{
    public function compose(View $view): void
    {
        $currentRoute = explode('.', Route::currentRouteName())[0];
        $view->with('currentRoute', $currentRoute);
    }
}
