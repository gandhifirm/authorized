<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::domain('peserta.'.env('APP_URL'))->group(function () {
    Route::get('/', function () {
        return "Halaman Website Utama Peserta";
    });

    Route::get('login', \App\Livewire\Backend\Auth\Login::class)->name('login');

    Route::middleware('auth')->group(function () {
        Route::get('home', \App\Livewire\Frontend\Pages\Home::class)->name('home');
    });
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('login', \App\Livewire\Backend\Auth\Login::class)->name('login');
Route::get('register', \App\Livewire\Backend\Auth\Register::class)->name('register');

Route::middleware('auth')->group(function () {
    Route::get('home', \App\Livewire\Frontend\Pages\Home::class)->name('home');
});

Auth::routes(['login' => false, 'register' => false]);