<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;

Route::get('/dev/migrate', function () {
    Artisan::call('migrate', ['--force' => true, '--path' => 'database/migrations/new']);
    return Artisan::output();
});

// ─────────────────────────────────────────────────────────────────────────────
// Every page is a static Blade view. No controllers, no DB queries — the whole
// site renders from config('site.*'), which keeps responses extremely fast.
// ─────────────────────────────────────────────────────────────────────────────

Route::get('/', function () {
    $products = \App\Models\Product::where('is_active', 1)->orderBy('sort_order', 'asc')->get();
    return view('pages.home', compact('products'));
})->name('home');
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

// ─────────────────────────────────────────────────────────────────────────────
// Admin Panel Routes
// ─────────────────────────────────────────────────────────────────────────────
Route::prefix('admin')->group(function () {
    // Auth Routes
    Route::get('login', [\App\Http\Controllers\Admin\AdminAuthController::class, 'showLoginForm'])->name('admin.login');
    Route::post('login', [\App\Http\Controllers\Admin\AdminAuthController::class, 'login'])->name('admin.login.submit');
    Route::post('logout', [\App\Http\Controllers\Admin\AdminAuthController::class, 'logout'])->name('admin.logout');

    // Protected Admin Routes
    Route::middleware(['auth', 'admin'])->group(function () {
        Route::get('dashboard', [\App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('admin.dashboard');
        
        // Orders (Order Manager, Super Admin)
        Route::middleware('role:Super Admin,Order Manager')->group(function () {
            Route::get('orders', [\App\Http\Controllers\Admin\OrderController::class, 'index'])->name('admin.orders.index');
            Route::get('orders/{id}', [\App\Http\Controllers\Admin\OrderController::class, 'show'])->name('admin.orders.show');
            Route::post('orders/{id}/status', [\App\Http\Controllers\Admin\OrderController::class, 'updateStatus'])->name('admin.orders.status');
            
            Route::get('customers', [\App\Http\Controllers\Admin\CustomerController::class, 'index'])->name('admin.customers.index');
            Route::get('customers/{id}', [\App\Http\Controllers\Admin\CustomerController::class, 'show'])->name('admin.customers.show');
            
            Route::get('delivery', [\App\Http\Controllers\Admin\DeliveryController::class, 'index'])->name('admin.delivery.index');
            Route::post('delivery/method', [\App\Http\Controllers\Admin\DeliveryController::class, 'storeMethod'])->name('admin.delivery.method.store');
            Route::post('delivery/method/{id}', [\App\Http\Controllers\Admin\DeliveryController::class, 'updateMethod'])->name('admin.delivery.method.update');
            Route::post('delivery/area', [\App\Http\Controllers\Admin\DeliveryController::class, 'storeArea'])->name('admin.delivery.area.store');
            Route::post('delivery/area/{id}', [\App\Http\Controllers\Admin\DeliveryController::class, 'updateArea'])->name('admin.delivery.area.update');
            Route::post('delivery/charge', [\App\Http\Controllers\Admin\DeliveryController::class, 'storeCharge'])->name('admin.delivery.charge.store');
            Route::post('delivery/charge/{id}', [\App\Http\Controllers\Admin\DeliveryController::class, 'updateCharge'])->name('admin.delivery.charge.update');
            Route::post('delivery/leadtime', [\App\Http\Controllers\Admin\DeliveryController::class, 'storeLeadTime'])->name('admin.delivery.leadtime.store');
            Route::post('delivery/leadtime/{id}', [\App\Http\Controllers\Admin\DeliveryController::class, 'updateLeadTime'])->name('admin.delivery.leadtime.update');
            Route::post('delivery/content', [\App\Http\Controllers\Admin\DeliveryController::class, 'storeContent'])->name('admin.delivery.content.store');
        });

        // Products (Product Manager, Super Admin)
        Route::middleware('role:Super Admin,Product Manager')->group(function () {
            Route::resource('products', \App\Http\Controllers\Admin\ProductController::class)->names('admin.products');
        });

        // Content (Content Manager, Super Admin)
        Route::middleware('role:Super Admin,Content Manager')->group(function () {
            Route::get('enquiries', [\App\Http\Controllers\Admin\EnquiryController::class, 'index'])->name('admin.enquiries.index');
            Route::get('enquiries/{enquiry}', [\App\Http\Controllers\Admin\EnquiryController::class, 'show'])->name('admin.enquiries.show');
            Route::post('enquiries/{enquiry}/reply', [\App\Http\Controllers\Admin\EnquiryController::class, 'reply'])->name('admin.enquiries.reply');
            Route::put('enquiries/{enquiry}/status', [\App\Http\Controllers\Admin\EnquiryController::class, 'updateStatus'])->name('admin.enquiries.update_status');
            Route::get('enquiries/{enquiry}/attachment', [\App\Http\Controllers\Admin\EnquiryController::class, 'downloadAttachment'])->name('admin.enquiries.attachment');
        });

        // Settings (Super Admin Only)
        Route::middleware('role:Super Admin')->group(function () {
            Route::get('settings', [\App\Http\Controllers\Admin\SettingController::class, 'index'])->name('admin.settings.index');
            Route::post('settings', [\App\Http\Controllers\Admin\SettingController::class, 'store'])->name('admin.settings.store');
        });
    });
});
