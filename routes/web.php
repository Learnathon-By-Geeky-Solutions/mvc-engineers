<?php

require __DIR__.'/auth.php';

use App\Livewire\Admin\Dashboard;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', Dashboard::class)->name('dashboard');
    Route::get('/users', \App\Livewire\Admin\UserManagement::class)->name('user-management');
    Route::get('/reservations', \App\Livewire\Admin\Reservations::class)->name('booking');
});



Route::get('/', \App\Livewire\Frontend\Home::class)->name('home');

// Route::view('profile', 'profile')
//     ->middleware(['auth'])
//     ->name('profile');
