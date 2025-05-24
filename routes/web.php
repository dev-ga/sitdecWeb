<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::get('/', function () {
    return view('page-one');
})->name('home');

Route::get('/two', function () {
    return view('page-two');
})->name('page-two');

Route::get('/tree', function () {
    return view('page-tree');
})->name('page-tree');

Route::get('/four', function () {
    return view('page-four');
})->name('page-four');


// Route::get('/', function () {
//     return view('section_two');
// })->name('section_two');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});

require __DIR__.'/auth.php';