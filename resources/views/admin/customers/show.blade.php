@extends('admin.layouts.app')

@section('content')

<div style="margin-bottom: 20px;">
    <a href="{{ route('admin.customers.index') }}" class="btn btn-outline">Back to Customers</a>
</div>

<div style="display: grid; grid-template-columns: 1fr 2fr; gap: 24px;">
    {{-- Left Column: Customer Profile --}}
    <div>
        <div class="card" style="text-align: center;">
            <div style="width: 80px; height: 80px; background: #000; color: #fff; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.5rem; font-weight: 700; margin: 0 auto 16px;">
                {{ substr(explode(' ', $customer->name)[0], 0, 1) }}{{ isset(explode(' ', $customer->name)[1]) ? substr(explode(' ', $customer->name)[1], 0, 1) : '' }}
            </div>
            <h1 style="font-size: 1.5rem; font-weight: 700; margin-bottom: 8px;">{{ $customer->name }}</h1>
            <p style="color: var(--text-muted); margin-bottom: 24px;">Customer since {{ $customer->created_at->format('M Y') }}</p>

            <div style="text-align: left; border-top: 1px solid var(--border-color); padding-top: 16px;">
                <div style="margin-bottom: 12px;">
                    <strong style="color: var(--text-muted); display: block; font-size: 0.85rem; text-transform: uppercase;">Email Address</strong>
                    <a href="mailto:{{ $customer->email }}" style="font-weight: 500;">{{ $customer->email }}</a>
                </div>
            </div>
        </div>
    </div>

    {{-- Right Column: Order History --}}
    <div>
        <div class="card">
            <h2 style="font-size: 1.25rem; font-weight: 600; margin-bottom: 16px; border-bottom: 1px solid var(--border-color); padding-bottom: 12px;">Order History</h2>
            
            @php
                $orders = \App\Models\Order::where('user_id', $customer->id)->orderBy('created_at', 'desc')->get();
            @endphp

            @if($orders->count() > 0)
                <div class="table-responsive">
                    <table class="admin-table">
                        <thead>
                            <tr>
                                <th>Order #</th>
                                <th>Date</th>
                                <th>Status</th>
                                <th>Total</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($orders as $order)
                            <tr>
                                <td><strong>{{ $order->order_number }}</strong></td>
                                <td>{{ $order->created_at->format('M j, Y') }}</td>
                                <td>
                                    <span class="badge {{ $order->status === 'completed' ? 'badge-success' : (in_array($order->status, ['cancelled', 'pending']) ? 'badge-dark' : '') }}" style="text-transform: capitalize;">
                                        {{ $order->status }}
                                    </span>
                                </td>
                                <td>£{{ number_format($order->total, 2) }}</td>
                                <td>
                                    <a href="{{ route('admin.orders.show', $order->id) }}" class="btn btn-primary btn-sm">View</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @else
                <p style="color: var(--text-muted); padding: 16px 0;">This customer has not placed any orders yet.</p>
            @endif
        </div>
    </div>
</div>

@endsection
