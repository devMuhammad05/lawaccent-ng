<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\HomeController;



Route::get('clear', function () {
    Artisan::call('config:clear');
    Artisan::call('cache:clear');
    Artisan::call('storage:link');
    Artisan::call('view:clear');

    return 'Cache, config cleared and storage linked successfully!';
});




Route::get('home', [HomeController::class, 'index'])->name('home');

require __DIR__.'/auth.php';
require __DIR__.'/admin.php';

