@extends('admin.layouts.app')

@section('content')

<div style="display:flex; justify-content:space-between; align-items:center; margin-bottom: 20px;">
    <h1 class="page-title" style="margin-bottom:0;">Products</h1>
</div>

<div class="card">
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
                            <img src="{{ asset('assets/products/' . $product->image) }}" alt="{{ $product->name }}" style="width: 50px; height: 50px; object-fit: contain; background: #f5f5f5; border-radius: 4px;">
                        @else
                            <div style="width: 50px; height: 50px; background: #eee; border-radius: 4px;"></div>
                        @endif
                    </td>
                    <td>
                        <strong>{{ $product->name }}</strong><br>
                        <small style="color:var(--text-muted);">{{ $product->slug }}</small>
                    </td>
                    <td style="text-transform: capitalize;">{{ $product->category }}</td>
                    <td>£{{ number_format($product->base_price, 2) }}</td>
                    <td>{{ $product->sort_order }}</td>
                    <td>
                        <span class="badge {{ $product->is_active ? 'badge-dark' : '' }}">
                            {{ $product->is_active ? 'Active' : 'Inactive' }}
                        </span>
                    </td>
                    <td>
                        <div style="display:flex; gap: 8px;">
                            <a href="{{ route('admin.products.edit', $product->id) }}" class="btn btn-outline" style="padding:4px 8px; font-size:0.75rem;">Edit</a>
                            
                            <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this product?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-outline" style="padding:4px 8px; font-size:0.75rem; color: #dc2626; border-color: #fca5a5;">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="7">No products found.</td>
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
