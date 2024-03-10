<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Payment\PlanController;





Route::middleware(['auth', 'verified'])->group(function () {

    Route::get('plans/checkout', [PlanController::class, 'show'])->name("plans.show");
    Route::post('subscription', [PlanController::class, 'subscription'])->name("subscription.create");

    Route::get('extra/checkout', [PlanController::class, 'extr'])->name("extra.show");
    Route::post('extra/subscription', [PlanController::class, 'extraSubscription'])->name("subscription.extra");
});
Route::any('stripe/webhooks', [PlanController::class, 'webhooks']);