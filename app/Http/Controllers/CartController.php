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
            $subtotal += ($item['line_total'] ?? 0);
        }
        
        $tax = $subtotal * 0.20; // 20% VAT standard in UK
        $total = $subtotal + $tax;

        return view('pages.cart', compact('cart', 'subtotal', 'tax', 'total'));
    }

    public function add(Request $request)
    {
        $designSlug = $request->input('design') ?? $request->input('design_slug') ?? $request->input('product_id');

        // Validation 1: Require valid product design / ID (Do not enter product into cart if missing)
        if (!$designSlug) {
            return redirect()->back()->with('error', 'Please select a valid product before adding to cart.');
        }

        // Extract price from request fields
        $rawPrice = $request->input('line_total') ?? $request->input('price') ?? $request->input('unit_price') ?? 0;
        $unitPrice = (float) $rawPrice;

        // Validation 2: Require valid price > 0
        if ($unitPrice <= 0) {
            return redirect()->back()->with('error', 'Invalid product price. Please configure your product dimensions and options.');
        }

        $productName = $request->input('product_name') ?? ucwords(str_replace('-', ' ', $designSlug));
        $width = (int) $request->input('width', 1200);
        $height = (int) $request->input('height', 1500);
        $productType = $request->input('product_type', str_contains($designSlug, 'door') ? 'door' : 'window');

        $panesRaw = $request->input('panes_json');
        $panes = is_string($panesRaw) ? (json_decode($panesRaw, true) ?? []) : (is_array($panesRaw) ? $panesRaw : []);

        $cart = session()->get('cart', []);
        $itemId = uniqid();

        $cart[$itemId] = [
            'id'           => $itemId,
            'product_name' => $productName,
            'design_slug'  => $designSlug,
            'product_type' => $productType,
            'width'        => $width,
            'height'       => $height,
            'panes'        => $panes,
            'quantity'     => 1,
            'unit_price'   => $unitPrice,
            'line_total'   => $unitPrice,
        ];

        session()->put('cart', $cart);

        return redirect()->route('cart.index')->with('success', $productName . ' (Width: ' . $width . 'mm, Height: ' . $height . 'mm) added to your cart.');
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
