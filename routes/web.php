<?php

use App\Http\Controllers\Auth\EmailVerificationController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\Auth\Passwords\Confirm;
use App\Http\Livewire\Auth\Passwords\Email;
use App\Http\Livewire\Auth\Passwords\Reset;
use App\Http\Livewire\Auth\Register;
use App\Http\Livewire\Auth\Verify;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EmailListController;

Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');
Route::view('/jobs', 'jobs')->name('jobs');
Route::view('/press', 'press')->name('press');
Route::view('/terms', 'terms')->name('terms');
Route::view('/privacy', 'privacy')->name('privacy');
Route::view('/demo', 'demo')->name('demo');
Route::post('/emailList', [EmailListController::class, 'store'])->name('emailList');
Route::post('/contact', [ContactController::class, 'store'])->name('contacts');

Route::middleware('guest')->group(function () {
    Route::get('login', Login::class)
        ->name('login');
    
    Route::get('register', Register::class)
        ->name('register');
        
    Route::get('password/reset', Email::class)
        ->name('password.request');

    Route::get('password/reset/{token}', Reset::class)
        ->name('password.reset');
});

Route::middleware('auth')->group(function () {
    Route::get('email/verify', Verify::class)
        ->middleware('throttle:6,1')
        ->name('verification.notice');

    Route::get('password/confirm', Confirm::class)
        ->name('password.confirm');

    Route::get('email/verify/{id}/{hash}', EmailVerificationController::class)
        ->middleware('signed')
        ->name('verification.verify');

    Route::post('logout', LogoutController::class)
        ->name('logout');

    Route::get('/emails', [EmailListController::class, 'show'])->name('emails');
    Route::get('/contacts', [ContactController::class, 'show'])->name('contacts');
});
