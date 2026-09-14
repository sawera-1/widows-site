<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    public function index()
    {
        // Simple placeholder for account integration
        // Currently retrieves orders by email or user ID if auth is available.
        // Assuming no complex auth for now, we'll just check if logged in.
        
        if (!auth()->check()) {
            return redirect('/')->with('error', 'Please log in to view orders.');
        }

        $orders = Order::where('user_id', auth()->id())
            ->orWhere('email', auth()->user()->email)
            ->orderBy('created_at', 'desc')
            ->get();

        return view('pages.account.orders', compact('orders'));
    }

    public function show($id)
    {
        if (!auth()->check()) {
            return redirect('/');
        }

        $order = Order::with('items')->findOrFail($id);

        if ($order->user_id !== auth()->id() && $order->email !== auth()->user()->email) {
            abort(403, 'Unauthorized access to this order.');
        }

        return view('pages.account.order-detail', compact('order'));
    }
}
