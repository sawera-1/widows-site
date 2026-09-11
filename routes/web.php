<?php

use Illuminate\Support\Facades\Route;

// ─────────────────────────────────────────────────────────────────────────────
// Every page is a static Blade view. No controllers, no DB queries — the whole
// site renders from config('site.*'), which keeps responses extremely fast.
// ─────────────────────────────────────────────────────────────────────────────

Route::view('/', 'pages.home')->name('home');
Route::view('/about', 'pages.about')->name('about');
Route::view('/installation', 'pages.installationpage')->name('installation');
Route::view('/faq', 'pages.faq')->name('faq');
Route::view('/payment-and-delivery', 'pages.paymentAnddelivery')->name('payment-and-delivery');
Route::view('/staff', 'pages.staff.index')->name('staff');
Route::view('/services', 'pages.service')->name('services');
Route::view('/services/{slug}', 'pages.serviceDetailPages.service1')->name('services.detail');
Route::view('/products', 'pages.product')->name('products');
Route::view('/products/{slug}', 'pages.productDetailPages.product1')->name('products.detail');
Route::view('/catalog', 'pages.catalog')->name('catalog');
Route::view('/case-studies', 'pages.caseStudy')->name('case-studies');
Route::view('/case-studies/custom-corporate-recognition-awards', 'pages.caseStudySubPages.case1')->name('case-studies.detail');
Route::view('/contact', 'pages.contactus')->name('contact');
Route::view('/request-a-quote', 'pages.contactus')->name('request-quote');
Route::post('/contact', [\App\Http\Controllers\ContactController::class, 'submit'])->name('contact.submit');

// Window & Door product categories
Route::view('/windows', 'pages.product')->name('windows');
Route::view('/doors', 'pages.product')->name('doors');
// Individual window design detail pages (must be BEFORE the wildcard /{slug} route)
Route::view('/windows/information', 'pages.windows-info')->name('windows.information');
Route::view('/doors/information',  'pages.doors-info')->name('doors.information');
Route::view('/doors/upvc-doors',   'pages.doors.upvcdoor')->name('doors.upvc-doors');
Route::view('/doors/upvc',         'pages.doors.upvcdoor')->name('doors.upvc');
Route::view('/doors/flush-doors',  'pages.doors.flushdoor')->name('doors.flush-doors');
Route::view('/doors/flush',        'pages.doors.flushdoor')->name('doors.flush');
Route::view('/doors/stable-doors', 'pages.doors.stabledoor')->name('doors.stable-doors');
Route::view('/doors/stable',       'pages.doors.stabledoor')->name('doors.stable');
Route::view('/doors/size',         'pages.doors.size')->name('doors.size');
Route::view('/windows/standard-casement', 'pages.windows.standarddetail')->name('windows.standard-casement');
Route::view('/windows/french-windows',     'pages.windows.frenchwindow')->name('windows.french-windows');
Route::view('/windows/tilt-and-turn-windows', 'pages.windows.tiltwindow')->name('windows.tilt-and-turn-windows');
Route::view('/windows/sash-windows',           'pages.windows.sashwidow')->name('windows.sash-windows');
Route::view('/windows/sash',                   'pages.windows.sashwidow')->name('windows.sash');
Route::view('/windows/size',                   'pages.windows.sizepage')->name('windows.size');

Route::view('/windows/{slug}', 'pages.product')->name('windows.detail');
Route::view('/doors/{slug}', 'pages.product')->name('doors.detail');
Route::view('/design-and-price', 'pages.product')->name('design-and-price');





// Window & Door Info pages
Route::view('/info', 'pages.information')->name('info');
// /info/{slug} removed — superseded by /windows/information and /doors/information

// Search (reads ?q= and echoes it into the results view)
Route::get('/search', \App\Http\Controllers\SearchController::class)->name('search');

// Cart & Checkout Routes
Route::get('/cart', [\App\Http\Controllers\CartController::class, 'index'])->name('cart.index');
Route::post('/cart/add', [\App\Http\Controllers\CartController::class, 'add'])->name('cart.add');
Route::post('/cart/update/{id}', [\App\Http\Controllers\CartController::class, 'update'])->name('cart.update');
Route::post('/cart/remove/{id}', [\App\Http\Controllers\CartController::class, 'remove'])->name('cart.remove');

Route::get('/checkout', [\App\Http\Controllers\CheckoutController::class, 'index'])->name('checkout.index');
Route::post('/checkout', [\App\Http\Controllers\CheckoutController::class, 'process'])->name('checkout.process');
Route::get('/checkout/success/{id}', [\App\Http\Controllers\CheckoutController::class, 'success'])->name('checkout.success');

// Order Tracking
Route::get('/track-order', [\App\Http\Controllers\TrackOrderController::class, 'index'])->name('track-order');
Route::post('/track-order', [\App\Http\Controllers\TrackOrderController::class, 'track'])->name('track-order.submit');

// Advice Centre
Route::get('/advice-centre', [\App\Http\Controllers\AdviceCentreController::class, 'index'])->name('advice.index');
Route::get('/advice-centre/{slug}', [\App\Http\Controllers\AdviceCentreController::class, 'show'])->name('advice.show');

// Account / Orders Route
Route::middleware(['auth'])->group(function () {
    Route::get('/account/orders', [\App\Http\Controllers\OrderController::class, 'index'])->name('account.orders');
    Route::get('/account/orders/{id}', [\App\Http\Controllers\OrderController::class, 'show'])->name('account.orders.show');
});

// ─────────────────────────────────────────────────────────────────────────────
// SEO: sitemap + robots. Dynamic (not static files) so the domain is derived
// from the request — nothing to edit when the site moves to its real domain.
// ─────────────────────────────────────────────────────────────────────────────
Route::get('/sitemap.xml', function () {
    $pages = [
        '', 'about', 'catalog', 'case-studies', 'case-studies/custom-corporate-recognition-awards', 'contact', 'request-a-quote', 'industry', 'blog', 'blog/detail',
        'staff',
        'services',
        'portfolio',
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
