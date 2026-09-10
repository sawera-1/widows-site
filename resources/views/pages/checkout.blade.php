@extends('layouts.app')

@section('title', 'Checkout — Company Name')

@push('styles')
<style>
    .chk-section { padding: clamp(40px, 6vw, 80px) 0; }
    .chk-container { width: 100%; max-width: 1280px; margin: 0 auto; padding: 0 20px; }
    
    .chk-header { margin-bottom: 32px; border-bottom: 1px solid var(--mono-border-light); padding-bottom: 16px; }
    .dark .chk-header { border-color: var(--mono-border-dark); }
    .chk-header h1 { font-size: 2rem; font-weight: 700; margin: 0; }
    
    .chk-layout { display: grid; grid-template-columns: 1fr; gap: 40px; align-items: start; }
    @media(min-width: 900px) {
        .chk-layout { grid-template-columns: 1fr 420px; }
    }
    
    .chk-form-section { margin-bottom: 32px; }
    .chk-form-section h2 { font-size: 1.25rem; font-weight: 600; margin-bottom: 16px; padding-bottom: 8px; border-bottom: 1px solid var(--mono-border-light); }
    .dark .chk-form-section h2 { border-color: var(--mono-border-dark); }
    
    .chk-grid { display: grid; grid-template-columns: 1fr; gap: 16px; }
    @media(min-width: 600px) {
        .chk-grid.two-cols { grid-template-columns: 1fr 1fr; }
    }
    
    .field-group { display: flex; flex-direction: column; gap: 6px; }
    .field-group label { font-size: 0.9rem; font-weight: 500; color: var(--mono-grey); }
    .dark .field-group label { color: #a3a3a3; }
    
    .chk-input, .chk-select {
        width: 100%; height: 44px; padding: 0 14px;
        border: 1px solid #ccc; border-radius: 0;
        background: transparent; color: inherit; font-family: inherit; font-size: 1rem;
        transition: border-color 0.2s;
    }
    .dark .chk-input, .dark .chk-select { border-color: var(--mono-border-dark); }
    .chk-input:hover, .chk-select:hover { border-color: #000; }
    .dark .chk-input:hover, .dark .chk-select:hover { border-color: #fff; }
    .chk-input:focus, .chk-select:focus { outline: none; border-color: #666; box-shadow: 0 0 0 1px #666; }
    .dark .chk-input:focus, .dark .chk-select:focus { border-color: #a3a3a3; box-shadow: 0 0 0 1px #a3a3a3; }
    
    .chk-radio-group { display: flex; flex-direction: column; gap: 12px; }
    .chk-radio-label { display: flex; align-items: center; gap: 10px; cursor: pointer; padding: 14px; border: 1px solid #ccc; border-radius: 0; transition: border-color 0.2s; }
    .dark .chk-radio-label { border-color: var(--mono-border-dark); }
    .chk-radio-label:hover { border-color: #000; }
    .dark .chk-radio-label:hover { border-color: #fff; }
    .chk-radio-label:has(input:checked) { border-color: #000; background: #f9fafb; }
    .dark .chk-radio-label:has(input:checked) { border-color: #fff; background: #111; }
    .chk-radio-label input[type="radio"] { accent-color: #000; width: 18px; height: 18px; }
    .dark .chk-radio-label input[type="radio"] { accent-color: #fff; }
    
    .chk-summary { background: #f9fafb; border: 1px solid #e5e7eb; border-radius: 0; padding: 24px; position: sticky; top: 24px; }
    .dark .chk-summary { background: #111; }
    .cs-title { font-size: 1.25rem; font-weight: 600; margin-bottom: 20px; }
    
    .cs-items { margin-bottom: 24px; display: flex; flex-direction: column; gap: 16px; border-bottom: 1px solid var(--mono-border-light); padding-bottom: 24px; }
    .dark .cs-items { border-color: var(--mono-border-dark); }
    
    .cs-item { display: flex; justify-content: space-between; font-size: 0.9rem; }
    .cs-item-name { font-weight: 600; margin-bottom: 4px; }
    .cs-item-meta { color: var(--mono-grey); font-size: 0.8rem; }
    .dark .cs-item-meta { color: #a3a3a3; }
    
    .cs-line { display: flex; justify-content: space-between; margin-bottom: 12px; font-size: 0.95rem; }
    .cs-total { display: flex; justify-content: space-between; margin-top: 20px; padding-top: 20px; border-top: 1px solid var(--mono-border-light); font-size: 1.3rem; font-weight: 700; }
    .dark .cs-total { border-color: var(--mono-border-dark); }
    
    .btn-pay { display: block; width: 100%; text-align: center; background: #000; color: white; padding: 16px; border-radius: 0; font-size: 1.1rem; font-weight: 600; margin-top: 24px; border: none; cursor: pointer; transition: background 0.2s; }
    .dark .btn-pay { background: #fff; color: #000; }
    .btn-pay:hover { background: #666; }
    .dark .btn-pay:hover { background: #ccc; }
    .btn-pay:active { background: #999; }
    .dark .btn-pay:active { background: #999; }
    
    .error-text { color: #dc2626; font-size: 0.85rem; margin-top: 4px; }
</style>
@endpush

@section('content')
<section class="chk-section bg-white dark:bg-black text-black dark:text-white min-h-screen">
    <div class="chk-container">
        <div class="chk-header">
            <h1>Checkout</h1>
        </div>

        @if ($errors->any())
            <div style="background: #fef2f2; color: #991b1b; padding: 16px; border-radius: 6px; margin-bottom: 24px;">
                <p style="font-weight: 600; margin-bottom: 8px;">Please correct the following errors:</p>
                <ul style="list-style: disc; margin-left: 20px; font-size: 0.9rem;">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('checkout.process') }}" method="POST" id="checkoutForm">
            @csrf
            
            <div class="chk-layout">
                <div class="chk-form-col">
                    
                    {{-- 1. Contact Information --}}
                    <div class="chk-form-section">
                        <h2>Contact Information</h2>
                        <div class="chk-grid two-cols">
                            <div class="field-group">
                                <label for="first_name">First Name *</label>
                                <input type="text" id="first_name" name="first_name" class="chk-input" required value="{{ old('first_name') }}">
                            </div>
                            <div class="field-group">
                                <label for="last_name">Last Name *</label>
                                <input type="text" id="last_name" name="last_name" class="chk-input" required value="{{ old('last_name') }}">
                            </div>
                        </div>
                        <div class="chk-grid two-cols" style="margin-top: 16px;">
                            <div class="field-group">
                                <label for="email">Email Address *</label>
                                <input type="email" id="email" name="email" class="chk-input" required value="{{ old('email') }}">
                            </div>
                            <div class="field-group">
                                <label for="phone">Phone Number</label>
                                <input type="tel" id="phone" name="phone" class="chk-input" value="{{ old('phone') }}">
                            </div>
                        </div>
                    </div>

                    {{-- 2. Delivery Options --}}
                    <div class="chk-form-section">
                        <h2>Delivery Method</h2>
                        <div class="chk-radio-group">
                            <label class="chk-radio-label">
                                <input type="radio" name="delivery_method" value="delivery" checked onchange="toggleDeliveryCost()">
                                <div>
                                    <div style="font-weight: 600;">Standard Delivery (&pound;50.00)</div>
                                    <div style="font-size: 0.85rem; color: var(--mono-grey);">Delivered directly to your site.</div>
                                </div>
                            </label>
                            <label class="chk-radio-label">
                                <input type="radio" name="delivery_method" value="collection" onchange="toggleDeliveryCost()">
                                <div>
                                    <div style="font-weight: 600;">Collection (Free)</div>
                                    <div style="font-size: 0.85rem; color: var(--mono-grey);">Collect from our depot.</div>
                                </div>
                            </label>
                        </div>
                    </div>

                    {{-- 3. Billing Address --}}
                    <div class="chk-form-section">
                        <h2>Billing Address</h2>
                        <div class="chk-grid">
                            <div class="field-group">
                                <label for="billing_address">Address Line 1 *</label>
                                <input type="text" id="billing_address" name="billing_address" class="chk-input" required value="{{ old('billing_address') }}">
                            </div>
                        </div>
                        <div class="chk-grid two-cols" style="margin-top: 16px;">
                            <div class="field-group">
                                <label for="billing_city">Town / City *</label>
                                <input type="text" id="billing_city" name="billing_city" class="chk-input" required value="{{ old('billing_city') }}">
                            </div>
                            <div class="field-group">
                                <label for="billing_county">County</label>
                                <input type="text" id="billing_county" name="billing_county" class="chk-input" value="{{ old('billing_county') }}">
                            </div>
                        </div>
                        <div class="chk-grid two-cols" style="margin-top: 16px;">
                            <div class="field-group">
                                <label for="billing_postcode">Postcode *</label>
                                <input type="text" id="billing_postcode" name="billing_postcode" class="chk-input" required value="{{ old('billing_postcode') }}">
                            </div>
                            <div class="field-group">
                                <label for="billing_country">Country *</label>
                                <select id="billing_country" name="billing_country" class="chk-select" required>
                                    <option value="UK">United Kingdom</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    {{-- 4. Delivery Address --}}
                    <div class="chk-form-section" id="deliveryAddressSection">
                        <h2>Delivery Address</h2>
                        <p style="font-size: 0.9rem; margin-bottom: 16px; color: var(--mono-grey);">Leave blank if same as billing address.</p>
                        <div class="chk-grid">
                            <div class="field-group">
                                <label for="delivery_address">Full Delivery Address</label>
                                <input type="text" id="delivery_address" name="delivery_address" class="chk-input" value="{{ old('delivery_address') }}">
                            </div>
                        </div>
                    </div>

                    {{-- 5. Payment --}}
                    <div class="chk-form-section">
                        <h2>Payment</h2>
                        <div style="padding: 24px; border: 1px solid var(--mono-border-light); border-radius: 6px; text-align: center; background: #fafafa;" class="dark:border-zinc-800 dark:bg-zinc-900">
                            <svg style="width:40px;height:40px;margin:0 auto 12px;color:#000;" class="dark:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"></path></svg>
                            <p style="font-weight: 500;">Secure Checkout</p>
                            <p style="font-size: 0.85rem; color: var(--mono-grey); margin-top: 4px;">Clicking "Place Order &amp; Pay" will finalize your order. In this demonstration environment, no real payment will be processed.</p>
                        </div>
                    </div>

                </div>
                
                {{-- SUMMARY COL --}}
                <div class="chk-summary-col">
                    <div class="chk-summary">
                        <h2 class="cs-title">Order Summary</h2>
                        
                        <div class="cs-items">
                            @foreach($cart as $item)
                                <div class="cs-item">
                                    <div>
                                        <div class="cs-item-name">{{ ucwords(str_replace('-', ' ', $item['design_slug'])) }} &times; {{ $item['quantity'] }}</div>
                                        <div class="cs-item-meta">{{ $item['width'] }}mm &times; {{ $item['height'] }}mm</div>
                                    </div>
                                    <div style="font-weight: 500;">
                                        &pound;{{ number_format($item['line_total'], 2) }}
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        
                        <div class="cs-line">
                            <span>Subtotal</span>
                            <span>&pound;{{ number_format($subtotal, 2) }}</span>
                        </div>
                        <div class="cs-line">
                            <span>VAT (20%)</span>
                            <span>&pound;{{ number_format($tax, 2) }}</span>
                        </div>
                        <div class="cs-line">
                            <span>Delivery</span>
                            <span id="txtDeliveryCost">&pound;50.00</span>
                        </div>
                        
                        <div class="cs-total">
                            <span>Total</span>
                            <span id="txtTotalCost" data-subtax="{{ $subtotal + $tax }}">&pound;{{ number_format($total + 50, 2) }}</span>
                        </div>
                        
                        <button type="submit" class="btn-pay">Place Order &amp; Pay</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
@endsection

@push('scripts')
<script>
    function toggleDeliveryCost() {
        const method = document.querySelector('input[name="delivery_method"]:checked').value;
        const deliveryEl = document.getElementById('txtDeliveryCost');
        const totalEl = document.getElementById('txtTotalCost');
        const deliverySection = document.getElementById('deliveryAddressSection');
        
        const subTax = parseFloat(totalEl.getAttribute('data-subtax'));
        let deliveryCost = 0;
        
        if (method === 'delivery') {
            deliveryCost = 50.00;
            deliveryEl.innerHTML = '&pound;50.00';
            deliverySection.style.display = 'block';
        } else {
            deliveryCost = 0.00;
            deliveryEl.innerHTML = 'Free';
            deliverySection.style.display = 'none';
        }
        
        const total = subTax + deliveryCost;
        totalEl.innerHTML = '&pound;' + total.toFixed(2);
    }
    
    // Init on load
    document.addEventListener('DOMContentLoaded', () => {
        toggleDeliveryCost();
    });
</script>
@endpush
