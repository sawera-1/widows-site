<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderItem;

class CheckoutController extends Controller
{
    public function index()
    {
        $cart = session()->get('cart', []);
        
        if (empty($cart)) {
            return redirect()->route('cart.index')->with('error', 'Your cart is empty.');
        }

        $subtotal = 0;
        foreach ($cart as $item) {
            $subtotal += $item['line_total'];
        }

        $tax = $subtotal * 0.20; // 20% VAT
        
        // Delivery cost is handled client-side for simplicity before submission,
        // but we'll default it to 0 here.
        $delivery_cost = 0; 
        
        $total = $subtotal + $tax + $delivery_cost;

        return view('pages.checkout', compact('cart', 'subtotal', 'tax', 'delivery_cost', 'total'));
    }

    public function process(Request $request)
    {
        $cart = session()->get('cart', []);
        
        if (empty($cart)) {
            return redirect()->route('cart.index');
        }

        // Validate the request
        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'billing_address' => 'required|string|max:255',
            'billing_city' => 'required|string|max:255',
            'billing_postcode' => 'required|string|max:20',
            'billing_country' => 'required|string|max:255',
            'delivery_method' => 'required|in:delivery,collection',
            'delivery_address' => 'required_if:delivery_method,delivery|nullable|string|max:255',
            'payment_method' => 'required|in:cod',
        ]);

        // Calculate totals securely on the backend
        $subtotal = 0;
        foreach ($cart as $item) {
            $subtotal += $item['line_total'];
        }
        
        $tax = $subtotal * 0.20;
        $delivery_cost = $request->input('delivery_method') === 'delivery' ? 50 : 0; // Example flat rate
        $total = $subtotal + $tax + $delivery_cost;

        $payment_status = $validated['payment_method'] === 'cod' ? 'unpaid' : 'paid';

        // Customer Capture Logic
        $user_id = auth()->id();
        
        // If they are not logged in, OR they are logged in but provided a different email
        if (!$user_id || (auth()->user() && auth()->user()->email !== $validated['email'])) {
            $user = \App\Models\User::where('email', $validated['email'])->first();
            if (!$user) {
                $user = \App\Models\User::create([
                    'name' => $validated['first_name'] . ' ' . $validated['last_name'],
                    'email' => $validated['email'],
                    'password' => bcrypt(\Illuminate\Support\Str::random(16)),
                    'role' => 'Customer',
                ]);
            }
            $user_id = $user->id;
        }

        // Create the order
        $order = Order::create([
            'order_number' => 'ORD-' . strtoupper(uniqid()),
            'user_id' => $user_id,
            'status' => 'pending',
            'payment_status' => $payment_status,
            'first_name' => $validated['first_name'],
            'last_name' => $validated['last_name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'],
            'billing_address' => $validated['billing_address'],
            'billing_city' => $validated['billing_city'],
            'billing_county' => null,
            'billing_postcode' => $validated['billing_postcode'],
            'billing_country' => $validated['billing_country'],
            'delivery_method' => $validated['delivery_method'],
            'delivery_address' => $validated['delivery_method'] === 'delivery' ? $validated['delivery_address'] : null,
            'subtotal' => $subtotal,
            'delivery_cost' => $delivery_cost,
            'tax' => $tax,
            'discount' => 0,
            'total' => $total,
        ]);

        // Create order items
        foreach ($cart as $item) {
            $productName = ucwords(str_replace('-', ' ', $item['design_slug']));
            
            OrderItem::create([
                'order_id' => $order->id,
                'product_name' => $productName,
                'design_slug' => $item['design_slug'],
                'width' => $item['width'],
                'height' => $item['height'],
                'quantity' => $item['quantity'],
                'unit_price' => $item['unit_price'],
                'line_total' => $item['line_total'],
                'configuration_json' => $item['panes'], // Stores the full array structure
            ]);
        }

        // Clear cart
        session()->forget('cart');

        return redirect()->route('checkout.success', ['id' => $order->id])->with('success_order_id', $order->id);
    }

    public function success($id)
    {
        $order = Order::with('items')->findOrFail($id);
        
        // Allow if they are an admin, OR if they literally just placed this exact order, OR if they own the order
        $isAdmin = auth()->check() && in_array(auth()->user()->role, ['Super Admin', 'Order Manager']);
        
        if (!$isAdmin && session('success_order_id') != $id) {
            if ($order->user_id && $order->user_id !== auth()->id()) {
                abort(403);
            }
        }
        
        return view('pages.checkout-success', compact('order'));
    }
}
