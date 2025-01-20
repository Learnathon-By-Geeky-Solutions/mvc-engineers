<?php
require __DIR__.'/auth.php';

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::get('dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth'])->name('dashboard');

Route::view('profile', 'profile')
     ->middleware(['auth'])
     ->name('profile');
