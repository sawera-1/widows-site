@extends('admin.layouts.app')

@section('content')

<div style="margin-bottom: 20px;">
    <a href="{{ route('admin.products.index') }}" class="btn btn-outline">&larr; Back to Products</a>
</div>

<div class="card" style="max-width: 800px;">
    <h1 class="page-title">Add New Product</h1>

    @if($errors->any())
        <div style="background-color: #fee2e2; color: #991b1b; padding: 15px; border-radius: 4px; margin-bottom: 20px;">
            <ul style="margin: 0; padding-left: 20px;">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
            <div class="form-group">
                <label for="name" class="form-label">Product Name</label>
                <input type="text" id="name" name="name" class="form-control" value="{{ old('name') }}" required>
            </div>
            
            <div class="form-group">
                <label for="slug" class="form-label">Slug (URL)</label>
                <input type="text" id="slug" name="slug" class="form-control" value="{{ old('slug') }}" required>
            </div>
        </div>

        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
            <div class="form-group">
                <label for="category" class="form-label">Category / Type</label>
                <select id="category" name="category" class="form-control" required>
                    <option value="">-- Select --</option>
                    <option value="windows" {{ old('category') == 'windows' ? 'selected' : '' }}>Windows</option>
                    <option value="doors" {{ old('category') == 'doors' ? 'selected' : '' }}>Doors</option>
                </select>
            </div>

            <div class="form-group">
                <label for="base_price" class="form-label">Base Price (£)</label>
                <input type="number" step="0.01" min="0" id="base_price" name="base_price" class="form-control" value="{{ old('base_price', '0.00') }}">
            </div>
        </div>

        <div class="form-group">
            <label for="description" class="form-label">Description (Optional)</label>
            <textarea id="description" name="description" class="form-control" rows="4">{{ old('description') }}</textarea>
        </div>

        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
            <div class="form-group">
                <label for="image" class="form-label">Primary Image</label>
                <input type="file" id="image" name="image" class="form-control" accept="image/*">
            </div>

            <div class="form-group">
                <label for="hover_image" class="form-label">Hover Image (Optional)</label>
                <input type="file" id="hover_image" name="hover_image" class="form-control" accept="image/*">
            </div>
        </div>

        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; align-items: end;">
            <div class="form-group">
                <label for="sort_order" class="form-label">Sort Order</label>
                <input type="number" id="sort_order" name="sort_order" class="form-control" value="{{ old('sort_order', 0) }}">
            </div>

            <div class="form-group" style="padding-bottom: 10px;">
                <label style="display: flex; align-items: center; gap: 10px; cursor: pointer;">
                    <input type="checkbox" name="is_active" value="1" {{ old('is_active', true) ? 'checked' : '' }}>
                    <span style="font-weight: 500;">Product is Active (Visible on homepage)</span>
                </label>
            </div>
        </div>

        <div style="margin-top: 30px; padding-top: 20px; border-top: 1px solid var(--border-color);">
            <button type="submit" class="btn btn-primary" style="padding: 10px 24px; font-size: 1rem;">Save Product</button>
        </div>
    </form>
</div>

<script>
    // Auto-generate slug from name
    document.getElementById('name').addEventListener('input', function(e) {
        let slug = e.target.value.toLowerCase().replace(/[^a-z0-9]+/g, '-').replace(/(^-|-$)+/g, '');
        document.getElementById('slug').value = slug;
    });
</script>

@endsection
