<?php
require __DIR__.'/auth.php';

use App\Livewire\Home;
use App\Livewire\Menu;
use App\Livewire\Reservation;
use Illuminate\Support\Facades\Route;

Route::get('/', Home::class)->name('home');
Route::get('/menu', Menu::class)->name('menu');
Route::get('/reservation', Reservation::class)->name('reservation');


Route::get('dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth'])->name('dashboard');

Route::view('profile', 'profile')
     ->middleware(['auth'])
     ->name('profile');
