@extends('admin.layouts.app')

@section('content')

<div style="display:flex; align-items:center; justify-content:space-between; margin-bottom:28px;">
    <div>
        <h1 class="page-title">Dashboard</h1>
        <p class="page-subtitle">Overview of your store performance and recent activity.</p>
    </div>
</div>

<!-- ─── ROW 1: PRIMARY STATS ─── -->
<div class="grid-cards" style="grid-template-columns: repeat(4, 1fr);">
    <div class="stat-card">
        <div class="stat-card-icon">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/></svg>
        </div>
        <div class="stat-card-title">Total Orders</div>
        <div class="stat-card-value">{{ $totalOrders }}</div>
    </div>
    <div class="stat-card">
        <div class="stat-card-icon">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
        </div>
        <div class="stat-card-title">Pending Orders</div>
        <div class="stat-card-value">{{ $pendingOrders }}</div>
    </div>
    <div class="stat-card">
        <div class="stat-card-icon">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
        </div>
        <div class="stat-card-title">Completed Orders</div>
        <div class="stat-card-value">{{ $completedOrders }}</div>
    </div>
    <div class="stat-card">
        <div class="stat-card-icon">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
        </div>
        <div class="stat-card-title">Total Revenue</div>
        <div class="stat-card-value">£{{ number_format($totalRevenue, 2) }}</div>
    </div>
</div>

<!-- ─── ROW 2: SECONDARY STATS ─── -->
<div class="grid-cards" style="grid-template-columns: repeat(4, 1fr);">
    <div class="stat-card">
        <div class="stat-card-icon">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
        </div>
        <div class="stat-card-title">Total Customers</div>
        <div class="stat-card-value">{{ $totalCustomers }}</div>
    </div>
    <div class="stat-card">
        <div class="stat-card-icon">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/></svg>
        </div>
        <div class="stat-card-title">Total Products</div>
        <div class="stat-card-value">{{ $totalProducts }}</div>
    </div>
</div>

<!-- ─── RECENT ORDERS TABLE ─── -->
<div class="card">
    <div class="card-header">
        <h2>Recent Orders</h2>
        <a href="{{ route('admin.orders.index') }}" class="btn btn-outline btn-sm">View All</a>
    </div>
    <div class="table-responsive">
        <table class="admin-table">
            <thead>
                <tr>
                    <th>Order #</th>
                    <th>Customer</th>
                    <th>Date</th>
                    <th>Amount</th>
                    <th>Payment</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse($recentOrders as $order)
                <tr>
                    <td style="font-weight:600;">{{ $order->order_number }}</td>
                    <td>{{ $order->first_name }} {{ $order->last_name }}</td>
                    <td style="color:#6B6B6B;">{{ $order->created_at->format('d M Y') }}</td>
                    <td style="font-weight:600;">£{{ number_format($order->total, 2) }}</td>
                    <td>
                        <span class="badge">{{ $order->payment_status }}</span>
                    </td>
                    <td>
                        <span class="badge {{ $order->status === 'New' || $order->status === 'pending' ? 'badge-dark' : '' }}">
                            {{ $order->status }}
                        </span>
                    </td>
                    <td>
                        @if(Auth::user()->role === 'Super Admin' || Auth::user()->role === 'Order Manager')
                            <a href="{{ route('admin.orders.show', $order->id) }}" class="btn btn-primary btn-sm">View</a>
                        @endif
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="7" style="text-align:center; padding:40px 16px; color:#999;">
                        <svg style="width:32px;height:32px;margin:0 auto 8px;display:block;opacity:0.3;" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/></svg>
                        No recent orders available.
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

@endsection
