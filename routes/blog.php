<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Guest\HomeController;
use App\Http\Controllers\Blog\PostBlogController;
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



Route::get('/blog', [PostBlogController::class, 'index'])->name('blog');
Route::get('/blog/{post:slug}', [PostBlogController::class, 'show'])->name('blog.post');

Route::get('/category/{category:slug}', [PostBlogController::class, 'category'])->name('blog.category');
Route::get('/tag/{tag:slug}', [PostBlogController::class, 'tag'])->name('blog.tag');
