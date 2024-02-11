<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Client\DashboardController;
use App\Http\Controllers\Client\ChartController;
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

Route::get('/create_access_token', [DashboardController::class, 'create_access_token'])->name('create_access_token');

Route::middleware(['auth', 'verified', 'subscribed', 'access_token'])->group(function () {

    Route::get('/dashbord', [DashboardController::class, 'index'])->name('dashbord');
    Route::get('/documentation', [DashboardController::class, 'documentation'])->name('notifications');

    Route::get('/accounts', [DashboardController::class, 'accounts'])->name('accounts');
    Route::get('/settings', [DashboardController::class, 'settings'])->name('settings');
    Route::post('/settings/ruls', [DashboardController::class, 'ruls'])->name('ruls');
    Route::post('/settings/business', [DashboardController::class, 'business'])->name('business');
    Route::post('/settings/personal', [DashboardController::class, 'personal'])->name('personal');



    Route::post('/makeallread', [DashboardController::class, 'makeAllRead'])->name('makeallread');




    Route::get('/get_chart_reviews', [ChartController::class, 'get_chart_reviews'])->name('get_chart_reviews');
    
    Route::get('/get_chart_reviews_total', [DashboardController::class, 'get_chart_reviews_total'])->name('get_chart_reviews_total');
    // Route::get('/api/get_chart_reviews_dash/<int:year>', [DashboardController::class, 'views.get_chart_reviews_dash_p'])->name('get_chart_reviews_dash');



    // path('api/get_chart_reviews_dash/<int:year>/', views.get_chart_reviews_dash_p, name='get_chart_reviews_dash_p')
    // path('api/get_chart_reviews/<int:year>/', views.get_chart_reviews_P, name='get_chart_reviews')

    // path('api/get_chart_reviews_total/', views.get_chart_reviews_total, name='get_chart_reviews_total'),
    // path('api/get_chart_reviews_response/', views.get_chart_reviews_response, name='get_chart_reviews_response'),
    // path('api/get_chart_reviews_stars/', views.get_chart_reviews_stars, name='get_chart_reviews_stars'),
    // path('api/get_chart_reviews_response_nun/', views.get_chart_reviews_response_nun, name='get_chart_reviews_response_nun'),
});
