<?php

use Illuminate\Support\Facades\Route;



Route::get('clear', function () {
    Artisan::call('config:clear');
    Artisan::call('cache:clear');
    Artisan::call('storage:link');
    Artisan::call('view:clear');

    return 'Cache, config cleared and storage linked successfully!';
});

Route::get('/', function () {
    return view('welcome');
});

require __DIR__.'/admin.php';

