@extends('layouts.app')

@section('title', 'Your Cart — Company Name')

@push('styles')
<style>
    .cart-section { padding: clamp(40px, 6vw, 80px) 0; }
    .cart-container { width: 100%; max-width: 1280px; margin: 0 auto; padding: 0 20px; }
    .cart-layout { display: grid; grid-template-columns: 1fr; gap: 40px; align-items: start; }
    @media(min-width: 900px) {
        .cart-layout { grid-template-columns: 1fr 380px; }
    }
    
    .cart-header { margin-bottom: 24px; border-bottom: 1px solid var(--mono-border-light); padding-bottom: 16px; }
    .dark .cart-header { border-color: var(--mono-border-dark); }
    .cart-header h1 { font-size: 2rem; font-weight: 700; margin: 0; }
    
    .cart-item { display: flex; flex-direction: column; gap: 16px; padding: 24px; border: 1px solid #000; border-radius: 0; margin-bottom: 24px; }
    .dark .cart-item { border-color: #fff; }
    @media(min-width: 600px) {
        .cart-item { flex-direction: row; justify-content: space-between; }
    }
    
    .ci-details { flex: 1; }
    .ci-title { font-size: 1.25rem; font-weight: 600; margin-bottom: 8px; }
    .ci-meta { font-size: 0.9rem; color: var(--mono-grey); margin-bottom: 16px; }
    .dark .ci-meta { color: #a3a3a3; }
    
    .ci-config-grid {
        display: grid;
        grid-template-columns: 1fr;
        gap: 8px;
        background: #f9fafb;
        padding: 16px;
        border-radius: 0;
        border: 1px solid #e5e7eb;
        font-size: 0.85rem;
    }
    .dark .ci-config-grid { background: #111; }
    @media(min-width: 600px) {
        .ci-config-grid { grid-template-columns: 1fr 1fr; }
    }
    
    .ci-pane { margin-top: 12px; padding-top: 12px; border-top: 1px dashed #e5e7eb; }
    .dark .ci-pane { border-color: #333; }
    .ci-pane-title { font-weight: 600; margin-bottom: 4px; color: #000; }
    .dark .ci-pane-title { color: #fff; }
    
    .ci-actions { display: flex; flex-direction: column; align-items: flex-start; gap: 16px; min-width: 140px; }
    @media(min-width: 600px) {
        .ci-actions { align-items: flex-end; text-align: right; }
    }
    .ci-price { font-size: 1.2rem; font-weight: 700; }
    
    .qty-form { display: flex; align-items: center; gap: 8px; }
    .qty-input { width: 60px; height: 36px; text-align: center; border: 1px solid #ccc; border-radius: 0; background: transparent; color: inherit; transition: border-color 0.2s; }
    .dark .qty-input { border-color: #666; }
    .qty-input:hover { border-color: #000; }
    .dark .qty-input:hover { border-color: #fff; }
    .qty-input:focus { outline: none; border-color: #666; box-shadow: 0 0 0 1px #666; }
    .dark .qty-input:focus { border-color: #a3a3a3; box-shadow: 0 0 0 1px #a3a3a3; }
    .btn-update { font-size: 0.8rem; padding: 6px 12px; background: #e5e7eb; border-radius: 0; color: #000; border: 1px solid transparent; }
    .dark .btn-update { background: #333; color: white; }
    .btn-update:hover { background: #d1d5db; border-color: #000; }
    .dark .btn-update:hover { background: #444; border-color: #fff; }
    
    .btn-remove { color: #dc2626; font-size: 0.85rem; text-decoration: underline; background: none; border: none; cursor: pointer; padding: 0; }
    .btn-remove:hover { color: #b91c1c; }
    
    .cart-summary { background: #f9fafb; border: 1px solid #e5e7eb; border-radius: 0; padding: 24px; position: sticky; top: 24px; }
    .dark .cart-summary { background: #111; }
    .cs-title { font-size: 1.25rem; font-weight: 600; margin-bottom: 20px; }
    .cs-line { display: flex; justify-content: space-between; margin-bottom: 12px; font-size: 0.95rem; }
    .cs-total { display: flex; justify-content: space-between; margin-top: 20px; padding-top: 20px; border-top: 1px solid var(--mono-border-light); font-size: 1.3rem; font-weight: 700; }
    .dark .cs-total { border-color: var(--mono-border-dark); }
    
    .btn-checkout { display: block; width: 100%; text-align: center; background: #000; color: white; padding: 14px; border-radius: 0; font-weight: 600; margin-top: 24px; text-decoration: none; transition: background 0.2s; }
    .dark .btn-checkout { background: #fff; color: #000; }
    .btn-checkout:hover { background: #666; }
    .dark .btn-checkout:hover { background: #ccc; }
    .btn-checkout:active { background: #999; }
    .dark .btn-checkout:active { background: #999; }
    
    .empty-cart { text-align: center; padding: 60px 0; }
    .empty-cart p { color: var(--mono-grey); margin-bottom: 24px; }
    .btn-continue { display: inline-block; padding: 12px 24px; background: #000; color: #fff; border-radius: 6px; font-weight: 500; }
    .dark .btn-continue { background: #fff; color: #000; }
</style>
@endpush

@section('content')
<section class="cart-section bg-white dark:bg-black text-black dark:text-white min-h-screen">
    <div class="cart-container">
        <div class="cart-header">
            <h1>Shopping Cart</h1>
        </div>

        @if(session('success'))
            <div style="background: #ecfdf5; color: #065f46; padding: 12px 16px; border-radius: 6px; margin-bottom: 24px; font-size: 0.9rem;">
                {{ session('success') }}
            </div>
        @endif

        @if(session('error'))
            <div style="background: #fef2f2; color: #991b1b; padding: 12px 16px; border-radius: 6px; margin-bottom: 24px; font-size: 0.9rem;">
                {{ session('error') }}
            </div>
        @endif

        @if(empty($cart))
            <div class="empty-cart">
                <p>Your cart is currently empty.</p>
                <a href="{{ route('windows') }}" class="btn-continue">Continue Shopping</a>
            </div>
        @else
            <div class="cart-layout">
                <div class="cart-items-col">
                    @foreach($cart as $id => $item)
                        <div class="cart-item">
                            <div class="ci-details">
                                <div class="ci-title">{{ ucwords(str_replace('-', ' ', $item['design_slug'])) }}</div>
                                <div class="ci-meta">
                                    Size: {{ $item['width'] }}mm &times; {{ $item['height'] }}mm
                                </div>
                                
                                <div class="ci-config-grid">
                                    @if(is_array($item['panes']))
                                        @foreach($item['panes'] as $index => $pane)
                                            <div class="ci-pane">
                                                <div class="ci-pane-title">Pane {{ $index + 1 }}</div>
                                                <div><strong>Opening:</strong> {{ ucwords(str_replace('-', ' ', $pane['opening_type'] ?? 'Fixed')) }}</div>
                                                @if(($pane['opening_type'] ?? 'fixed') !== 'fixed')
                                                    <div><strong>Hinged:</strong> {{ ucfirst($pane['hinged_at'] ?? 'N/A') }}</div>
                                                    <div><strong>Hinge Type:</strong> {{ ucfirst(str_replace('-', ' ', $pane['hinge_type'] ?? 'Standard')) }}</div>
                                                    <div><strong>Handle:</strong> {{ ucfirst($pane['handle_color'] ?? 'White') }}</div>
                                                @endif
                                                <div><strong>Glass:</strong> {{ ucfirst(str_replace('-', ' ', $pane['glass_type'] ?? 'Clear')) }}</div>
                                                @if(!empty($pane['trickle_vent']) && $pane['trickle_vent'] !== 'none')
                                                    <div><strong>Vent:</strong> {{ ucfirst(str_replace('-', ' ', $pane['trickle_vent'])) }}</div>
                                                @endif
                                                @if(!empty($pane['internal_blind']) && $pane['internal_blind'] !== 'none')
                                                    <div><strong>Blind:</strong> {{ ucfirst(str_replace('-', ' ', $pane['internal_blind'])) }}</div>
                                                @endif
                                                @if(!empty($pane['extra_bars']) && $pane['extra_bars'] !== 'none')
                                                    <div><strong>Bars:</strong> {{ ucfirst(str_replace('-', ' ', $pane['extra_bars'])) }}</div>
                                                @endif
                                                @if(!empty($pane['decoration']) && $pane['decoration'] !== 'none')
                                                    <div><strong>Deco:</strong> {{ ucfirst(str_replace('-', ' ', $pane['decoration'])) }}</div>
                                                @endif
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                            
                            <div class="ci-actions">
                                <div class="ci-price">&pound;{{ number_format($item['line_total'], 2) }}</div>
                                
                                <form action="{{ route('cart.update', $id) }}" method="POST" class="qty-form">
                                    @csrf
                                    <input type="number" name="quantity" value="{{ $item['quantity'] }}" min="1" class="qty-input" aria-label="Quantity">
                                    <button type="submit" class="btn-update">Update</button>
                                </form>
                                
                                <form action="{{ route('cart.remove', $id) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn-remove">Remove Item</button>
                                </form>
                            </div>
                        </div>
                    @endforeach
                </div>
                
                <div class="cart-summary-col">
                    <div class="cart-summary">
                        <h2 class="cs-title">Order Summary</h2>
                        <div class="cs-line">
                            <span>Subtotal</span>
                            <span>&pound;{{ number_format($subtotal, 2) }}</span>
                        </div>
                        <div class="cs-line">
                            <span>VAT (20%)</span>
                            <span>&pound;{{ number_format($tax, 2) }}</span>
                        </div>
                        <div class="cs-line" style="color: var(--mono-grey); font-size: 0.85rem;">
                            <span>Delivery calculated at checkout.</span>
                        </div>
                        
                        <div class="cs-total">
                            <span>Total</span>
                            <span>&pound;{{ number_format($total, 2) }}</span>
                        </div>
                        
                        <a href="{{ route('checkout.index') }}" class="btn-checkout">Proceed to Checkout</a>
                    </div>
                </div>
            </div>
        @endif
    </div>
</section>
@endsection
