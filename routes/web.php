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

// ─────────────────────────────────────────────────────────────────────────────
// SEO: sitemap + robots. Dynamic (not static files) so the domain is derived
// from the request — nothing to edit when the site moves to its real domain.
// ─────────────────────────────────────────────────────────────────────────────
Route::get('/sitemap.xml', function () {
    $pages = [
        '', 'about', 'contact', 'industry', 'blog', 'blog/detail',
        'staff', 'staff/developer', 'staff/media', 'staff/design', 'staff/marketing',
        'services', 'services/development', 'services/design', 'services/marketing', 'services/ai',
        'portfolio', 'portfolio/development', 'portfolio/design',
    ];
    $lastmod = date('Y-m-d', filemtime(base_path('routes/web.php')));
    $xml = '<?xml version="1.0" encoding="UTF-8"?>'."\n"
         .'<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">'."\n";
    foreach ($pages as $page) {
        $xml .= '  <url><loc>'.url($page).'</loc><lastmod>'.$lastmod.'</lastmod></url>'."\n";
    }
    $xml .= '</urlset>'."\n";

    return response($xml, 200, ['Content-Type' => 'application/xml'])
        ->header('Cache-Control', 'public, max-age=3600');
})->name('sitemap');

Route::get('/robots.txt', function () {
    $txt = "User-agent: *\nAllow: /\nDisallow: /search\n\nSitemap: ".url('/sitemap.xml')."\n";

    return response($txt, 200, ['Content-Type' => 'text/plain'])
        ->header('Cache-Control', 'public, max-age=3600');
});
