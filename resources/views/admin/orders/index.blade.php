@extends('admin.layouts.app')

@section('content')

<div style="margin-bottom:28px;">
    <h1 class="page-title">Orders</h1>
    <p class="page-subtitle">Manage and track all customer orders.</p>
</div>

<!-- ─── STAT CARDS ─── -->
<div class="grid-cards" style="grid-template-columns: repeat(3, 1fr);">
    <div class="stat-card">
        <div class="stat-card-icon">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/></svg>
        </div>
        <div class="stat-card-title">All Orders</div>
        <div class="stat-card-value">{{ $orders->total() }}</div>
    </div>
    <div class="stat-card">
        <div class="stat-card-icon">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
        </div>
        <div class="stat-card-title">Pending</div>
        <div class="stat-card-value">{{ $orders->where('status', 'pending')->count() }}</div>
    </div>
    <div class="stat-card">
        <div class="stat-card-icon">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
        </div>
        <div class="stat-card-title">Completed</div>
        <div class="stat-card-value">{{ $orders->where('status', 'completed')->count() }}</div>
    </div>
</div>

<!-- ─── ORDERS TABLE ─── -->
<div class="card">
    <div class="card-header">
        <h2>All Orders</h2>
    </div>
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
                    <td style="font-weight:600;">{{ $order->order_number }}</td>
                    <td>
                        {{ $order->first_name }} {{ $order->last_name }}
                        @if($order->user_id)
                            <a href="{{ route('admin.customers.show', $order->user_id) }}" title="View Customer Profile">
                                <svg style="width:14px; height:14px; display:inline; margin-left:4px; color:#666;" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                            </a>
                        @endif
                    </td>
                    <td><a href="mailto:{{ $order->email }}" style="color:#6B6B6B;">{{ $order->email }}</a></td>
                    <td style="color:#6B6B6B;">{{ $order->created_at->format('M j, Y g:i A') }}</td>
                    <td>
                        <span class="badge {{ $order->status === 'completed' ? 'badge-success' : (in_array($order->status, ['cancelled', 'pending']) ? 'badge-dark' : '') }}" style="text-transform: capitalize;">
                            {{ $order->status }}
                        </span>
                    </td>
                    <td style="font-weight:600;">£{{ number_format($order->total, 2) }}</td>
                    <td>
                        <a href="{{ route('admin.orders.show', $order->id) }}" class="btn btn-primary btn-sm">View Order</a>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="7" style="text-align:center; padding:40px 16px; color:#999;">
                        <svg style="width:32px;height:32px;margin:0 auto 8px;display:block;opacity:0.3;" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/></svg>
                        No orders found.
                    </td>
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
