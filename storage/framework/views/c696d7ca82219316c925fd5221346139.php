<?php $__env->startSection('content'); ?>

<div style="margin-bottom: 20px;">
    <a href="<?php echo e(route('admin.products.index')); ?>" class="btn btn-outline">&larr; Back to Products</a>
</div>

<div class="card" style="max-width: 800px;">
    <h1 class="page-title">Edit Product: <?php echo e($product->name); ?></h1>

    <?php if($errors->any()): ?>
        <div style="background-color: #fee2e2; color: #991b1b; padding: 15px; border-radius: 4px; margin-bottom: 20px;">
            <ul style="margin: 0; padding-left: 20px;">
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>

    <form action="<?php echo e(route('admin.products.update', $product->id)); ?>" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>

        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
            <div class="form-group">
                <label for="name" class="form-label">Product Name</label>
                <input type="text" id="name" name="name" class="form-control" value="<?php echo e(old('name', $product->name)); ?>" required>
            </div>
            
            <div class="form-group">
                <label for="slug" class="form-label">Slug (URL)</label>
                <input type="text" id="slug" name="slug" class="form-control" value="<?php echo e(old('slug', $product->slug)); ?>" required>
            </div>
        </div>

        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
            <div class="form-group">
                <label for="category" class="form-label">Category / Type</label>
                <select id="category" name="category" class="form-control" required>
                    <option value="">-- Select --</option>
                    <option value="windows" <?php echo e(old('category', $product->category) == 'windows' ? 'selected' : ''); ?>>Windows</option>
                    <option value="doors" <?php echo e(old('category', $product->category) == 'doors' ? 'selected' : ''); ?>>Doors</option>
                </select>
            </div>

            <div class="form-group">
                <label for="base_price" class="form-label">Base Price (£)</label>
                <input type="number" step="0.01" min="0" id="base_price" name="base_price" class="form-control" value="<?php echo e(old('base_price', $product->base_price)); ?>">
            </div>
        </div>

        <div class="form-group">
            <label for="description" class="form-label">Description (Optional)</label>
            <textarea id="description" name="description" class="form-control" rows="4"><?php echo e(old('description', $product->description)); ?></textarea>
        </div>

        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
            <div class="form-group">
                <label class="form-label">Current Primary Image</label>
                <?php if($product->image): ?>
                    <div style="margin-bottom: 10px;">
                        <img src="<?php echo e(asset('assets/products/' . $product->image)); ?>" style="max-height: 100px; border-radius: 4px; border: 1px solid #e5e7eb;">
                    </div>
                <?php else: ?>
                    <p style="color: var(--text-muted); font-size: 0.875rem;">No image set</p>
                <?php endif; ?>
                <label for="image" class="form-label">Upload New Image (Leave blank to keep current)</label>
                <input type="file" id="image" name="image" class="form-control" accept="image/*">
            </div>

            <div class="form-group">
                <label class="form-label">Current Hover Image</label>
                <?php if($product->hover_image): ?>
                    <div style="margin-bottom: 10px;">
                        <img src="<?php echo e(asset('assets/products/' . $product->hover_image)); ?>" style="max-height: 100px; border-radius: 4px; border: 1px solid #e5e7eb;">
                    </div>
                <?php else: ?>
                    <p style="color: var(--text-muted); font-size: 0.875rem;">No hover image set</p>
                <?php endif; ?>
                <label for="hover_image" class="form-label">Upload New Hover Image (Leave blank to keep current)</label>
                <input type="file" id="hover_image" name="hover_image" class="form-control" accept="image/*">
            </div>
        </div>

        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; align-items: end;">
            <div class="form-group">
                <label for="sort_order" class="form-label">Sort Order</label>
                <input type="number" id="sort_order" name="sort_order" class="form-control" value="<?php echo e(old('sort_order', $product->sort_order)); ?>">
            </div>

            <div class="form-group" style="padding-bottom: 10px;">
                <label style="display: flex; align-items: center; gap: 10px; cursor: pointer;">
                    <input type="checkbox" name="is_active" value="1" <?php echo e(old('is_active', $product->is_active) ? 'checked' : ''); ?>>
                    <span style="font-weight: 500;">Product is Active (Visible on homepage)</span>
                </label>
            </div>
        </div>

        <div style="margin-top: 30px; padding-top: 20px; border-top: 1px solid var(--border-color);">
            <button type="submit" class="btn btn-primary" style="padding: 10px 24px; font-size: 1rem;">Update Product</button>
        </div>
    </form>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\internship\windows site\windows-laravel\resources\views/admin/products/edit.blade.php ENDPATH**/ ?>