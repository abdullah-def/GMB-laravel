<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;
use App\Http\Controllers\Client\Settings\UserController;
use App\Http\Controllers\Client\NewsletterSubscriptionController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Guest\HomeController;



Route::redirect('/.well-known/change-password', '/settings/password');
Route::get('newsletter-subscriptions/unsubscribe', [NewsletterSubscriptionController::class, 'unsubscribe'])->name('newsletter-subscriptions.unsubscribe');


Route::middleware('guest')->group(function () {
    Route::get('register', [RegisteredUserController::class, 'create'])->name('register');
    Route::post('register', [RegisteredUserController::class, 'store']);
    Route::get('login', [AuthenticatedSessionController::class, 'create'])->name('login');
    Route::post('login', [AuthenticatedSessionController::class, 'store']);

    Route::get('/login/google/redirect', [AuthenticatedSessionController::class, 'redirectToGoogle'])->name('google.redirect');
    Route::get('/login/google/callback', [AuthenticatedSessionController::class, 'handleGoogleCallback'])->name('google.callback');
    Route::get('/signup/google/callback', [AuthenticatedSessionController::class, 'signupGoogleCallBack'])->name('google.signup');
    Route::post('/signup/google/callback', [AuthenticatedSessionController::class, 'completeGoogleCallBack'])->name('google.callback.signup');

    Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])->name('password.request');
    Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])->name('password.email');
    Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])->name('password.reset');
    Route::post('reset-password', [NewPasswordController::class, 'store'])->name('password.store');
});



Route::middleware('auth')->group(function () {

    Route::get('verify-email', EmailVerificationPromptController::class)->name('verification.notice');
    Route::get('verify-email/{id}/{hash}', VerifyEmailController::class)
        ->middleware(['signed', 'throttle:6,1'])
        ->name('verification.verify');
    Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
        ->middleware('throttle:6,1')
        ->name('verification.send');

    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

    Route::put('password', [PasswordController::class, 'update'])->name('password.update');

    // Route::prefix('settings')->group(function () {
    //     Route::get('account', [UserController::class, 'edit'])->name('users.edit');
    //     Route::match(['put', 'patch'], 'account', [UserController::class, 'update'])->name('users.update');

    //     Route::get('password', [UserPasswordController::class, 'edit'])->name('users.password');
    //     Route::match(['put', 'patch'], 'password', [UserPasswordController::class, 'update'])->name('users.password.update');
    // });
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::resource('newsletter-subscriptions', NewsletterSubscriptionController::class)->only('store');
});


// Route::resource('users', UserController::class)->only('show');
