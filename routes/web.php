<?php

use Illuminate\Support\Facades\Route;

// ─────────────────────────────────────────────────────────────────────────────
// Every page is a static Blade view. No controllers, no DB queries — the whole
// site renders from config('site.*'), which keeps responses extremely fast.
// ─────────────────────────────────────────────────────────────────────────────

Route::view('/', 'pages.home')->name('home');
Route::view('/about', 'pages.about')->name('about');
Route::view('/contact', 'pages.contact')->name('contact');
Route::view('/industry', 'pages.industry')->name('industry');
Route::view('/blog', 'pages.blog')->name('blog');
Route::view('/blog/detail', 'pages.blog-detail')->name('blog.detail');

// Staff / Hire
Route::view('/staff', 'pages.staff.index')->name('staff');
Route::view('/staff/developer', 'pages.staff.developer')->name('staff.developer');
Route::view('/staff/media', 'pages.staff.media')->name('staff.media');
Route::view('/staff/design', 'pages.staff.design')->name('staff.design');
Route::view('/staff/marketing', 'pages.staff.marketing')->name('staff.marketing');

// Services
Route::view('/services', 'pages.services.index')->name('services');
Route::view('/services/development', 'pages.services.development')->name('services.development');
Route::view('/services/design', 'pages.services.design')->name('services.design');
Route::view('/services/marketing', 'pages.services.marketing')->name('services.marketing');
Route::view('/services/ai', 'pages.services.ai')->name('services.ai');

// Portfolio
Route::view('/portfolio', 'pages.portfolio.index')->name('portfolio');
Route::view('/portfolio/development', 'pages.portfolio.development')->name('portfolio.development');
Route::view('/portfolio/design', 'pages.portfolio.design')->name('portfolio.design');

// Search (reads ?q= and echoes it into the results view)
Route::get('/search', \App\Http\Controllers\SearchController::class)->name('search');
