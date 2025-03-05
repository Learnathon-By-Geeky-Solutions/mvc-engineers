<?php

require __DIR__.'/auth.php';

use App\Livewire\Admin\Dashboard;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', Dashboard::class)->name('dashboard');
    Route::get('/users', \App\Livewire\Admin\UserManagement::class)->name('user-management');
    Route::get('/reservations', \App\Livewire\Admin\Reservations::class)->name('booking');
    Route::get('/food-management', \App\Livewire\Admin\FoodManagement\FoodManagement::class)->name('food-management');
    Route::get('/Campaigns', \App\Livewire\Admin\Campagin::class)->name('campaigns');
    Route::get('/Orders', \App\Livewire\Admin\Orders::class)->name('orders');
    Route::get('/Reports', \App\Livewire\Admin\Report::class)->name('reports');
});

Route::get('/', \App\Livewire\Frontend\Home::class)->name('home');
Route::get('/menu', \App\Livewire\Frontend\Menu::class)->name('menu');
Route::get('/reservation', \App\Livewire\Frontend\Reservation::class)->name('reservation');
Route::get('/contact', \App\Livewire\Frontend\Contact::class)->name('contact');
Route::get('/signin', \App\Livewire\Frontend\SignIn::class)->name('signin')->middleware('guest');
Route::get('/signup', \App\Livewire\Frontend\SignUp::class)->name('signup')->middleware('guest');


// Route::view('profile', 'profile')
//     ->middleware(['auth'])
//     ->name('profile');
