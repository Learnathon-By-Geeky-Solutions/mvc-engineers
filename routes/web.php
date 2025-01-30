<?php
require __DIR__.'/auth.php';

use App\Livewire\Admin\Dashboard;
use Illuminate\Support\Facades\Route;


Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', Dashboard::class)->name('dashboard');
    Route::get('/users', \App\Livewire\Admin\UserManagement::class)->name('user-management');
});

//Route::view('profile', 'profile')
//     ->middleware(['auth'])
//     ->name('profile');
