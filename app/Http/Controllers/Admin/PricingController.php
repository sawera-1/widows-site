<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PricingRule;
use Illuminate\Http\Request;

class PricingController extends Controller
{
    public function index()
    {
        $rules = PricingRule::paginate(20);
        return view('admin.pricing.index', compact('rules'));
    }
}
