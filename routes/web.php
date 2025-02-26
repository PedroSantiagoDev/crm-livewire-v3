<?php

use App\Livewire\Auth\Register;
use App\Livewire\Welcome;
use Illuminate\Support\Facades\{Auth, Route};

Route::get('/', Welcome::class)->name('welcome');
Route::get('/register', Register::class)->name('auth.register');
Route::get('/logout', fn () => Auth::logout())->name('auth.logout');

Route::get('/dashboard', fn () => 'dashboard')->name('dashboard');
