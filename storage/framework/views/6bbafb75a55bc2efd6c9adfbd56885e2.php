<?php $__env->startSection('content'); ?>

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
        <div class="stat-card-value"><?php echo e(\App\Models\Product::count() ?? $products->total()); ?></div>
    </div>
    <div class="stat-card">
        <div class="stat-card-icon">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M5 13l4 4L19 7"/></svg>
        </div>
        <div class="stat-card-title">Active Products</div>
        <div class="stat-card-value"><?php echo e(\App\Models\Product::where('is_active', true)->count() ?? 0); ?></div>
    </div>
    <div class="stat-card">
        <div class="stat-card-icon">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
        </div>
        <div class="stat-card-title">Inactive Products</div>
        <div class="stat-card-value"><?php echo e(\App\Models\Product::where('is_active', false)->count() ?? 0); ?></div>
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
                <?php $__empty_1 = true; $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr>
                    <td>
                        <?php if($product->image): ?>
                            <img src="<?php echo e(asset('assets/products/' . $product->image)); ?>" alt="<?php echo e($product->name); ?>" style="width: 50px; height: 50px; object-fit: contain; background: #fff; border: 1px solid var(--border-color); border-radius: 0;">
                        <?php else: ?>
                            <div style="width: 50px; height: 50px; background: #eee; border: 1px solid var(--border-color); border-radius: 0;"></div>
                        <?php endif; ?>
                    </td>
                    <td>
                        <strong style="color:var(--text-main);"><?php echo e($product->name); ?></strong><br>
                        <small style="color:var(--text-muted);"><?php echo e($product->slug); ?></small>
                    </td>
                    <td style="text-transform: capitalize;"><?php echo e($product->category); ?></td>
                    <td style="font-weight:600;">£<?php echo e(number_format($product->base_price, 2)); ?></td>
                    <td><?php echo e($product->sort_order); ?></td>
                    <td>
                        <span class="badge" style="<?php echo e($product->is_active ? 'background:#10b981; color:#fff;' : 'background:#f5f5f5; color:#666; border:1px solid #ccc;'); ?>">
                            <?php echo e($product->is_active ? 'Active' : 'Inactive'); ?>

                        </span>
                    </td>
                    <td>
                        <div style="display:flex; gap: 8px;">
                            <a href="<?php echo e(route('admin.products.edit', $product->id)); ?>" class="btn btn-primary btn-sm" style="width: 75px; height: 32px; padding: 0; display: inline-flex; align-items: center; justify-content: center; box-sizing: border-box; margin: 0;">Edit</a>
                            
                            <form action="<?php echo e(route('admin.products.destroy', $product->id)); ?>" method="POST" onsubmit="return confirm('Are you sure you want to delete this product?');" style="margin:0;">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="btn btn-delete btn-sm" style="width: 75px; height: 32px; padding: 0; display: inline-flex; align-items: center; justify-content: center; box-sizing: border-box; margin: 0;">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <tr>
                    <td colspan="7" style="text-align:center; padding:40px 16px; color:#999;">
                        <svg style="width:32px;height:32px;margin:0 auto 8px;display:block;opacity:0.3;" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/></svg>
                        No products found.
                    </td>
                </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>

    <?php if($products->hasPages()): ?>
        <div style="margin-top: 20px;">
            <?php echo e($products->links()); ?>

        </div>
    <?php endif; ?>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\internship\windows site\windows-laravel\resources\views/admin/products/index.blade.php ENDPATH**/ ?>