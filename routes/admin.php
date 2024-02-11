<?php

use App\Http\Controllers\Admin\PlansController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::middleware(['auth','admin'])->group(function () {

    Route::prefix('admin')->group(function () {
        Route::get('/plans', [PlansController::class, 'show'])->name('admin.plan.show');
        Route::get('/plans/create', [PlansController::class, 'create'])->name('admin.plan.show');
        Route::post('/plans/create', [PlansController::class, 'store'])->name('admin.plan.store');

        

       
    });

});


