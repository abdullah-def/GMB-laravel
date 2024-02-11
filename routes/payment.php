<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Payment\PlanController;





Route::middleware(['auth', 'verified'])->group(function () {

    Route::get('plans/checkout', [PlanController::class, 'show'])->name("plans.show");
    Route::post('subscription', [PlanController::class, 'subscription'])->name("subscription.create");
});
