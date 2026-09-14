@extends('admin.layouts.app')

@section('content')

<h1 class="page-title">Dashboard</h1>

<div class="grid-cards">
    <div class="stat-card">
        <div class="stat-card-title">Total Orders</div>
        <div class="stat-card-value">{{ $totalOrders }}</div>
    </div>
    <div class="stat-card">
        <div class="stat-card-title">Pending Orders</div>
        <div class="stat-card-value">{{ $pendingOrders }}</div>
    </div>
    <div class="stat-card">
        <div class="stat-card-title">Completed Orders</div>
        <div class="stat-card-value">{{ $completedOrders }}</div>
    </div>
    <div class="stat-card">
        <div class="stat-card-title">Total Revenue</div>
        <div class="stat-card-value">£{{ number_format($totalRevenue, 2) }}</div>
    </div>
</div>

<div class="grid-cards">
    <div class="stat-card">
        <div class="stat-card-title">Total Customers</div>
        <div class="stat-card-value">{{ $totalCustomers }}</div>
    </div>
    <div class="stat-card">
        <div class="stat-card-title">Total Products</div>
        <div class="stat-card-value">{{ $totalProducts }}</div>
    </div>
</div>

<div class="card">
    <h2 style="font-size: 1.25rem; font-weight:600; margin-bottom:15px;">Recent Orders</h2>
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
                    <td>{{ $order->order_number }}</td>
                    <td>{{ $order->first_name }} {{ $order->last_name }}</td>
                    <td>{{ $order->created_at->format('d M Y') }}</td>
                    <td>£{{ number_format($order->total, 2) }}</td>
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
                            <a href="{{ route('admin.orders.show', $order->id) }}" class="btn btn-outline" style="padding:4px 8px; font-size:0.75rem;">View</a>
                        @endif
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="7">No recent orders available.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

@endsection
