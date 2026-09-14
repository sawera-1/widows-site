<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class TrackOrderController extends Controller
{
    /**
     * Display the tracking form.
     */
    public function index()
    {
        return view('pages.trackorder');
    }

    /**
     * Process the tracking form and return the result.
     */
    public function track(Request $request)
    {
        $request->validate([
            'order_number' => 'required|string',
            'postcode'     => 'required|string',
        ], [
            'order_number.required' => 'Please enter your order number and postcode.',
            'postcode.required'     => 'Please enter your order number and postcode.',
        ]);

        $orderNumber = trim($request->input('order_number'));
        $postcodeRaw = trim($request->input('postcode'));
        
        // Normalize postcode: remove spaces and lowercase
        $postcodeNormalized = strtolower(str_replace(' ', '', $postcodeRaw));

        $order = Order::where('order_number', $orderNumber)->first();

        // Security: Don't expose whether the order exists or not if postcode doesn't match
        if (!$order) {
            return back()->withInput()->with('error', "We couldn't find an order matching those details. Please check your order number and postcode and try again.");
        }

        $orderPostcodeNormalized = strtolower(str_replace(' ', '', $order->billing_postcode));

        if ($postcodeNormalized !== $orderPostcodeNormalized) {
             return back()->withInput()->with('error', "We couldn't find an order matching those details. Please check your order number and postcode and try again.");
        }

        // Logic: Orders start as 'pending' out of checkout. We now allow users to track them immediately.

        // Return the view with the verified order
        return view('pages.trackorder', compact('order'));
    }
}
