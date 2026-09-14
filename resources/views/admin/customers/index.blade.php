@extends('admin.layouts.app')

@section('content')

<h1 class="page-title">Customers</h1>

<div class="card">
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
                    <td><strong>{{ $customer->name }}</strong></td>
                    <td><a href="mailto:{{ $customer->email }}">{{ $customer->email }}</a></td>
                    <td>{{ $customer->created_at->format('M j, Y') }}</td>
                    <td>
                        {{ \App\Models\Order::where('user_id', $customer->id)->count() }}
                    </td>
                    <td>
                        <a href="{{ route('admin.customers.show', $customer->id) }}" class="btn btn-outline" style="padding:4px 8px; font-size:0.75rem;">View Profile</a>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="6" style="text-align: center; padding: 24px;">No customers found. Customers are automatically created when placing an order.</td>
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
