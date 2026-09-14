@extends('admin.layouts.app')

@section('content')

<div style="margin-bottom: 20px;">
    <a href="{{ route('admin.orders.index') }}" class="btn btn-outline">&larr; Back to Orders</a>
</div>

<div style="display: flex; justify-content: space-between; align-items: flex-end; margin-bottom: 24px;">
    <div>
        <h1 class="page-title" style="margin-bottom: 8px;">Order {{ $order->order_number }}</h1>
        <p style="color: var(--text-muted); font-size: 0.95rem;">Placed on {{ $order->created_at->format('M j, Y h:i A') }}</p>
    </div>
    <div style="display: flex; gap: 12px; align-items: center;">
        <span class="badge {{ $order->payment_status === 'paid' ? 'badge-success' : 'badge-dark' }}">
            Payment: {{ ucfirst($order->payment_status) }}
        </span>
        <form action="{{ route('admin.orders.status', $order->id) }}" method="POST" style="display:flex; gap:8px;">
            @csrf
            <select name="status" class="form-control" style="width: auto; padding: 4px 12px;" onchange="this.form.submit()">
                <option value="pending" {{ $order->status === 'pending' ? 'selected' : '' }}>Pending</option>
                <option value="processing" {{ $order->status === 'processing' ? 'selected' : '' }}>Processing</option>
                <option value="completed" {{ $order->status === 'completed' ? 'selected' : '' }}>Completed</option>
                <option value="cancelled" {{ $order->status === 'cancelled' ? 'selected' : '' }}>Cancelled</option>
            </select>
        </form>
    </div>
</div>

