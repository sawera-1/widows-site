@extends('layouts.app')

@section('title', 'Order Confirmation — Company Name')

@push('styles')
<style>
    .success-section { padding: clamp(60px, 8vw, 100px) 0; text-align: center; }
    .success-container { width: 100%; max-width: 800px; margin: 0 auto; padding: 0 20px; }
    
    .icon-wrapper { 
        width: 80px; height: 80px; margin: 0 auto 24px; 
        background: #ecfdf5; color: #10b981; 
        border-radius: 50%; display: flex; align-items: center; justify-content: center; 
    }
    .dark .icon-wrapper { background: rgba(16, 185, 129, 0.1); }
    
    .success-title { font-size: 2.5rem; font-weight: 700; margin-bottom: 16px; }
    .success-subtitle { font-size: 1.1rem; color: var(--mono-grey); margin-bottom: 40px; }
    
    .order-details-card {
        background: #f9fafb; border: 1px solid var(--mono-border-light); border-radius: 12px;
        text-align: left; padding: 32px; margin-bottom: 40px;
    }
    .dark .order-details-card { background: #111; border-color: var(--mono-border-dark); }
    
    .odc-grid { display: grid; grid-template-columns: 1fr; gap: 24px; margin-bottom: 32px; padding-bottom: 32px; border-bottom: 1px solid var(--mono-border-light); }
    .dark .odc-grid { border-color: var(--mono-border-dark); }
    @media(min-width: 600px) {
        .odc-grid { grid-template-columns: 1fr 1fr; }
    }
    
    .odc-label { font-size: 0.85rem; color: var(--mono-grey); font-weight: 600; text-transform: uppercase; letter-spacing: 0.05em; margin-bottom: 4px; }
    .odc-value { font-size: 1.1rem; font-weight: 500; }
    
    .odc-items-title { font-size: 1.25rem; font-weight: 600; margin-bottom: 16px; }
    
    .odc-item { display: flex; justify-content: space-between; padding: 12px 0; border-bottom: 1px dashed #e5e7eb; }
    .dark .odc-item { border-color: #333; }
    .odc-item:last-child { border-bottom: none; }
    
    .btn-primary { display: inline-block; padding: 14px 28px; background: var(--primary-color); color: white; border-radius: 8px; font-weight: 600; text-decoration: none; margin-right: 12px; }
    .btn-secondary { display: inline-block; padding: 14px 28px; background: var(--mono-grey-light); color: black; border-radius: 8px; font-weight: 600; text-decoration: none; }
    .dark .btn-secondary { background: #333; color: white; }
</style>
@endpush

@section('content')
<section class="success-section bg-white dark:bg-black text-black dark:text-white min-h-screen">
    <div class="success-container">
        <div class="icon-wrapper">
            <svg style="width:40px;height:40px;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
            </svg>
        </div>
        
        <h1 class="success-title">Order Confirmed</h1>
        <p class="success-subtitle">Thank you for your order, {{ $order->first_name }}. We've received it and are processing it now.</p>
        
        <div class="order-details-card">
            <div class="odc-grid">
                <div>
                    <div class="odc-label">Order Number</div>
                    <div class="odc-value">{{ $order->order_number }}</div>
                </div>
                <div>
                    <div class="odc-label">Date</div>
                    <div class="odc-value">{{ $order->created_at->format('M j, Y') }}</div>
                </div>
                <div>
                    <div class="odc-label">Payment Status</div>
                    <div class="odc-value" style="color: #10b981;">{{ ucfirst($order->payment_status) }}</div>
                </div>
                <div>
                    <div class="odc-label">Total Amount</div>
                    <div class="odc-value">&pound;{{ number_format($order->total, 2) }}</div>
                </div>
                <div>
                    <div class="odc-label">Delivery Method</div>
                    <div class="odc-value">{{ ucfirst($order->delivery_method) }}</div>
                </div>
                <div>
                    <div class="odc-label">Billing Email</div>
                    <div class="odc-value">{{ $order->email }}</div>
                </div>
            </div>
            
            <h2 class="odc-items-title">Order Items</h2>
            <div style="margin-bottom: 24px;">
                @foreach($order->items as $item)
                    <div class="odc-item">
                        <div>
                            <strong>{{ $item->product_name }}</strong> &times; {{ $item->quantity }}<br>
                            <span style="font-size: 0.85rem; color: var(--mono-grey);">{{ $item->width }}mm &times; {{ $item->height }}mm</span>
                        </div>
                        <div style="font-weight: 500;">
                            &pound;{{ number_format($item->line_total, 2) }}
                        </div>
                    </div>
                @endforeach
            </div>
            
            <div style="display: flex; justify-content: space-between; border-top: 2px solid var(--mono-border-light); padding-top: 16px; font-weight: 700; font-size: 1.1rem;" class="dark:border-zinc-800">
                <span>Final Total</span>
                <span>&pound;{{ number_format($order->total, 2) }}</span>
            </div>
        </div>
        
        <div>
            @if(auth()->check())
                <a href="{{ route('account.orders') }}" class="btn-primary">View My Orders</a>
            @endif
            <a href="{{ route('windows') }}" class="btn-secondary">Continue Shopping</a>
        </div>
    </div>
</section>
@endsection
