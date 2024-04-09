<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['login' => false, 'register' => false]);

Route::get('home', \App\Livewire\Frontend\Pages\Home::class)->name('home');

Route::get('login', \App\Livewire\Backend\Auth\Login::class)->name('login');
Route::get('register', \App\Livewire\Backend\Auth\Register::class)->name('register');