<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        $cart = session()->get('cart', []);
        
        $subtotal = 0;
        foreach ($cart as $item) {
            $subtotal += $item['line_total'];
        }
        
        $tax = $subtotal * 0.20; // 20% VAT standard in UK
        $total = $subtotal + $tax;

        return view('pages.cart', compact('cart', 'subtotal', 'tax', 'total'));
    }

    public function add(Request $request)
    {
        $cart = session()->get('cart', []);
        
        // Use a unique ID for each cart item so we can identify and remove specific ones
        $itemId = uniqid();

        // Decode JSON configurations from the frontend string
        $panes = json_decode($request->input('panes_json'), true) ?? [];

        $cart[$itemId] = [
            'id' => $itemId,
            'design_slug' => $request->input('design', 'standard-casement'),
            'width' => (int) $request->input('width', 1200),
            'height' => (int) $request->input('height', 1500),
            'panes' => $panes,
            'quantity' => 1,
            'unit_price' => (float) $request->input('line_total', 0),
            'line_total' => (float) $request->input('line_total', 0),
        ];

        session()->put('cart', $cart);

        return redirect()->route('cart.index')->with('success', 'Item added to cart.');
    }

    public function update(Request $request, $id)
    {
        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            $quantity = (int) $request->input('quantity', 1);
            if ($quantity < 1) $quantity = 1;

            $cart[$id]['quantity'] = $quantity;
            $cart[$id]['line_total'] = $cart[$id]['unit_price'] * $quantity;
            
            session()->put('cart', $cart);
        }

        return redirect()->route('cart.index');
    }

    public function remove($id)
    {
        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            unset($cart[$id]);
            session()->put('cart', $cart);
        }

        return redirect()->route('cart.index')->with('success', 'Item removed from cart.');
    }
}
