@extends('admin.layouts.app')

@section('content')

<div style="margin-bottom:28px;">
    <h1 class="page-title">Products</h1>
    <p class="page-subtitle" style="margin-bottom:0;">Manage your store's inventory and categories.</p>
</div>

<!-- ─── STAT CARDS ─── -->
<div class="grid-cards" style="grid-template-columns: repeat(3, 1fr); margin-bottom: 24px;">
    <div class="stat-card">
        <div class="stat-card-icon">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/></svg>
        </div>
        <div class="stat-card-title">Total Products</div>
        <div class="stat-card-value">{{ \App\Models\Product::count() ?? $products->total() }}</div>
    </div>
    <div class="stat-card">
        <div class="stat-card-icon">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M5 13l4 4L19 7"/></svg>
        </div>
        <div class="stat-card-title">Active Products</div>
        <div class="stat-card-value">{{ \App\Models\Product::where('is_active', true)->count() ?? 0 }}</div>
    </div>
    <div class="stat-card">
        <div class="stat-card-icon">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
        </div>
        <div class="stat-card-title">Inactive Products</div>
        <div class="stat-card-value">{{ \App\Models\Product::where('is_active', false)->count() ?? 0 }}</div>
    </div>
</div>

<div class="card">
    <div class="card-header">
        <h2>All Products</h2>
    </div>
    <div class="table-responsive">
        <table class="admin-table">
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Category</th>
                    <th>Base Price</th>
                    <th>Sort Order</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($products as $product)
                <tr>
                    <td>
                        @if($product->image)
                            <img src="{{ asset('assets/products/' . $product->image) }}" alt="{{ $product->name }}" style="width: 50px; height: 50px; object-fit: contain; background: #fff; border: 1px solid var(--border-color); border-radius: 0;">
                        @else
                            <div style="width: 50px; height: 50px; background: #eee; border: 1px solid var(--border-color); border-radius: 0;"></div>
                        @endif
                    </td>
                    <td>
                        <strong style="color:var(--text-main);">{{ $product->name }}</strong><br>
                        <small style="color:var(--text-muted);">{{ $product->slug }}</small>
                    </td>
                    <td style="text-transform: capitalize;">{{ $product->category }}</td>
                    <td style="font-weight:600;">£{{ number_format($product->base_price, 2) }}</td>
                    <td>{{ $product->sort_order }}</td>
                    <td>
                        <span class="badge" style="{{ $product->is_active ? 'background:#10b981; color:#fff;' : 'background:#f5f5f5; color:#666; border:1px solid #ccc;' }}">
                            {{ $product->is_active ? 'Active' : 'Inactive' }}
                        </span>
                    </td>
                    <td>
                        <div style="display:flex; gap: 8px;">
                            <a href="{{ route('admin.products.edit', $product->id) }}" class="btn btn-primary btn-sm" style="width: 75px; height: 32px; padding: 0; display: inline-flex; align-items: center; justify-content: center; box-sizing: border-box; margin: 0;">Edit</a>
                            
                            <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this product?');" style="margin:0;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-delete btn-sm" style="width: 75px; height: 32px; padding: 0; display: inline-flex; align-items: center; justify-content: center; box-sizing: border-box; margin: 0;">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="7" style="text-align:center; padding:40px 16px; color:#999;">
                        <svg style="width:32px;height:32px;margin:0 auto 8px;display:block;opacity:0.3;" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/></svg>
                        No products found.
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    @if($products->hasPages())
        <div style="margin-top: 20px;">
            {{ $products->links() }}
        </div>
    @endif
</div>

@endsection
