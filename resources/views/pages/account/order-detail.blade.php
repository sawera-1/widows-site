@extends('layouts.app')

@section('title', 'Order Details — Company Name')

@push('styles')
<style>
    .acc-section { padding: clamp(40px, 6vw, 80px) 0; }
    .acc-container { width: 100%; max-width: 1000px; margin: 0 auto; padding: 0 20px; }
    
    .btn-back { display: inline-flex; align-items: center; gap: 8px; font-size: 0.9rem; color: var(--mono-grey); text-decoration: none; margin-bottom: 24px; transition: color 0.2s; }
    .btn-back:hover { color: var(--primary-color); }
    
    .acc-header { margin-bottom: 32px; border-bottom: 1px solid var(--mono-border-light); padding-bottom: 16px; display: flex; justify-content: space-between; align-items: flex-end; }
    .dark .acc-header { border-color: var(--mono-border-dark); }
    .acc-header h1 { font-size: 2rem; font-weight: 700; margin: 0; }
    .acc-header .status { font-size: 0.9rem; padding: 4px 12px; background: #e5e7eb; border-radius: 99px; font-weight: 600; text-transform: uppercase; }
    
    .od-grid { display: grid; grid-template-columns: 1fr; gap: 40px; }
    @media(min-width: 800px) {
        .od-grid { grid-template-columns: 1fr 340px; }
    }
    
    .info-card { background: #f9fafb; border: 1px solid var(--mono-border-light); border-radius: 8px; padding: 24px; margin-bottom: 24px; }
    .dark .info-card { background: #111; border-color: var(--mono-border-dark); }
    .ic-title { font-size: 1.1rem; font-weight: 600; margin-bottom: 16px; padding-bottom: 8px; border-bottom: 1px solid var(--mono-border-light); }
    .dark .ic-title { border-color: var(--mono-border-dark); }
    
    .ic-row { margin-bottom: 12px; font-size: 0.95rem; }
    .ic-label { font-size: 0.85rem; color: var(--mono-grey); margin-bottom: 4px; display: block; }
    
    .item-card { border: 1px solid var(--mono-border-light); border-radius: 8px; padding: 24px; margin-bottom: 16px; }
    .dark .item-card { border-color: var(--mono-border-dark); }
    
    .ic-header { display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 16px; }
    .ic-name { font-weight: 600; font-size: 1.1rem; }
    .ic-price { font-weight: 700; font-size: 1.1rem; }
    
    .pane-grid { display: grid; grid-template-columns: 1fr; gap: 12px; background: #f9fafb; padding: 16px; border-radius: 8px; font-size: 0.85rem; }
    .dark .pane-grid { background: #111; }
    @media(min-width: 600px) {
        .pane-grid { grid-template-columns: 1fr 1fr; }
    }
    
    .pane-box { padding-top: 12px; border-top: 1px dashed #e5e7eb; }
    .dark .pane-box { border-color: #333; }
    .pane-title { font-weight: 600; color: var(--primary-color); margin-bottom: 6px; }
</style>
@endpush

@section('content')
<section class="acc-section bg-white dark:bg-black text-black dark:text-white min-h-screen">
    <div class="acc-container">
        
        <a href="{{ route('account.orders') }}" class="btn-back">
            <svg style="width:16px;height:16px;" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
            Back to Orders
        </a>
        
        <div class="acc-header">
            <div>
                <h1>Order {{ $order->order_number }}</h1>
                <div style="color: var(--mono-grey); margin-top: 4px;">Placed on {{ $order->created_at->format('M j, Y \a\t g:i A') }}</div>
            </div>
            <div class="status">{{ $order->status }}</div>
        </div>

        <div class="od-grid">
            <div class="od-items">
                <h2 style="font-size: 1.25rem; font-weight: 600; margin-bottom: 20px;">Configured Items</h2>
                @foreach($order->items as $item)
                    <div class="item-card">
                        <div class="ic-header">
                            <div>
                                <div class="ic-name">{{ $item->product_name }} &times; {{ $item->quantity }}</div>
                                <div style="color: var(--mono-grey); font-size: 0.9rem;">{{ $item->width }}mm &times; {{ $item->height }}mm</div>
                            </div>
                            <div class="ic-price">&pound;{{ number_format($item->line_total, 2) }}</div>
                        </div>
                        
                        <div class="pane-grid">
                            @if(is_array($item->configuration_json))
                                @foreach($item->configuration_json as $index => $pane)
                                    <div class="pane-box">
                                        <div class="pane-title">Pane {{ $index + 1 }}</div>
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
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
            
            <div class="od-sidebar">
                <div class="info-card">
                    <h3 class="ic-title">Order Summary</h3>
                    <div style="display:flex; justify-content:space-between; margin-bottom:8px; font-size:0.95rem;">
                        <span>Subtotal</span>
                        <span>&pound;{{ number_format($order->subtotal, 2) }}</span>
                    </div>
                    <div style="display:flex; justify-content:space-between; margin-bottom:8px; font-size:0.95rem;">
                        <span>VAT (20%)</span>
                        <span>&pound;{{ number_format($order->tax, 2) }}</span>
                    </div>
                    <div style="display:flex; justify-content:space-between; margin-bottom:16px; font-size:0.95rem;">
                        <span>Delivery</span>
                        <span>&pound;{{ number_format($order->delivery_cost, 2) }}</span>
                    </div>
                    <div style="display:flex; justify-content:space-between; font-weight:700; font-size:1.15rem; border-top:1px solid var(--mono-border-light); padding-top:16px;" class="dark:border-zinc-800">
                        <span>Total</span>
                        <span>&pound;{{ number_format($order->total, 2) }}</span>
                    </div>
                </div>

                <div class="info-card">
                    <h3 class="ic-title">Customer Details</h3>
                    <div class="ic-row">
                        <span class="ic-label">Name</span>
                        {{ $order->first_name }} {{ $order->last_name }}
                    </div>
                    <div class="ic-row">
                        <span class="ic-label">Email</span>
                        {{ $order->email }}
                    </div>
                    @if($order->phone)
                        <div class="ic-row">
                            <span class="ic-label">Phone</span>
                            {{ $order->phone }}
                        </div>
                    @endif
                </div>

                <div class="info-card">
                    <h3 class="ic-title">Delivery</h3>
                    <div class="ic-row">
                        <span class="ic-label">Method</span>
                        {{ ucfirst($order->delivery_method) }}
                    </div>
                    @if($order->delivery_address)
                        <div class="ic-row">
                            <span class="ic-label">Address</span>
                            {{ $order->delivery_address }}
                        </div>
                    @endif
                </div>
            </div>
        </div>

    </div>
</section>
@endsection
