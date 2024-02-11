<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\GoogleReview\MainApi;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
// api/v1/check

Route::prefix('v1')->group(function () {
    Route::group(['middleware' =>['auth:sanctum']], function () {
        Route::post('/check', [MainApi::class, 'check']);
        Route::post('/response', [MainApi::class, 'response']);
        Route::post('/auto', [MainApi::class, 'auto']);
    });


});
    