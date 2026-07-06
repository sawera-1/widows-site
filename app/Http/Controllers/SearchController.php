<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Invokable controller (instead of a route closure) so `php artisan route:cache`
// works — closures cannot be route-cached.
class SearchController extends Controller
{
    public function __invoke(Request $request)
    {
        return view('pages.search', ['q' => (string) $request->query('q', '')]);
    }
}
