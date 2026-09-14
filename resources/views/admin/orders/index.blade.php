@extends('admin.layouts.app')

@section('content')

<div style="display:flex; justify-content:space-between; align-items:center; margin-bottom: 20px;">
    <h1 class="page-title" style="margin-bottom:0;">Orders</h1>
</div>

<div class="card">
    <div class="table-responsive">
        <table class="admin-table">
            <thead>
                <tr>
                    <th>Order #</th>
                    <th>Customer Name</th>
                    <th>Email</th>
                    <th>Date</th>
                    <th>Status</th>
                    <th>Total</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($orders as $order)
                <tr>
                    <td><strong>{{ $order->order_number }}</strong></td>
                    <td>
                        {{ $order->first_name }} {{ $order->last_name }}
                        @if($order->user_id)
                            <a href="{{ route('admin.customers.show', $order->user_id) }}" title="View Customer Profile">
                                <svg style="width:14px; height:14px; display:inline; margin-left:4px; color:#666;" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                            </a>
                        @endif
                    </td>
                    <td><a href="mailto:{{ $order->email }}">{{ $order->email }}</a></td>
                    <td>{{ $order->created_at->format('M j, Y g:i A') }}</td>
                    <td>
                        <span class="badge {{ $order->status === 'completed' ? 'badge-success' : ($order->status === 'cancelled' ? 'badge-dark' : '') }}" style="text-transform: capitalize;">
                            {{ $order->status }}
                        </span>
                    </td>
                    <td>£{{ number_format($order->total, 2) }}</td>
                    <td>
                        <a href="{{ route('admin.orders.show', $order->id) }}" class="btn btn-outline" style="padding:4px 8px; font-size:0.75rem;">View Order</a>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="7" style="text-align: center; padding: 24px;">No orders found.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    @if($orders->hasPages())
        <div style="margin-top: 20px;">
            {{ $orders->links() }}
        </div>
    @endif
</div>

@endsection
