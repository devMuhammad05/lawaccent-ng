<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use App\View\Composers\SidebarComposer;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('admin.layouts.sidebar', SidebarComposer::class);
    }
}
