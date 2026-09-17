@extends('admin.layouts.app')

@section('content')

<div style="margin-bottom:28px;">
    <h1 class="page-title">Customers</h1>
    <p class="page-subtitle" style="margin-bottom:0;">Manage and view your registered store customers.</p>
</div>

<!-- ─── STAT CARDS ─── -->
<div class="grid-cards" style="grid-template-columns: repeat(3, 1fr); margin-bottom: 24px;">
    <div class="stat-card">
        <div class="stat-card-icon">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
        </div>
        <div class="stat-card-title">Total Customers</div>
        <div class="stat-card-value">{{ $customers->total() }}</div>
    </div>
    <div class="stat-card">
        <div class="stat-card-icon">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
        </div>
        <div class="stat-card-title">New This Month</div>
        <div class="stat-card-value">{{ \App\Models\User::where('role', 'Customer')->whereMonth('created_at', now()->month)->count() ?? 0 }}</div>
    </div>
    <div class="stat-card">
        <div class="stat-card-icon">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
        </div>
        <div class="stat-card-title">Customers with Orders</div>
        <div class="stat-card-value">{{ \App\Models\Order::whereNotNull('user_id')->distinct('user_id')->count('user_id') }}</div>
    </div>
</div>

<div class="card">
    <div class="card-header">
        <h2>All Customers</h2>
    </div>
    <div class="table-responsive">
        <table class="admin-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Joined</th>
                    <th>Orders</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($customers as $customer)
                <tr>
                    <td>{{ $customer->id }}</td>
                    <td><strong style="color:var(--text-main);">{{ $customer->name }}</strong></td>
                    <td><a href="mailto:{{ $customer->email }}" style="color:#6B6B6B;">{{ $customer->email }}</a></td>
                    <td style="color:#6B6B6B;">{{ $customer->created_at->format('M j, Y') }}</td>
                    <td style="font-weight:600;">
                        {{ \App\Models\Order::where('user_id', $customer->id)->count() }}
                    </td>
                    <td>
                        <a href="{{ route('admin.customers.show', $customer->id) }}" class="btn btn-primary btn-sm">View Profile</a>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="6" style="text-align: center; padding: 40px 16px; color:#999;">
                        <svg style="width:32px;height:32px;margin:0 auto 8px;display:block;opacity:0.3;" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                        No customers found. Customers are automatically created when placing an order.
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    @if($customers->hasPages())
        <div style="margin-top: 20px;">
            {{ $customers->links() }}
        </div>
    @endif
</div>

@endsection
