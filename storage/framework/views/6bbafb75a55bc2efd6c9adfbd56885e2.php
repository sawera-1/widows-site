<?php $__env->startSection('content'); ?>

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
                <?php $__empty_1 = true; $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr>
                    <td>
                        <?php if($product->image): ?>
                            <img src="<?php echo e(asset('assets/products/' . $product->image)); ?>" alt="<?php echo e($product->name); ?>" style="width: 50px; height: 50px; object-fit: contain; background: #f5f5f5; border-radius: 4px;">
                        <?php else: ?>
                            <div style="width: 50px; height: 50px; background: #eee; border-radius: 4px;"></div>
                        <?php endif; ?>
                    </td>
                    <td>
                        <strong><?php echo e($product->name); ?></strong><br>
                        <small style="color:var(--text-muted);"><?php echo e($product->slug); ?></small>
                    </td>
                    <td style="text-transform: capitalize;"><?php echo e($product->category); ?></td>
                    <td>£<?php echo e(number_format($product->base_price, 2)); ?></td>
                    <td><?php echo e($product->sort_order); ?></td>
                    <td>
                        <span class="badge <?php echo e($product->is_active ? 'badge-dark' : ''); ?>">
                            <?php echo e($product->is_active ? 'Active' : 'Inactive'); ?>

                        </span>
                    </td>
                    <td>
                        <div style="display:flex; gap: 8px;">
                            <a href="<?php echo e(route('admin.products.edit', $product->id)); ?>" class="btn btn-outline" style="padding:4px 8px; font-size:0.75rem;">Edit</a>
                            
                            <form action="<?php echo e(route('admin.products.destroy', $product->id)); ?>" method="POST" onsubmit="return confirm('Are you sure you want to delete this product?');">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="btn btn-outline" style="padding:4px 8px; font-size:0.75rem; color: #dc2626; border-color: #fca5a5;">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <tr>
                    <td colspan="7">No products found.</td>
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