<div style="display: grid; grid-template-columns: 2fr 1fr; gap: 24px;">
    {{-- Left Column: Order Items --}}
    <div>
        <div class="card" style="margin-bottom: 24px;">
            <h2 style="font-size: 1.25rem; font-weight: 600; margin-bottom: 16px; padding-bottom: 12px; border-bottom: 1px solid var(--border-color);">Items Ordered</h2>
            
            @foreach($order->items as $item)
                <div style="border: 1px solid var(--border-color); border-radius: 6px; padding: 16px; margin-bottom: 16px;">
                    <div style="display: flex; justify-content: space-between; margin-bottom: 16px;">
                        <div>
                            <h3 style="font-size: 1.1rem; font-weight: 700; margin-bottom: 4px;">{{ $item->product_name }}</h3>
                            <p style="color: var(--text-muted); font-size: 0.9rem;">Model: {{ $item->design_slug }}</p>
                        </div>
                        <div style="text-align: right;">
                            <div style="font-weight: 600; font-size: 1.1rem;">£{{ number_format($item->line_total, 2) }}</div>
                            <div style="color: var(--text-muted); font-size: 0.9rem;">Qty: {{ $item->quantity }} &times; £{{ number_format($item->unit_price, 2) }}</div>
                        </div>
                    </div>

                    <div style="background: var(--bg-body); padding: 12px; border-radius: 4px;">
                        <h4 style="font-size: 0.95rem; font-weight: 600; margin-bottom: 8px;">Configuration Details (Size Form)</h4>
                        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 12px; font-size: 0.9rem;">
                            <div>
                                <span style="color: var(--text-muted);">Overall Width:</span> 
                                <strong>{{ $item->width }} mm</strong>
                            </div>
                            <div>
                                <span style="color: var(--text-muted);">Overall Height:</span> 
                                <strong>{{ $item->height }} mm</strong>
                            </div>
                        </div>
                        
                        @if($item->configuration_json)
                            @php
                                $panes = is_string($item->configuration_json) ? json_decode($item->configuration_json, true) : $item->configuration_json;
                            @endphp
                            @if(is_array($panes) && count($panes) > 0)
                                <div style="margin-top: 12px; border-top: 1px solid var(--border-color); padding-top: 12px;">
                                    <h5 style="font-size: 0.85rem; text-transform: uppercase; letter-spacing: 0.5px; color: var(--text-muted); margin-bottom: 8px;">Pane Specifics</h5>
                                    <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(200px, 1fr)); gap: 12px;">
                                        @foreach($panes as $index => $pane)
                                            <div style="background: var(--bg-card); border: 1px solid var(--border-color); padding: 8px; border-radius: 4px; font-size: 0.85rem;">
                                                <strong style="display: block; margin-bottom: 4px;">Pane {{ $index + 1 }}</strong>
                                                <div style="color: var(--text-muted);">
                                                    <div>Type: <span style="color: var(--text-main); font-weight: 500;">{{ $pane['type'] ?? 'Fixed' }}</span></div>
                                                    <div>Glass: <span style="color: var(--text-main); font-weight: 500;">{{ $pane['glass'] ?? 'Clear' }}</span></div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            @endif
                        @endif
                    </div>
                </div>
            @endforeach
        </div>

        <div class="card">
            <h2 style="font-size: 1.25rem; font-weight: 600; margin-bottom: 16px; padding-bottom: 12px; border-bottom: 1px solid var(--border-color);">Order Summary</h2>
            <div style="display: flex; flex-direction: column; gap: 12px; max-width: 300px; margin-left: auto;">
                <div style="display: flex; justify-content: space-between;">
                    <span style="color: var(--text-muted);">Subtotal</span>
                    <span>£{{ number_format($order->subtotal, 2) }}</span>
                </div>
                <div style="display: flex; justify-content: space-between;">
                    <span style="color: var(--text-muted);">Delivery Cost</span>
                    <span>£{{ number_format($order->delivery_cost, 2) }}</span>
                </div>
                <div style="display: flex; justify-content: space-between;">
                    <span style="color: var(--text-muted);">VAT (20%)</span>
                    <span>£{{ number_format($order->tax, 2) }}</span>
                </div>
                <div style="display: flex; justify-content: space-between; border-top: 1px solid var(--border-color); padding-top: 12px; font-weight: 700; font-size: 1.2rem;">
                    <span>Total</span>
                    <span>£{{ number_format($order->total, 2) }}</span>
                </div>
            </div>
        </div>
    </div>

    {{-- Right Column: Customer Info --}}
    <div>
        <div class="card" style="margin-bottom: 24px;">
            <h2 style="font-size: 1.25rem; font-weight: 600; margin-bottom: 16px; padding-bottom: 12px; border-bottom: 1px solid var(--border-color);">Customer Details</h2>
            
            @if($order->user)
                <div style="margin-bottom: 16px; display: flex; align-items: center; gap: 10px;">
                    <div style="width: 40px; height: 40px; background: #000; color: #fff; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 600;">
                        {{ substr($order->first_name, 0, 1) }}{{ substr($order->last_name, 0, 1) }}
                    </div>
                    <div>
                        <div style="font-weight: 600;">{{ $order->first_name }} {{ $order->last_name }}</div>
                        <a href="{{ route('admin.customers.show', $order->user_id) }}" style="font-size: 0.85rem; color: #666; text-decoration: underline;">View Profile</a>
                    </div>
                </div>
            @else
                <div style="font-weight: 600; margin-bottom: 16px;">{{ $order->first_name }} {{ $order->last_name }} <span class="badge" style="font-size:0.7rem; margin-left:8px;">Guest</span></div>
            @endif

            <div style="display: flex; flex-direction: column; gap: 8px; font-size: 0.95rem;">
                <div><strong style="color: var(--text-muted);">Email:</strong> <a href="mailto:{{ $order->email }}">{{ $order->email }}</a></div>
                <div><strong style="color: var(--text-muted);">Phone:</strong> {{ $order->phone ?? 'N/A' }}</div>
            </div>
        </div>

        <div class="card" style="margin-bottom: 24px;">
            <h2 style="font-size: 1.1rem; font-weight: 600; margin-bottom: 12px;">Billing Address</h2>
            <address style="font-style: normal; color: var(--text-muted); line-height: 1.5; font-size: 0.95rem;">
                {{ $order->billing_address }}<br>
                {{ $order->billing_city }}<br>
                @if($order->billing_county){{ $order->billing_county }}<br>@endif
                {{ $order->billing_postcode }}<br>
                {{ $order->billing_country }}
            </address>
        </div>

        <div class="card">
            <h2 style="font-size: 1.1rem; font-weight: 600; margin-bottom: 12px;">Delivery Method</h2>
            <div style="font-size: 0.95rem; margin-bottom: 12px;">
                <strong style="text-transform: capitalize;">{{ $order->delivery_method }}</strong>
            </div>
            
            @if($order->delivery_method === 'delivery' && $order->delivery_address)
                <address style="font-style: normal; color: var(--text-muted); line-height: 1.5; font-size: 0.95rem;">
                    {{ $order->delivery_address }}
                </address>
            @endif
        </div>
    </div>
</div>

@endsection
