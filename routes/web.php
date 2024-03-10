<?php

use App\Http\Controllers\Guest\HomeController;
use App\Http\Controllers\Guest\TicketController;
// use App\Http\Controllers\Client\Settings\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Payment\PlanController;
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




Route::get('/', [HomeController::class, 'index'])->name('home');


Route::get('/terms-of-service', [HomeController::class, 'terms'])->name('terms');
Route::get('/privacy-policy', [HomeController::class, 'policy'])->name('policy');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/plans', [HomeController::class, 'plans'])->name('plans');
Route::get('/demo', [HomeController::class, 'demo'])->name('demo');


// Route::get('/pricing', [HomeController::class, 'pricing'])->name('pricing');


Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/refund-policy', [HomeController::class, 'refund'])->name('refund');
Route::get('/knowledgebase', [HomeController::class, 'knowledgebase'])->name('knowledgebase');
Route::get('/how-it-works', [HomeController::class, 'how_it_works'])->name('how_it_works');


Route::post('/ticket', [TicketController::class, 'index'])->name('ticket');
